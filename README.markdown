# Unique Random

UniqueRandom is a PHP class having following features:

* Generate random + unique string.
* Options to generate alpha, numeric or alphanumeric.
* Option to set use of uppercase and/or lowercase alphabets.
* Length of the random string is 12 letters.

## About

* Author : Nachhatar Singh (Azoxy)
* Location : https://github.com/azoxy/Unique-Random

## Example

    <?php

    include('libraries/UniqueRandom.php');

    $random = new UniqueRandom;
    $random->alphabets = TRUE;
    $random->alphabets_lowercase = TRUE;
    $random->alphabets_uppercase = TRUE;
    $random->numbers = TRUE;

    $unique_id =  $random->get();

    ?>
