<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 28/06/17
 * Time: 14:35
 */

namespace BookBundle\EventListener;

use BookBundle\Entity\Project;
use BookBundle\Service\FileUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RequestStack;

class ProjectPictureUploadListener
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
            if ($fileName = $entity->getPrincipalPicture()) {
                $entity->setPrincipalPicture(new File($this->uploader->getTargetDir() . '/' . $fileName));
            }
            if ($fileName = $entity->getFirstPicture()) {
                $entity->setFirstPicture(new File($this->uploader->getTargetDir() . '/' . $fileName));
            }
            if ($fileName = $entity->getSecondPicture()) {
                $entity->setSecondPicture(new File($this->uploader->getTargetDir() . '/' . $fileName));
            }
            if ($fileName = $entity->getThirdPicture()) {
                $entity->setThirdPicture(new File($this->uploader->getTargetDir() . '/' . $fileName));
            }
            if ($fileName = $entity->getFourthPicture()) {
                $entity->setFourthPicture(new File($this->uploader->getTargetDir() . '/' . $fileName));
            }
        }


    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Project) {
            return;
        }

        if (is_file($entity->getPrincipalPicture())) {
            unlink($entity->getPrincipalPicture());
        }

        if (is_file($entity->getFirstPicture())) {
            unlink($entity->getFirstPicture());
        }

        if (is_file($entity->getSecondPicture())) {
            unlink($entity->getSecondPicture());
        }

        if (is_file($entity->getThirdPicture())) {
            unlink($entity->getThirdPicture());
        }

        if (is_file($entity->getFourthPicture())) {
            unlink($entity->getFourthPicture());
        }

    }

    private function uploadFile($entity)
    {

        if (!$entity instanceof Project) {
            return;
        }

        $file = $entity->getPrincipalPicture();

        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setPrincipalPicture($fileName);

        if (!$entity instanceof Project) {
            return;
        }

        $file = $entity->getFirstPicture();

        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setFirstPicture($fileName);

        if (!$entity instanceof Project) {
            return;
        }

        $file = $entity->getSecondPicture();

        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setSecondPicture($fileName);

        if (!$entity instanceof Project) {
            return;
        }

        $file = $entity->getThirdPicture();

        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setThirdPicture($fileName);

        if (!$entity instanceof Project) {
            return;
        }

        $file = $entity->getFourthPicture();

        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setFourthPicture($fileName);
    }

}