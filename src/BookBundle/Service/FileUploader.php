<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 11/06/17
 * Time: 18:06
 */

namespace BookBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;


class FileUploader
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->targetDir, $fileName);

        return $fileName;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }

}