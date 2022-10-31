<?php

declare(strict_types=1);
require(__DIR__ . "/functions.php");

//all the questions and answers
$questions = [
    ["question" => "3 + 7", "answer" => 10],
    ["question" => "15 + 112", "answer" => 127],
    ["question" => "4 * 6", "answer" => 24],
    ["question" => "9 * 4 / 6", "answer" => 6],
    ["question" => "i^2", "answer" => -1],
    ["question" => "cos^2(x) + sin^2(x)", "answer" => 1],
    ["question" => "e^(iπ) + 1", "answer" => 0],
    ["question" => "5^5", "answer" => 3125]
];


$yourAnswer = "";
$correctAnswerGiven;
$quizBotComment = "Good luck";



//Checks if the user has submitted an answer to the question
if (isset($_POST["questionOneAnswer"])) {
    $yourAnswer = $_POST["questionOneAnswer"];
    //true or false if your answer matches the correct answer
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[0]["answer"]));
    //QuizBots comment on your answer if it was correct, incorrect or null
    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionTwoAnswer"])) {
    $yourAnswer = $_POST["questionTwoAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[1]["answer"]));

    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionThreeAnswer"])) {
    $yourAnswer = $_POST["questionThreeAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[2]["answer"]));

    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionFourAnswer"])) {
    $yourAnswer = $_POST["questionFourAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[3]["answer"]));

    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionFiveAnswer"])) {
    $yourAnswer = $_POST["questionFiveAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[4]["answer"]));

    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionSixAnswer"])) {
    $yourAnswer = $_POST["questionSixAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[5]["answer"]));

    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionSevenAnswer"])) {
    $yourAnswer = $_POST["questionSevenAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[6]["answer"]));

    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionEightAnswer"])) {
    $yourAnswer = $_POST["questionEightAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[7]["answer"]));

    $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}
