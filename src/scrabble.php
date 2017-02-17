<?php
    class Scrabble
    {
        private $letters_array =
        [
            "aeioulnrst" => 1,
            "dg" => 2,
            "bcmp" => 3,
            "fhvwy" => 4,
            "k" => 5,
            "jx" => 8,
            "qz" => 10
        ];

//      Functions
        function checkScrabble($source)
        {
            if (($source === "a") || ($source === "e")|| ($source = "i"))
            {
                $result = "1";
                return $result;
            }
            elseif ( $source === "k")
            {
                $result = "5";
                return $result;
            }
            else
            {
                return false;
            }
        }
    }
?>
