# _Scrabble Score_

#### _This web page allows a user to see the Scrabble score for a word, 15 February 2017_

#### By _**Michaela Davis & Xia Amendolara**_


## Description

_This web page allows a user to enter a word and see the Scrabble score for that word_

## Setup/Installation Requirements

* In terminal run the following commands:

1. _Fork and clone this repository from_ [gitHub](https://github.com/michaela-davis/php_https://github.com/Michaela-Davis/php_scrabble-score.git).
2. Ensure [composer](https://getcomposer.org/) is installed on your computer.
3. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: `composer install`.
4. To run tests enter `composer test` in terminal.
5. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000` (assuming you are using a mac - things are different on a pc).
6. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|    *Behavior*   |    *Input*    |     *Output*    |
|-----------------|---------------|-----------------|
|User enters one letter into the form to check the letter's scrabble value, and uses the blue "check" button to see the scrabble score of their letter | "k" | score: 5
| User fills out form with one word, and uses the blue "check" button to see the scrabble score of their word  | "cat" |  "C" = 3, "A" = 1, "T" = 1   total: 5 |



## Known Bugs

_None so far._

## Support and contact details

_Please contact michaela.delight@gmail.com or XiaEsmeAmen@me.com with concerns or comments._

## Technologies Used

* _HTML_
* _CSS_
* _PHP_
* _PHPUnit_
* _Composer_
* _Silex_
* _Twig_

### License

*MIT license*

Copyright (c) 2017 **_Michaela Davis & Xia Amendolara_**
