<?php
namespace App\Helper;

use App\Controller\BaseController;
use http\Message;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ImgHelper 
{
    private string $imagesDir;

    public function __construct(ParameterBagInterface $params){
        $this->imagesDir = $params->get('kernel.project_dir').'/public/images/';
    }
    

    public function uploadImg(UploadedFile $uploadedFile): string
    {
        $uploadedExtensionChecked = $uploadedFile->guessExtension();

        // Accept Only Img Types JPEG & PNG
        if ($uploadedExtensionChecked != ('jpeg' or 'png')){
            return new Exception($message = "Ce fichier n'est ni un jpeg, ni un png.");
        }

        // Generate random image name to prevent strangeness
        $fileName = uniqid() . '.' . $uploadedExtensionChecked;

        // Deplace file from tempory to definitive direction
        $uploadedFile->move($this->imagesDir, $fileName);

        return $fileName;
    }

}