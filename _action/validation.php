<?php
include("../vendor/autoload.php");
use Helpers\HTTP;
echo "<pre>";
print_r($_POST);
echo "</pre>";

$http = new HTTP;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //validate form data
    $errors = array();

    if (empty($name)) {
        $errors["nameEmpty"] = 'Name is required';
    }

    if (empty($email)) {
        $errors["emailEmpty"] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["invalidEmail"] = 'Invalid email format';
    }

    if (empty($phone)) {
        $errors["phoneEmpty"] = 'Phone is required';
    }

    if (empty($password)) {
        $errors["pwEmpty"] = 'Password is required';
    }elseif(strlen($password)<6){
        $errors["pwNeedChar"] = 'Password need 6 or more character';
    }elseif(preg_match('/[!@#$%^&*()\-_=+{};:,<.>/?]/', $password)){
        $errors["pwNeedSpeChar"] = 'Password need special character.';
    }

    if (empty($confirm_password)) {
        $errors["conPwEmpty"] = 'Confirm password is required';
    } elseif ($password != $confirm_password) {
        $errors["conPwNoMatch"] = 'Passwords do not match';
    }
}

if(empty($errors)){
    // header('location: http://localhost/php_pr/usermanagement/success.php');
    // exit;
    $http->redirect("/_action/usercreate.php",$_POST);
}else{
    $http->redirect("/register.php",$errors);
    // $query_string = http_build_query($errors);
    // header('location: http://localhost/php_pr/usermanagement/showError.php?'.$query_string);
    // exit;
}
