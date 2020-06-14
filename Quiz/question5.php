<?php

class Animal
{
    private string $name;
    private float $age;

    public function __set($name, $value)
    {
        switch ($name) {
            case 'name':
                $this->name = $value;
                break;
            case 'age':
                $this->age = $value;
                break;
        }
    }

    public function zebra(string $place, int $tall): void
    {
        echo "The zebra Name is {$this->name} and age is {$this->age} she lives in {$place}
        and she is {$tall} meter <br>";
    }
    public function dolphin(): void
    {
        echo "The dolphin Name is {$this->name} and age is {$this->age} <br>";
    }
}

$zebra = new Animal();
$zebra->name = "Tom";
$zebra->age = 12;
$zebra->zebra("africa", 12);
