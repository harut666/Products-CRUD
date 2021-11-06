<?php


class Person {
    public string $name;
    public  $surname;
    private $age;

    public static $counter = 0;

    public function __construction($name,$surname){
        $this->name=$name;
        $this->surname=$surname;
        self::$counter++;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function getAge(){
        return $this->age;
    }

    public static function getCounter(){
        return self::$counter;
    }
}