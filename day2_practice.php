<?php
    /*
    Write a PHP script to check if a user is authenticated based on their username and password.
    Use comparison operators, logical operators, and if-else statements.
    */
    $username = "admin";
    $password = "password123";

    $inputUsername = "admin";
    $inputPassword = "password123";
    if($username === $inputUsername and $password === $inputPassword){
        echo "User is authenticated";
    }else{
        echo "User is not authenticated";
    }

    echo "<br><br><br><br>";

    /*
    Write a PHP script to concatenate and modify strings based on user input.
    Use concatenation and assignment operators and if-else statements.
    */
    $firstName = "John";
    $lastName = "Doe";

    $fullName = $firstName . " " . $lastName;

    echo $name;

    if(strlen($fullName) > 15){
        echo $fullName . " is a long name";
    }else{
        echo $fullName . " is a short name";
    }
?>