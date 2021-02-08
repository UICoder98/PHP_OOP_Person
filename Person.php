<?php
    class Person
    {
        private $id;
        private $firstName;
        private $lastName;
        private $sex;
        private $age;
        private $size;
        private $weight;
        private $eyeColor;

        function __construct ($id, $firstName, $lastName, $sex, $age, $size, $weight, $eyeColor)
        {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->sex = $sex;
            $this->age = $age;
            $this->size = $size;
            $this->weight = $weight;
            $this->eyeColor = $eyeColor;
        }

        function getId ()
        {
            return $this->id;
        }

        function getFirstName ()
        {
            return $this->firstName;
        }

        function getLastName ()
        {
            return $this->lastName;
        }

        function getSex ()
        {
            return $this->sex;
        }

        function getAge ()
        {
            return $this->age;
        }

        function getSize ()
        {
            return $this->size;
        }

        function getWeight ()
        {
            return $this->weight;
        }

        function getEyeColor ()
        {
            return $this->eyeColor;
        }
    }

    $robbieWilliams = new Person( 1, "Robbie", "Williams", "männlich",46, 1.85, 70, "blau");
    $aydaField = new Person( 2, "Ayda", "Field", "weiblich",41, 1.73, 57, "dunkelbraun");
    $jakeGyllenhaal = new Person( 3, "Jake", "Gyllenhaal", "männlich",40, 1.82, 78, "blau");
    $heathLedger = new Person( 4, "Heath", "Ledger", "männlich",28, 1.85, 84, "blau");
    $cristianoRonaldo = new Person( 5, "Cristiano", "Ronaldo", "männlich",36, 1.87, 84, "braun");
    $richardMadden = new Person( 6, "Richard", "Madden", "männlich",34, 1.80, 64, "grau");
    $aaronTaylorJohnson = new Person( 7, "Aaron", "Taylor-Johnson", "männlich",30, 1.80, 78, "blau");
?>