<?php


spl_autoload_extensions(".php");
spl_autoload_register("my_autoload");

function my_autoload ($pClassName) {
    include_once(__DIR__ . "/" . $pClassName . ".php");
}


