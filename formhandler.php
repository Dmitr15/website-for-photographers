<?php
require_once("db.php");

function formEditor(): array{
    $errors= [];
    global $link;
    
    $sql = "INSERT INTO users (name, email, number) VALUES ";
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $number = mysqli_real_escape_string($link, $_POST['number']);
    $phone_number_validation_regex = "/^\\+?[1-9][0-9]{7,14}$/";

    if (!empty($name) || !empty($email) || !empty($number)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Enter a valid email!';
        }
        if (strlen(strval($name)) < 2) {
            $errors[] = 'Enter a valid name!';
        }
        if (!preg_match($phone_number_validation_regex, $number)) {
            $errors[] = 'Enter a valid number!';
        }
    }
    else {
        $errors[] = 'Fill in all fields!';
    }

    if (empty($errors)) {
        mysqli_query($link, $sql);
        $errors[] = 'Application sent successfully!';
        return $errors;
    }
    return $errors;
}
