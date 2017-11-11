<?php
/**
 * Created by PhpStorm.
 * User: tomhanstead
 * Date: 11/11/2017
 * Time: 11:29
 */

class main_model
{
    /**
     * @param $source
     * @param $destination
     * @param $quality
     * @return mixed
     * Returns compressed image
     */
    static function compress($source, $destination, $quality)
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

}