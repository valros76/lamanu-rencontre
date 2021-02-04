<?php

if (session_status() != PHP_SESSION_ACTIVE) {
   session_start();
}
//Destruction de la session
session_destroy();

//Destruction des cookies
setcookie('user_id', false);
unset($_COOKIE['user_id']);

setcookie('search', false);
unset($_COOKIE['search']);

setcookie('lastname', false);
unset($_COOKIE['lastname']);

setcookie('gender', false);
unset($_COOKIE['gender']);

setcookie('firstname', false);
unset($_COOKIE['firstname']);

setcookie('email', false);
unset($_COOKIE['email']);

setcookie('cp', false);
unset($_COOKIE['cp']);

setcookie('age', false);
unset($_COOKIE['age']);

setcookie('PHPSESSID', false);
unset($_COOKIE['PHPSESSID']);

var_dump($_COOKIE);

header('Location:?globals=welcome');