<?php

namespace App\Services;

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
use Sabre\DAV\Client;
use Sabre\DAV\Collection;
use Sabre\DAV\INode;
use Sabre\Xml\Reader;
use Sabre\Xml\XmlDeserializable;
use Symfony\Component\DependencyInjection\ContainerInterface; 
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;

class Webdav
{

    private $params;
    private $client;
    private $sourcePath;
    private $sourceFileName;
    //private $destPath = "https://www.restock.ca/dav/product_images/import/";
    private $destPath = "https://store-ywapzaserd.mybigcommerce.com/dav/product_images/import/";
    private $userName = "restock.photobooths@gmail.com";
    private $password = "463572357761cd74899dc72bdb17678f505f9218";

    public function __construct(ParameterBagInterface $params)

    {
        $this->params = $params;
        $sourcePath = $this->params->get('photos_directory');
        $sourcePath .= "/";
        $this->sourcePath = $sourcePath;
    
        $settings = array(
            'baseUri' => $this->destPath,
            'userName' => $this->userName,
            'password' => $this->password,     
        );

        $this->client = new Client($settings);

    }

    /**
     * @return bool
    */
    public function uploadFile($fileName, $fileContent, $subfolder=null):bool
    {          
        if ($subfolder) {
            $fileName = $subfolder."/".$fileName;
        } 
        $request = $this->client->request('PUT', $fileName, $fileContent);
        return $this->response($request);
    }

    /**
     * @return bool
    */
    /*   
    public function uploadLotId($id):bool
    {       
        if ($subfolder) {
            $fileName = $subfolder."/".$fileName;
        } 
        $request = $this->client->request('PUT', $fileName, $fileContent);
        return $this->response($request);
    }
    */

    /**
     * @return bool
    */
    public function deleteFile($file, $subfolder=null):bool
    {
        if ($subfolder) {
            $file = $subfolder."/".$file;
        }
        $request = $this->client->request('DELETE', $file, null);
        return $this->response($request);
    }

    /**
     * @return bool
    */
    public function folderExist($folder):bool
    {
        $request = $this->client->propFind("", ['{DAV:}displayname'], 1);
        if ($request) {
            foreach($request as $key=>$value) {
                $response = $this->endsWith( "/".$folder."/", $key );
                if ($response) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @return bool
    */
    public function createFolder($folder):bool
    {
       $request = $this->client->request('MKCOL', $folder);
       return $this->response($request);
    }

    /**
     * @return bool
    */
    public function response($request):bool
    {
        $response = $request["statusCode"];
        if ($response === 200 || $response === 201 || $response === 204) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
    */
    private function endsWith($query, $key):bool    {
        $key_length = strlen( $key );
        $query_length = strlen( $query );

        if (substr($key, $key_length-$query_length ) === $query) {
            return true;
        } 

        return false;
    }

    /**
     * @return bool
    */
    public function getImage($po, $image)    {

        $fileName = "".$po."/".$image;
        
       $request = $this->client->request('GET', $fileName);

        return $request;

    }

    /**
     * @return Response
    */
    public function displayImage($po, $image)
    {
        $fileName = $po."/".$image;
        $request = $this->client->request('GET', $fileName);
     
        $mime="image/jpeg";
        $binary_data = "data:" . $mime . ";base64," . base64_encode($request['body']);

        return $binary_data;
       
    }
}