<?php

$yourAnswer = "";
$correctAnswer = 10;
if (isset($_GET["answer"])) {
    $yourAnswer = $_GET["answer"];
}
require(__DIR__ . "/functions.php");
echo checkAnswer($yourAnswer, $correctAnswer);
