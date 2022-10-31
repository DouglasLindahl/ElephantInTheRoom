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
                <form action="index.php" method="POST" class="answerInput">
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
                <form action="index.php" method="POST" class="answerInput">
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
                <form action="index.php" method="POST" class="answerInput">
                    <input type="text" name="questionThreeAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
            <!--Question 4-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[3]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="index.php" method="POST" class="answerInput">
                    <input type="text" name="questionFourAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
            <!--Question 5-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[4]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="index.php" method="POST" class="answerInput">
                    <input type="text" name="questionFiveAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
            <!--Question 6-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[5]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="index.php" method="POST" class="answerInput">
                    <input type="text" name="questionSixAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
            <!--Question 7-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[6]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="index.php" method="POST" class="answerInput">
                    <input type="text" name="questionSevenAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
            <!--Question 8-->
            <!--Area for question-->
            <div class="questionCard">
                <!--Actual Question-->
                <div class="question">
                    <?php echo $questions[7]["question"]; ?>
                </div>
                <!--Collect answer input from user-->
                <form action="index.php" method="POST" class="answerInput">
                    <input type="text" name="questionEightAnswer" placeholder="answer">
                    <input type="submit" name="submitAnswer">
                </form>
            </div>
        </div>

        <div class="comments">
            <div class="correctAnswerText">
                <h1>Quizbot:</h1>
                <p>
                    <?php echo $quizBotComment ?>
                <form action="index.php" method="POST">
                    <input type="submit" name="getAnswers" value="Get answers">
                </form>
                <?php
                if (isset($_POST["getAnswers"])) {
                ?>
                    <div class="answers">
                        <p> <?php echo "The answers are randomized! <br>"; ?> </p>
                        <p> <?php getAnswers($questions); ?> </p>
                    </div>
                <?php
                }
                ?>
                </p>
            </div>
            </p>
        </div>
        </div>

    </main>

</body>

</html>

<?php
