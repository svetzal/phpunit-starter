<?php

spl_autoload_register(function($className) {
    $filename = "src/" . $className . ".php";
    if (file_exists($filename)) {
        require_once $filename;
    }
});
