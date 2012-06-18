<?php

/**
 * Name:  UniqueRandom
 *
 * Author: Nachhatar Singh (Azoxy)
 *
 * Location: https://github.com/azoxy/Unique-Random
 *
 * Description:  UniqueRandom is a PHP class having following features:
 *
 * Generate random + unique string.
 * Options to generate alpha, numeric or alphanumeric.
 * Option to set use of uppercase and/or lowercase alphabets.
 * Length of the random string is 12 letters.
 *
 */
class UniqueRandom {

    public $alphabets;
    public $alphabets_lowercase;
    public $alphabets_uppercase;
    public $numbers;

    /**
     * UniqueRandom::__construct()
     */
    public function __construct() {
        $this->alphabets = TRUE;
        $this->alphabets_lowercase = TRUE;
        $this->alphabets_uppercase = TRUE;
        $this->numbers = TRUE;
    }

    /**
     * UniqueRandom::get()
     *
     * @return string
     */
    public function get() {
        $characters = array();

        // ------------------------------------------
        //  Check if alphabets enabled
        // ------------------------------------------
        if ($this->alphabets == TRUE) {

            // ------------------------------------------
            //  Check if lowercase alphabets enabled
            // ------------------------------------------
            if ($this->alphabets_lowercase == TRUE) {
                for ($i = 97; $i <= 122; $i++) {
                    $characters[] = $i;
                }
            }

            // ------------------------------------------
            //  Check if uppercase alphabets enabled
            // ------------------------------------------
            if ($this->alphabets_uppercase == TRUE) {
                for ($i = 65; $i <= 90; $i++) {
                    $characters[] = $i;
                }
            }
        }

        // ------------------------------------------
        //  Check if numbers enabled
        // ------------------------------------------
        if ($this->numbers == TRUE) {
            for ($i = 48; $i <= 57; $i++) {
                $characters[] = $i;
            }
        }

        sort($characters);
        $character_groups = array();
        $i = 0;

        // ------------------------------------------
        //  Split characters to groups
        // ------------------------------------------
        foreach ($characters as $character) {
            $character_groups[$i][] = $character;
            $i = ($i == 9) ? 0 : $i + 1;
        }

        // ------------------------------------------
        //  Generate basic numeric key from microtime
        // ------------------------------------------
        $key = explode(' ', microtime());
        $key = rand(1, 9) . substr($key[1], 4) . substr($key[0], 2, 5);
        $keys = str_split($key);
        $key = '';

        // ------------------------------------------
        //  Use keys groups to generate final output
        // ------------------------------------------
        foreach ($keys as $k) {
            shuffle($character_groups[$k]);
            $key .= chr($character_groups[$k][0]);
        }
        return $key;
    }

}
