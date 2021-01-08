<?php
class Publisher {
    private $name = 'aMemberVar Member Variable';  

    function __construct($defaultName) {
        $this->name = $defaultName;
    }
  
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
}

$publisher = new Publisher('Rockstar');

print_r($publisher);

echo $publisher->getName();

die();