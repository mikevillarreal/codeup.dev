<?php

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function fullName()
    {
        echo $this->firstName . ' ' . $this->lastName .PHP_EOL;
    }
}


class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}

$person = new Person('John', 'Doe');
$person->fullName(); // "John Doe"

$superman = new Superhero('Clark', 'Kent');
$superman->pseudonym = 'Superman';
$superman->capeColor = 'red';

echo $superman->alterEgo();


