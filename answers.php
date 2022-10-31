<?php

declare(strict_types=1);
require(__DIR__ . "/functions.php");


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


$currentQuestion = $questions[0]["question"];
$currentAnswer = $questions[0]["answer"];

$yourAnswer = "";
$correctAnswerGiven;
$correctAnswerText = "";




if (isset($_POST["questionOneAnswer"])) {
    $yourAnswer = $_POST["questionOneAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[0]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionTwoAnswer"])) {
    $yourAnswer = $_POST["questionTwoAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[1]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionThreeAnswer"])) {
    $yourAnswer = $_POST["questionThreeAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[2]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionFourAnswer"])) {
    $yourAnswer = $_POST["questionFourAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[3]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionFiveAnswer"])) {
    $yourAnswer = $_POST["questionFiveAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[4]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionSixAnswer"])) {
    $yourAnswer = $_POST["questionSixAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[5]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionSevenAnswer"])) {
    $yourAnswer = $_POST["questionSevenAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[6]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}

if (isset($_POST["questionEightAnswer"])) {
    $yourAnswer = $_POST["questionEightAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[7]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}
