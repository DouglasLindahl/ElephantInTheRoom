INSERT MANDATORY GIF

# Project Title

QuizBot is a quiz where you have to answer simple math questions while QuizBot comments on your performance

https://douglaslindahl.se/QuizBot/

# Installation

Add the installation instructions.

# Code Review

Code review written by [Styrbjörn Nordberg](https://github.com/styrbjorn-n).

1. `functions.php:92` - Remember to not print HTML with php.
2. `functions.php:29-69` - The three functions that handel what and how the answer outputed could be reduce to a single function. To reduce the amount of similar code.
3. `functions.php:79` - The if statment could be repaced with a else, due to how well the if statments before it are writen.
4. `answers.php:48-103` - These if statments could be changed to a switchcase or a singel function. to reduce similar code.
5. `index.php:23-141` - The questinoCards could be created by a function using a loop, to reduce similar code.

# Testers

Tested by the following people:

1. Thomas Danielsson
2. Robin Persson
