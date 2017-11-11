<?php

class main extends controller implements controllerInterface
{

    function index()
    {
        load::view("main::index");
    }

    /**
     * @param $source
     * @param $destination
     * @param $quality
     * @return mixed
     * Returns compressed image
     */
    function compress($source, $destination, $quality)
    {
        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source);

        elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($source);

        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($source);

        imagejpeg($image, $destination, $quality);

        return $destination;
    }


    public function uploadImage()
    {
        $img = $_FILES['img']['tmp_name'][0];
        $quality = url::post('compress_val');
        $destination = $GLOBALS["config"]["path"]["basePath"] . "/" . $GLOBALS['config']['path']['uploads'] . '/' . uniqid() . '.jpg';
        $this->compress($img, $destination, $quality);

        $file_url = $destination;
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile($file_url); // kinda overkill, but eh ;)
    }
}

?>