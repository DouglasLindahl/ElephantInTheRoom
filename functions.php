<?php

declare(strict_types=1);

//matches users answer with the correct answer to return true or false
function checkAnswer($x, $y)
{
    if ($x == $y) {
        return (true);
    }
    return (false);
}

function lagComment($comment)
{
    //decides how many times QuizBot will repeat itself
    $howManyLag = rand(3, 6);
    $newAnswer = [];
    //the comment is added into NewAnswer multiple times
    for ($i = 0; $i <= $howManyLag; $i++) {
        $newAnswer[] = $comment . "<br>";
    }
    $newAnswer[] = "sorry lag";
    //turns the array with multiple comments into a string
    $newAnswer = implode("", $newAnswer);
    return $newAnswer;
}

function answerComment($comments, $x)
{

    //decides how ofter QuizBot will lag (1/5 times)
    $howOftenLag = rand(1, 5);
    //decides which comment QuizBot will use
    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[$x][$randomComment]);
    //checks if QuizBot will lag
    if ($howOftenLag != 1) {
        return $comment;
    } else {
        return lagComment($comment);
    }
}


function commentOnAnswer($yourAnswer, $correctAnswerGiven, $comments)
{
    if ($yourAnswer == null) {
        $correctAnswerText = answerComment($comments, 2);
    } else {
        if ($correctAnswerGiven)
            $correctAnswerText = answerComment($comments, 0);
        if (!$correctAnswerGiven)
            $correctAnswerText = answerComment($comments, 1);
    }
    return ($correctAnswerText);
}


function getAnswers($questions)
{
    //randomizes the order of the questions array and echoes the all the answers in the wrong order
    shuffle($questions);
    foreach ($questions as $question) {
        echo $question["answer"];
        echo "<br>";
    }
}
