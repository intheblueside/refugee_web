<?php
    $firstErr = $lastErr = $emailErr = $contactErr = $commentErr = $suffixErr = $howErr = "";
    $first = $last = $email = $contact = $comment = $suffix = $how = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = test_input($_POST["firstname"]);
        $firstErr = "";
        if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
            $firstErr = "Only letters";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>