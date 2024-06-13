<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lessons</title>
</head>
<body>
    <h1>My First PHP SCRIPT</h1>
    <?php

        // printing statements in php
        // echo "Hello World!<br>";
        // echo "I am Learning Backend Development<br>";
        // echo "Php is my first server side language<br>";

        // declaring the variable in php
        // $color = 'red';
        // $language = 'php';
        // echo 'My car is '. $color . "<br>";
        // echo 'My shirt is ' . $color . "<br>";
        // echo "There are many languages for backend, Here I am chossing  " .$language. " to learn <br>";
        # output welcome message
        // echo "welcome to php development! <br>";
        // $name;
        // echo $name; will output a undefined value.
        // $name = 'Arpit Mishra';
        // echo var_dump($name);  // will give type of data value and other details.

        // Scope in php
        // In php, variables can be declared anywhere in the script.
        // The scope of a variables is where variable can be acessed.
        // Php has three different variable scopes.
        // 1. local
        // 2. global
        // 3. static

        // In global scope, variable declared outside the global scope will throw an error.

        // $number = 18;
        // function myTest (){
        //     // will throw an error as variable $number is in global scope so can not be acessed in local scope
        //     $number1 = 81;
        //     echo 'Local Scope: ' . $number1 . '<br>';
        // }
        // myTest();
        // echo "Global Scope " . $number . "<br>";  

        // $txt1 = 'Learn PHP';
        // $txt2 = ' AT W3Schools';

        // echo $txt1 . " " . $txt2; // to concanate two string 
        // echo "<h2>" . "Study Php AND " . $txt1 . " is fun!"  . "</h2>";
        // echo "<h3>" . "There are many intresting lessons for php at: " . $txt2 . "</h3>";

        // creating array in php
        // created using the array keyword
        // $cars = array('Ferrari','Lamborginni','Mercedez Benz');
        // var_dump($cars);


        // creating my first class in php

        // class Car{
        //     // defining properties in car class.
        //     public $modal;
        //     public $color;

        //     // creating constructor method

        //     public function __construct($modal,$color)
        //     {
        //         $this->modal = $modal;
        //         $this->color = $color;
        //     }

        //     // creating a public method message
        //     public function message(){
        //         return "My car is: " . $this->modal . "and it's color is " . $this->color . ".";
        //     }
        // }

        // // creating a new instance of a class.
        // $myCar = new Car('Ferrari','Silver');
        // var_dump($myCar);

        // null datatype in php

        // $player = null;
        // var_dump($player);


        // Type casting in php

        // changing from Integer to string data type.

        // $number = 75;
        // $textNumber = (string)$number;
        // $typeNumber = (integer)$textNumber;
        // // echo $textNumber;
        // var_dump($textNumber);
        // var_dump($typeNumber);


        // Resource Data Type
        // The special Resource data Type is not a actual data type, Instead it is used to store actual refrences to the functions and external resources to php.

        // the common example of resource data type is a database call.


        // Length of a string

        $greeting = 'Hello, Good Afternoon!';
        // echo strlen($greeting);  // gives the length of a string.

        // count the number of words in a string
        // echo str_word_count($greeting);

        // search for a text within a string
        // echo strpos($greeting,"World!");  // gives the first index of if it found word else return false

        // ****************************************************************
        // ****************************************************************

        // Modifying the strings
        // echo strtoupper($greeting) ." " ."<br>"; // converts string to uppercase
        // echo strtolower($greeting); // converts string to uppercase

        // Replace string

        // echo str_replace("Afternoon!","Morning!",$greeting); replaces one word to another from string expects 3 arguments.


        // reverse a string

        // echo strrev($greeting);

        // removes white space

        // echo trim($greeting);// removes extra whitespace

        // explode() splits the string at seperator

        // var_dump(explode(" ",$greeting));// "splits string and converts into array at space"





    ?>
</body>
</html>