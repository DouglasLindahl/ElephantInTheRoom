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
//all the comments that quizbot can make
$comments = array(
    array(
        "That is correct!",
        "Correct! That was too easy for you",
        "Answer == Correct",
        "Correct_answer_points += 1",
        "Correct!",
    ),
    array(
        "That answer is incorrect",
        "Incorrect. Points subtracted",
        "Wrong answer",
        "Points += 0",
    ),
    array(
        "Your_answer == null",
        "Answer the question before proceeding",
        "An answer is required",
        "No answer detected",
    )
);

$yourAnswer = ""; //user will change this value later
$correctAnswerGiven; //bool
$quizBotComment = "Good luck";

for ($i = 0; $i < count($questions); $i++) {
    //Checks if the user has submitted an answer to the question
    if (isset($_POST[$i])) {
        $yourAnswer = $_POST[$i];
        //true or false if your answer matches the correct answer
        $correctAnswerGiven = (checkAnswer($yourAnswer, $questions[$i]["answer"]));
        //QuizBots comment on your answer if it was correct, incorrect or null
        $quizBotComment = commentOnAnswer($yourAnswer, $correctAnswerGiven, $comments);
    }
}
