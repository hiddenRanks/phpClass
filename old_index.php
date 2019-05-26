<?php
// require("human.php");
// require("./App/human.php");

require("autoload.php");

//import랑 같다
use \YYDH\Animal;
use \YYDH\Human;
use \Gondr\Human as H2;

//괄호 안에 값들은 생성자
$h2 = new Human("갓냐옹", 17);
$h = new H2("갓냥이", 13);

echo $h->getName();
echo $h2->introduce();

$a = new Animal();

echo $a->name;