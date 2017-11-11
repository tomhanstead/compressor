<?php

/**
 * Created by PhpStorm.
 * User: tomhanstead
 */
class controller
{

    function __construct()
    {
        $GLOBALS["instances"][] = &$this;
    }

}

?>