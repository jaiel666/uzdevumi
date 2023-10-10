<?php

class Dog
{
    private string $name;
    private string $sex;
    private string $mother;
    private string $father;

    public function __construct(string $name, string $sex, string $mother, string $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setMother(string $mother): void
    {
        $this->mother = $mother;
    }

    public function setFather(string $father): void
    {
        $this->father = $father;
    }

    public function fathersName(): string
    {
        if (empty($this->father)) {
            return "Unknown";
        }
        return $this->father;
    }

    public function hasSameMotherAs(Dog $otherDog): bool
    {
        if (!empty($this->mother) && !empty($otherDog->mother)) {
            return $this->mother === $otherDog->mother;
        }
        return false;
    }
}

class DogTest
{
    public static function main(): void
    {

        $max = new Dog("Max", "male");
        $rocky = new Dog("Rocky", "male");
        $sparky = new Dog("Sparky", "male");
        $buster = new Dog("Buster", "male");
        $sam = new Dog("Sam", "male");
        $lady = new Dog("Lady", "female");
        $molly = new Dog("Molly", "female");
        $coco = new Dog("Coco", "female");


        $max->setMother("Lady");
        $max->setFather("Rocky");

        $coco->setMother("Molly");
        $coco->setFather("Buster");

        $rocky->setMother("Molly");
        $rocky->setFather("Sam");

        $buster->setMother("Lady");
        $buster->setFather("Sparky");

        echo $max->fathersName() . "\n";
        echo $sparky->fathersName() . "\n";
        echo $coco->fathersName() . "\n";
        if ($coco->hasSameMotherAs($rocky)) {
            echo "Coco and Rocky have the same mother.\n";
        } else {
            echo "Coco and Rocky do not have the same mother.\n";
        }
    }
}

DogTest::main();
