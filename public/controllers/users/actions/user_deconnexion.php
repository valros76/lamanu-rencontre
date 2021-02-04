<?php

if (session_status() != PHP_SESSION_ACTIVE) {
   session_start();
}
//Destruction de la session
session_destroy();

//Destruction des cookies
// setcookie('user_id', false, -1);
unset($_COOKIE['user_id']);

// setcookie('search', false, -1);
unset($_COOKIE['search']);

// setcookie('lastname', false, -1);
unset($_COOKIE['lastname']);

// setcookie('gender', false, -1);
unset($_COOKIE['gender']);

// setcookie('firstname', false, -1);
unset($_COOKIE['firstname']);

// setcookie('email', false, -1);
unset($_COOKIE['email']);

// setcookie('cp', false, -1);
unset($_COOKIE['cp']);

// setcookie('age', false, -1);
unset($_COOKIE['age']);

// setcookie('PHPSESSID', false, -1);
unset($_COOKIE['PHPSESSID']);

var_dump($_COOKIE);

// header('Location:?globals=welcome');