<?php

namespace App\Services;

class Base64Convert
{

    /** @var string */
    private $filePrefix;

    /**
     * @param string $base64
     * @param string $targetPath
     * @param string $filePrefix
     * @return string name of converted file
     */
    public function convertToFile(string $base64, string $targetPath, string $fileName): string
    {
       

        //$this->filePrefix = $filePrefix;
       // $fileName = $this->generateFileName();
        $filePath = $this->generateFilePath($targetPath, $fileName);

        
        $file = fopen($filePath, 'wb');
        $data = explode(',', $base64);
        fwrite($file, base64_decode($data[1]));
        fclose($file);
        
       // $fileExt = "jpg"; 
       
        rename($filePath, $filePath);
       // rename($filePath, $filePath . '.' . $fileExt);
       

        return $fileName;
        //return $fileName . '.' . $fileExt;
    }

    /**
     * @param string $targetPath
     * @param string $fileName
     * @return string
     */
    private function generateFilePath(string $targetPath, string $fileName): string
    {
        return $targetPath . '/' . $fileName;
    }

    /**
     * @return string
     */
    private function generateFileName(): string
    {
        return uniqid($this->filePrefix, true);
    }

    /**
     * @param string $filePath
     * @return string
     */
    private function getFileExt(string $filePath): string
    {
        $guesser = MimeTypeGuesser::getInstance();
        $extensionGuesser = new MimeTypeExtensionGuesser();

        return $extensionGuesser->guess(
            $guesser->guess($filePath)
        );
    }

}
