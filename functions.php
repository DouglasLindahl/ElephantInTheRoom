<?php




function checkAnswer(int $x, int $y)
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
            "You have to answer the question...",
            "Answer pls",
            "At least guess before moving on",
            "You must answer the question, it is not optional!"
        ];
    $randomComment = rand(0, count($comments) - 1);
    return ($comments[$randomComment]);
}

function rightAnswerComment()
{
    $comments =
        [
            "That is correct!",
            "That was too easy for you",
            "Answer = Correct",
            "+ 1 points for correct answer"
        ];
    $randomComment = rand(0, count($comments) - 1);
    return ($comments[$randomComment]);
}

function wrongAnswerComment()
{
    $comments =
        [
            "Not so good job my dude...",
            "You can do better than that my guy...",
            "Are you even trying?",
            "Do you are have stupid?"
        ];
    $randomComment = rand(0, count($comments) - 1);
    return ($comments[$randomComment]);
}


function commentOnAnswer(int $yourAnswer, int $correctAnswerGiven)
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
