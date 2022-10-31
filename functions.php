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

function noAnswerComment()
{
    $comments =
        [
            "Your_answer == null",
            "Answer the question before proceeding",
            "An answer is required",
            "No answer detected",
        ];
    //decides how ofter QuizBot will lag (1/5 times)
    $howOftenLag = rand(1, 5);
    //decides which comment QuizBot will use
    $randomComment = rand(0, count($comments) - 1);
    $comment = ($comments[$randomComment]);
    //checks if QuizBot will lag
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
            "Points += 0",
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
    //randomizes the order of the questions array and echoes the all the answers in the wrong order
    shuffle($questions);
    foreach ($questions as $question) {
        echo $question["answer"];
        echo "<br>";
    }
}
