<?php




function checkAnswer($x, $y)
{
    if ($x == $y) {
        return (true);
    }
    return (false);
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
    $randomComment = rand(0, count($comments) - 1);
    return ($comments[$randomComment]);
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
    $randomComment = rand(0, count($comments) - 1);
    return ($comments[$randomComment]);
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
    $randomComment = rand(0, count($comments) - 1);
    return ($comments[$randomComment]);
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
