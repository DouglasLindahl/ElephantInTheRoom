<?php

declare(strict_types=1);



function checkAnswer($x, $y)
{
    if ($x == $y) {
        return (true);
    }
    return (false);
}

function lagComment($comment)
{
    $howManyLag = rand(3, 6);
    $newAnswer = [];
    for ($i = 0; $i <= $howManyLag; $i++) {
        $newAnswer[] = $comment . "<br>";
    }
    $newAnswer[] = "sorry lag";
    $newAnswer = implode("", $newAnswer);
    return $newAnswer;
}

function noAnswerComment()
{
    $comments =
        [
            "Your_answer == null",
            "Answer the question before proceeding",
            "An answer is required",
            "No answer detected",
        ];
    $howOftenLag = rand(1, 5);

    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[$randomComment]);
    if ($howOftenLag != 1) {
        return $comment;
    } else {
        return lagComment($comment);
    }
}

function rightAnswerComment()
{
    $comments =
        [
            "That is correct!",
            "Correct! That was too easy for you",
            "Answer == Correct",
            "Correct_answer_points += 1",
            "Correct!",
        ];
    $howOftenLag = rand(1, 5);

    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[$randomComment]);
    if ($howOftenLag != 1) {
        return $comment;
    } else {
        return lagComment($comment);
    }
}

function wrongAnswerComment()
{
    $comments =
        [
            "That answer is incorrect",
            "Incorrect. Points subtracted",
            "Wrong answer",
            "Correct_answer_points += 0",
        ];
    $howOftenLag = rand(1, 5);

    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[$randomComment]);
    if ($howOftenLag != 1) {
        return $comment;
    } else {
        return lagComment($comment);
    }
}


function commentOnAnswer($yourAnswer, $correctAnswerGiven)
{
    if ($yourAnswer == null) {
        $correctAnswerText = noAnswerComment();
    } else {
        if ($correctAnswerGiven)
            $correctAnswerText = rightAnswerComment();
        if (!$correctAnswerGiven)
            $correctAnswerText = wrongAnswerComment();
    }
    return ($correctAnswerText);
}


function getAnswers($questions)
{

    shuffle($questions);
    foreach ($questions as $question) {
        echo $question["answer"];
        echo "<br>";
    }
}
