<?php
require(__DIR__ . "/answers.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <main>
        <div class="card">
            <!--Question 1-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[0]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="main.php" method="POST" class="answerInput">
                    <input type="text" name="questionOneAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
            <!--Question 2-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[1]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="main.php" method="POST" class="answerInput">
                    <input type="text" name="questionTwoAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
            <!--Question 3-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[2]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="main.php" method="POST" class="answerInput">
                    <input type="text" name="questionThreeAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
        </div>

        <div class="comments">
            <div class="correctAnswerText">
                <h1>AI:</h1>
                <p>
                    <?php echo $correctAnswerText ?>
                </p>
            </div>
        </div>

    </main>

</body>

</html>

<?php
