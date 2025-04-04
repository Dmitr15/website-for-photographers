<?php
require_once("db.php");

function formEditor(): array{
    
    $errors= [];
    global $link;
    if (!empty($_POST['clearFilter'])) {
        return $errors;
    }

    if ('POST' != $_SERVER['REQUEST_METHOD']) {
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
        $sql = "INSERT INTO users (name, email, number, description) VALUES ('$name', '$email', '$number', '$description')";
        mysqli_query($link, $sql);

    }
    return $errors;
}

function descriptionHandler(){
    echo $_POST["description"];
    
    if ($_POST["description"]!="" && $_POST["clearFilter"]=="") {       
        return $_POST['description'];                          
    }
}