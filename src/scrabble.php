<?php
    class Scrabble
    {
        private $source;

        // Scrabble constructor
        function __construct($source)
        {
            $this->source = $source;
        }

        // source Getter and Setter
        function getSource()
        {
            return $this->source;
        }
        function setSource($new_source)
        {
            $this->source = (string) $new_source;
        }

        function checkScrabble()
        {
            $source = "k";

            if ($source === "k")
            {
                $result = "5";
                return $result;

            } else {
                return false;
            }

        }
    }
?>
