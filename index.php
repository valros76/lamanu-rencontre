<?php

if (session_status() != PHP_SESSION_ACTIVE) {
   session_start();
}

require 'public/utils/regex.php';
require 'public/utils/validData.php';
require 'public/utils/createCookie.php';

$root = $_SERVER['DOCUMENT_ROOT'];
$debug = true;

function loadClass($class)
{
   require 'public/models/' . ucfirst($class) . '.php';
}
spl_autoload_register('loadClass');

$user = isset($_GET['user']) && !empty($_GET['user']) ? validData($_GET['user']) : "";
$admin = isset($_GET['admin']) && !empty($_GET['admin']) ? validData($_GET['admin']) : "";
$global = isset($_GET['global']) && !empty($_GET['global']) ? validData($_GET['global']) : "";
$error = isset($_GET['error']) && !empty($_GET['error']) ? validData($_GET['error']) : "";
$global_action = isset($_GET['global_action']) && !empty($_GET['global_action']) ? validData($_GET['global_action']) : "";
$admin_action = isset($_GET['admin_action']) && !empty($_GET['admin_action']) ? validData($_GET['admin_action']) : "";
$user_action = isset($_GET['user_action']) && !empty($_GET['user_action']) ? validData($_GET['user_action']) : "";

if (!empty($user)) {
   try {
      Route::goTo('user', $user);
   } catch (Exception $e) {
      echo '<p>Erreur : ' . $e . '.</p>';
      Route::goTo('error', '404');
   }
} else if (!empty($admin)) {
   try {
      Route::goTo('admin', $admin);
   } catch (Exception $e) {
      echo '<p>Erreur : ' . $e . '.</p>';
      Route::goTo('error', '404');
   }
} else if (!empty($global)) {
   try {
      Route::goTo('global', $global);
   } catch (Exception $e) {
      echo '<p>Erreur : ' . $e . '.</p>';
      Route::goTo('error', '404');
   }
} else if (!empty($global_action)) {
   try {
      Route::action('global_action', $global_action);
   } catch (Exception $e) {
      echo '<p>Erreur : ' . $e . '.</p>';
      Route::goTo('error', '404');
   }
} else if (!empty($admin_action)) {
   try {
      Route::action('admin_action', $admin_action);
   } catch (Exception $e) {
      echo '<p>Erreur : ' . $e . '.</p>';
      Route::goTo('error', '404');
   }
} else if (!empty($user_action)) {
   try {
      Route::action('user_action', $user_action);
   } catch (Exception $e) {
      echo '<p>Erreur : ' . $e . '.</p>';
      Route::goTo('error', '404');
   }
} else if (!empty($error)) {
   try {
      Route::goTo('error', $error);
   } catch (Exception $e) {
      echo '<p>Erreur : ' . $e . '.</p>';
      Route::goTo('error', '404');
   }
} else {
   Route::init();
}
