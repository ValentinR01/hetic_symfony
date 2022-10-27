<?php

namespace App\Service;
use App\Controller\BaseController;
use http\Message;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImgHelper
{
    private string $imagesDir;

    public function __construct(string $projectDir){
        $this->imagesDir = $this->getParameter('kernel.project_dir').'public/uploads';
    }

    public function uploadImg(UploadedFile $uploadedFile): string
    {
        $uploadedExtensionChecked = $uploadedFile->guessExtension();

        // Accept Only Img Types JPEG & PNG
        if ($uploadedExtensionChecked != ('jpeg' or 'png')){
            return new Exception($message = "Ce fichier n'est ni un jpeg, ni un png.");
        }

        // Generate random image name to prevent strangeness
        $fileName = uniqid() . $uploadedExtensionChecked;

        // Deplace file from tempory to definitive direction
        $uploadedFile->move($this->imagesDir, $fileName);

        return $fileName;
    }

}