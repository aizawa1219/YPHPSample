<?php
class Data {
    public $name = "";
    public $age = "";
    public $hobby = "";
    
    function __construct(){}
    
    function setName($name) {
        $this->name = $name;
    }
    function setAge($age) {
        $this->age = $age;
    }
    function setHobby($hobby) {
        $this->hobby = $hobby;
    }
    function getName() {
        return $this->name;
    }
    function getAge() {
        return $this->age;
    }
    function getHobby() {
        return $this->hobby;
    }
}
?>