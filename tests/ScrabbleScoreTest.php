<?php
    require_once __DIR__ . "/../src/scrabble.php";
    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_Scrabble()
        {
            //Arrange
            $source = "i";
            $test_ScrabbleScore = new Scrabble($source);


            //Act
            $result = $test_ScrabbleScore->checkScrabble($source);

            //Assert
            $this->assertEquals("1", $result);
        }

    }
?>
