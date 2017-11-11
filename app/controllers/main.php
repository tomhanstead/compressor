<?php

class main extends controller implements controllerInterface
{
    function index()
    {
        load::view("main::index");
    }

    public function uploadImage()
    {
        $img = $_FILES['img']['tmp_name'][0];
        $quality = url::post('compress_val');
        $destination = $GLOBALS["config"]["path"]["basePath"] . "/" . $GLOBALS['config']['path']['uploads'] . '/' . uniqid() . '.jpg';
        main_model::compress($img, $destination, $quality);
        $file_url = $destination;
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile($file_url); // kinda overkill, but eh ;)
    }
}

?>