<?php
namespace YYDH;

class Human {
    private $name;
    private $age;

    public function introduce() {
        echo "<br>나의 이름은 $this->name($this->age) 입니다.";
    }

    //생성자(파이썬이랑 비슷) / __붙어있으면 건들 ㄴㄴ
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    //getter를 할꺼면 $this->는 필수이다.
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }    
}