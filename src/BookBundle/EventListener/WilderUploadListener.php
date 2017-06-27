<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 11/06/17
 * Time: 22:03
 */

namespace BookBundle\EventListener;


use BookBundle\Entity\Wilder;
use BookBundle\Service\FileUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class WilderUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
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
//        $path = $request->getPathInfo();
//        dump($path); die();

        if (!$entity instanceof Wilder) {
            return;
        }

        if ($fileName = $entity->getProfilPicture()) {
            $entity->setProfilPicture(new File($this->uploader->getTargetDir().'/'.$fileName));
        }

    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Wilder) {
            return;
        }

        if(is_file($entity->getProfilPicture())) {
            unlink($entity->getProfilPicture());
        }

    }

    private function uploadFile($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof Wilder) {
            return;
        }

        $file = $entity->getProfilPicture();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setProfilPicture($fileName);
    }

}