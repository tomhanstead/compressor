<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$GLOBALS["config"] = array(
    "appName" => "birdMVC",
    "version" => "0.0.1",
    "domain" => "birdmvc.dev",
    "cache_enabled" => false,
    "handlebars_enabled" => false,
    "handlebars_browser_handled" => false,
    "path" => array(
        "app" => "app/",
        "cache" => "caches/",
        "core" => "core/",
        "uploads" => "uploads/",
        "session" => "app/sessions", //no trailing forwardslash for session
        "basePath" => $_SERVER['DOCUMENT_ROOT'],
        "index" => "index.php"
    ),
    "defaults" => array(
        "controller" => "main",
        "method" => "index"
    ),
    "routes" => array(),
    "database" => array(
        "host" => "localhost",
        "username" => "", // db username
        "password" => "", // db password
        "name" => "" // db name
    )
);
date_default_timezone_set("Europe/London");
$GLOBALS["instances"] = array();
require_once $GLOBALS["config"]["path"]["core"] . "autoload.php";
new router();
?>