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

function noAnswerComment($comments)
{

    //decides how ofter QuizBot will lag (1/5 times)
    $howOftenLag = rand(1, 5);
    //decides which comment QuizBot will use
    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[2][$randomComment]);
    //checks if QuizBot will lag
    if ($howOftenLag != 1) {
        return $comment;
    } else {
        return lagComment($comment);
    }
}

function rightAnswerComment($comments)
{
    $howOftenLag = rand(1, 5);

    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[0][$randomComment]);
    if ($howOftenLag != 1) {
        return $comment;
    } else {
        return lagComment($comment);
    }
}

function wrongAnswerComment($comments)
{
    $howOftenLag = rand(1, 5);

    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[1][$randomComment]);
    if ($howOftenLag != 1) {
        return $comment;
    } else {
        return lagComment($comment);
    }
}


function commentOnAnswer($yourAnswer, $correctAnswerGiven, $comments)
{
    if ($yourAnswer == null) {
        $correctAnswerText = noAnswerComment($comments);
    } else {
        if ($correctAnswerGiven)
            $correctAnswerText = rightAnswerComment($comments);
        if (!$correctAnswerGiven)
            $correctAnswerText = wrongAnswerComment($comments);
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
