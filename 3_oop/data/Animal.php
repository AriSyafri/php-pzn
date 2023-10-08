<?php
    namespace Data;

    require_once "Food.php";

    abstract class Animal {
        public string $name;

        // abstract function untuk kelas abstrak saja
        // abstract function memaksa kelas turunan memakai function tersebut
        abstract public function run(): void;

        abstract public function eat(AnimalFood $animalFood): void;

    }

    class Cat extends Animal {
        public function run(): void {
            echo "Cat $this->name is running" . PHP_EOL;
        }

        public function eat(AnimalFood $animalFood): void {
            echo "cat is eating" . PHP_EOL;
        }
    }

    class Dog extends Animal {
        public function run(): void {
            echo "Dog $this->name is running" . PHP_EOL; 
        }

        public function eat(Food $animalFood): void {
            echo "dog is eating" . PHP_EOL;
        }
    }
