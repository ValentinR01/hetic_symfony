<?php
namespace App\Helper;

use App\Controller\BaseController;
use http\Message;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ImgHelper 
{
    private string $kernelDir;
    private string $imagesDir;

    public function __construct(ParameterBagInterface $params){
        $this->kernelDir = $params->get('kernel.project_dir');
        $this->imagesDir = '/public/images/';
    }

    public function getKernelDirectory(): string{
        return $this->kernelDir;
    }
    

    public function uploadImg(UploadedFile $uploadedFile, string $existingFileName = null): string
    {
        $uploadedExtensionChecked = $uploadedFile->guessExtension();

        // Accept Only Img Types JPEG & PNG
        if ($uploadedExtensionChecked != ('jpeg' or 'png')){
            throw new Exception($message = "Ce fichier n'est ni un jpeg, ni un png.");
        }

        // Generate random image name to prevent strangeness
        $fileName = uniqid() . '.' . $uploadedExtensionChecked;

        // Deplace file from tempory to definitive direction
        $uploadedFile->move($this->kernelDir . $this->imagesDir, $fileName);

        // Delete old image
        //$this->defaultStorage->delete($this->kernelDir . '/public' . $existingFileName);

        return "/images/".$fileName;
    }

}