<?php

$email = isset($_POST['email']) && !empty($_POST['email']) ? validData($_POST['email']) : '';
$password = isset($_POST['password']) && !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : '';

if (!empty($email) && !empty($password)) {
   $errors = [];
   if (!preg_match(REGEX_EMAIL, $email)) {
      $errors[] = ['email_error' => 'Mauvais format d\'email utilisé.\r\n'];
   }
   $json_path = 'public/upload/users.json';
   if (file_exists($json_path)) {
      $json_datas = file_get_contents($json_path);
      $array_json = json_decode($json_datas, true);
      for ($count = 0; $count < count($array_json); $count++) {
         if (in_array($email, $array_json[$count])) {
            $stocked_password = isset($array_json[$count]['password']) && !empty($array_json[$count]['password']) ? $array_json[$count]['password'] : '';
            createCookie('user_id', $count, time() + 24 * 3600, null, null, false, true);
            foreach ($array_json[$count] as $data => $value) {
               if ($data != 'password') {
                  createCookie($data, $value, time() + 24 * 3600, null, null, false, true);
               }
            }
         }
      }
   } else {
      $errors[] = ['account_error' => 'Aucun compte lié.\r\n'];
   }
   if (isset($stocked_password) && !empty($stocked_password)) {
      $exists_password = password_verify($password, $stocked_password);
   } else {
      $errors[] = ['password_error' => 'Mot de passe inconnu.\r\n'];
   }
   if (!empty($errors)) {; ?>
      <div class="errors-modal">
         <i class="close-errors-modal">&times;</i>
         <div class="errors-container">
            <?php
            foreach ($errors as $error) {
               foreach ($error as $name => $value) {
                  echo '<p>' . $name . ' : ' . str_replace('\r\n', '', $value) . '</p>';
               }
            }; ?>
         </div>
      </div>
<?php
      Route::goTo('user', 'user_connexion');
   } else {
      Route::goTo('user', 'lovers');
   }
} else {
   Route::goTo('error', 403);
}
