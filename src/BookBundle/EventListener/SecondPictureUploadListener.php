<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 28/06/17
 * Time: 14:46
 */

namespace BookBundle\EventListener;

use BookBundle\Entity\Project;
use BookBundle\Service\FileUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class SecondPictureUploadListener
{
    private $uploader;

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
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Project) {
            return;
        }

        $masterRequest = $this->requestStack->getMasterRequest()->get('_route');
        if ($masterRequest == "project_edit") {
            if ($fileName = $entity->getSecondPicture()) {
                $entity->setSecondPicture(new File($this->uploader->getTargetDir() . '/' . $fileName));
            }
        }

    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Project) {
            return;
        }

        if (is_file($entity->getSecondPicture())) {
            unlink($entity->getSecondPicture());
        }

    }

    private function uploadFile($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof Project) {
            return;
        }

        $file = $entity->getSecondPicture();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setSecondPicture($fileName);
    }

}