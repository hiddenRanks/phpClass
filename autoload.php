<?php

function yydhLoad($name) {
    $nameSpace = "YYDH";
    $baseDir = "App";

    //strncmp => 처음에서 n개 만큼만 비교함 / 같을때만 작동함
    //$name = \YYDH\Human
    if(strncmp($nameSpace, $name, strlen($nameSpace)) == 0) {
        $realName = substr($name, strlen($nameSpace));

        require $baseDir . str_replace("\\", "/", $realName) . ".php";
        //require $baseDir . $realName;
    }
}

function gondrLoad($name) {
    $nameSpace = "Gondr";
    $baseDir = "Gondr";

    //strncmp => 처음에서 n개 만큼만 비교함 / 같을때만 작동함
    //$name = \YYDH\Human
    if(strncmp($nameSpace, $name, strlen($nameSpace)) == 0) {
        $realName = substr($name, strlen($nameSpace));

        require $baseDir . str_replace("\\", "/", $realName) . ".php";
        //require $baseDir . $realName;
    }
}

spl_autoload_register("yydhLoad");
spl_autoload_register("gondrLoad");