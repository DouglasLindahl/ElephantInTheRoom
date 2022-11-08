<?php
require(__DIR__ . "/answers.php");
$inputFieldPlaceholder = "answer";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>QuizBot</title>
</head>

<body>
    <main>
        <div class="card">
            <?php for ($i = 0; $i < count($questions); $i++) {
            ?>
                <div class="questionCard">
                    <!--Actual Question-->
                    <div class="question">
                        <?php echo $questions[$i]["question"]; ?>
                    </div>
                    <!--Collect answer input from user-->
                    <form action="index.php" method="POST" class="answerInput">
                        <input type="text" name=<?php echo $i ?> placeholder=<?php echo $inputFieldPlaceholder ?>>
                        <input type="submit" name="submitAnswer">
                    </form>
                </div>
            <?php
            } ?>
        </div>
        <div class="comments">
            <div class="correctAnswerText">
                <h1>QuizBot:</h1>
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
