<?php

// set answers for quiz
$answers = array("q1-3", "q2-1", "q3-2", "q4-2");

// get answers from quiz
$quiz_answer = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"]);

// calc score
$score = 0;


// results 
$result; 

if ($score >= 4) {
    $result = "Good Job!!";
}else {
    $result = "Too bad";
}

// return result as JSON response
echo json_encode(["result" = $result]);

?>