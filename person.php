<?php

class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }

  function sayHi($name) {
    return "Hi $name, I`m" . $this->name;
  }

  function setHp($hp) {
    if($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "
    <h2>A few words about myself.</h2><br>" . "My name is: " . $this->getName() . "." . " My father is: " . $this->getFather()->getName() . " and my mother is: " . $this->getMother()->getName() . "." . "<br>My grandparents. Mom's parents: " . $this->getMother()->getFather()->getName() . " and " . $this->getMother()->getMother()->getName() . "." . "<br>Dad's parents: " . $this->getFather()->getFather()->getName() . " and " . $this->getFather()->getMother()->getName() . "<br>My big friendly family!";
  }
}
//!Здоровье человека не может быть более 100

$denis = new Person("Denis", "Ivanov", 65);
$mary = new Person("Mary", "Ivanova", 58);
$varia = new Person("Varia", "Petrova", 70);
$igor = new Person("Igor", "Petrov", 78);

$alex = new Person("Alex", "Ivanov", 42, $denis, $mary);
$olga = new Person("Olga", "Ivanova", 42, $varia, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();
