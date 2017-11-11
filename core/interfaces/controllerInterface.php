<?php

/**
 * Created by PhpStorm.
 * User: tomhanstead
 */
interface controllerInterface
{
    function index();
    function uploadImage();
    function compress($source, $destination, $quality);
}

?>