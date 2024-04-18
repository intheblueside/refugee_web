<?php

if (isset($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"])) {
    // set answers for quiz
    $answers = array("q1-3", "q2-1", "q3-2", "q4-2");

    // get answers from quiz
    $quiz_answer = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"]);

    // calc score
    $score = 0;
    for ($i = 0; $i < count($answers); $i++) {
        if ($quiz_answer[$i] === $answers[$i]) {
            $score++;
        }
    }
    // result 
    if ($score >= 3) {
        $result = "Good Job!! You have a good understanding of refugee rights!!";
    }else if ($score <= 3) {
        $result = "You need to understand more about refugee rights! But you have the spirit!!";
    } else if ($score = 0) {
        $result = "You lack the understanding! Hope you will try to gain more knowledge about the rights for refugees";
    }

    // return result as JSON response
    echo json_encode(["result" => $result]);
} else {
    echo json_encode(["error" => "POST data not set"]);
}

?>