<?php
session_start();
require(__DIR__ . "/functions.php");


$questions = [
    ["question" => "5 + 5", "answer" => 10],
    ["question" => "10 + 10", "answer" => 20],
    ["question" => "20 + 20", "answer" => 40]
];


$currentQuestion = $questions[0]["question"];
$currentAnswer = $questions[0]["answer"];

$yourAnswer = "";
$correctAnswerGiven;
$correctAnswerText = "";


if (isset($_POST["questionOneAnswer"])) {
    $yourAnswer = $_POST["questionOneAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[0]["answer"]));

    if ($yourAnswer == null) {
        $correctAnswerText = noAnswerComment();
    } else {
        if ($correctAnswerGiven)
            $correctAnswerText = rightAnswerComment();
        if (!$correctAnswerGiven)
            $correctAnswerText = wrongAnswerComment();
    }
}


if (isset($_POST["questionTwoAnswer"])) {
    $yourAnswer = $_POST["questionTwoAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[1]["answer"]));

    if ($yourAnswer == null) {
        $correctAnswerText = noAnswerComment();
    } else {
        if ($correctAnswerGiven)
            $correctAnswerText = rightAnswerComment();
        if (!$correctAnswerGiven)
            $correctAnswerText = wrongAnswerComment();
    }
}


if (isset($_POST["questionThreeAnswer"])) {
    $yourAnswer = $_POST["questionThreeAnswer"];
    $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[2]["answer"]));

    $correctAnswerText = commentOnAnswer($yourAnswer, $correctAnswerGiven);
}
