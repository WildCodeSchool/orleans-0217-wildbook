<?php

namespace BookBundle\EventListener;

use BookBundle\Entity\Wilder;
use BookBundle\Service\FileUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RequestStack;

class CvUploadListener
{
    private $uploader;
    private $oldCv;

    public function __construct(FileUploader $uploader, RequestStack $requestStack)
    {
        $this->uploader = $uploader;
        $this->requestStack = $requestStack;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);

        if($this->oldCv){
            $entity->setCv($this->oldCv);
        }
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Wilder) {
            return;
        }

        $masterRequest = $this->requestStack->getMasterRequest()->get('_route');
        if ($masterRequest == "wilder_edit") {
            $this->oldCv = $entity->getCv();
            if ($fileName = $entity->getCv()) {
                $entity->setCv(new File($this->uploader->getTargetDir().'/'.$fileName));
            }
        }
    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Wilder) {
            return;
        }

        if(is_file($entity->getCv())) {
            unlink($entity->getCv());
        }
    }

    private function uploadFile($entity)
    {
        // upload only works for Wilder entities
        if (!$entity instanceof Wilder) {
            return;
        }

        $file = $entity->getCv();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setCv($fileName);
    }


}