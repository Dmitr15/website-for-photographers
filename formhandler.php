<?php
require_once("db.php");
session_start();
function formEditor(): array
{

    $errors = [];
    global $link;

    if ('POST' != $_SERVER['REQUEST_METHOD']) {
        return $errors;
    }

    if (empty($_POST['submit'])) {
        return $errors;
    }

    if (!empty($_SESSION['form_submit'])) {
        return $errors;
    }

    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $number = mysqli_real_escape_string($link, $_POST['number']);
    $description = mysqli_real_escape_string($link, $_POST['description']);
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

    if (empty($errors)) {
        $_SESSION['form_submit'] = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'number' => $_POST['number'],
            'description' => $_POST['description']
        ];

        $sql = "INSERT INTO users (name, email, number, description) VALUES ('$name', '$email', '$number', '$description')";
        mysqli_query($link, $sql);
    }
    return $errors;
}

function descriptionHandler()
{
    if ($_SESSION['form_submit']["description"] != "" && $_POST["clearFilter"] == "") {
        return $_SESSION['form_submit']['description'];
    }
}