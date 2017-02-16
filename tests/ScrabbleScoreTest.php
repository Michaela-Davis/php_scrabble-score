<?php
    require_once __DIR__ . "/../src/scrabble.php";
    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_scrabbleScore_oneLetter()
        {
            //Arrange
            $test_ScrabbleScore = new Scrabble($source);
            $source = "k";

            //Act
            $result = $test_ScrabbleScore->checkScrabble($source);

            //Assert
            $this->assertEquals("5", $result);
        }

        // function test_anagramChecker_repeatedWord()
        // {
        //     //Arrange
        //     $source_text = "ham";
        //     $anagram_text = "ham";
        //     $test_AnagramChecker = new AnagramChecker($source_text, $anagram_text);
        //     //Act
        //     $result = $test_AnagramChecker->checkAnagram($source_text, $anagram_text);
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }

    }
?>
