<?php

$lastname = isset($_POST['lastname']) && !empty($_POST['lastname']) ? $_POST['lastname'] : '';
$firstname = isset($_POST['firstname']) && !empty($_POST['firstname']) ? $_POST['firstname'] : '';
$age = isset($_POST['age']) && !empty($_POST['age']) ? (int) $_POST['age'] : '';
$gender = isset($_POST['gender']) && !empty($_POST['gender']) ? $_POST['gender'] : '';
$cp = isset($_POST['cp']) && !empty($_POST['cp']) ? (int) $_POST['cp'] : '';
$email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';$password = isset($_POST['password']) && !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : '';
$search = isset($_POST['search']) && !empty($_POST['search']) ? $_POST['search'] : '';
$json_path = 'public/upload/users.json';
$upload_path = 'public/upload';
if (!is_dir($upload_path)) {
   mkdir($upload_path, 0644);
}

if(
   !empty($lastname)
   && !empty($firstname)
   && !empty($age)
   && !empty($gender)
   && !empty($cp)
   && !empty($email)
   && !empty($password)
   && !empty($search)
){
   $errors = [];
   if(!preg_match(REGEX_NAME, $lastname)){
      $errors[] = ["lastname_error" => "Le format du nom de famille n'est pas bon.\r\n"];
   }
   if(!preg_match(REGEX_NAME, $firstname)){
      $errors[] = ["firstname_error" => "Le format du prénom n'est pas bon.\r\n"];
   }
   if(!preg_match(REGEX_AGE, $age)){
      $errors[] = ["age_error" => "Le format de l'âge n'est pas bon.\r\n"];
   }
   if(!preg_match(REGEX_GENDER, strtolower($gender))){
      $errors[] = ["gender_error" => "Le format du genre n'est pas bon.\r\n"];
   }
   if(!preg_match(REGEX_CP, $cp)){
      $errors[] = ["cp_error" => "Le format du code postal n'est pas bon.\r\n"];
   }
   if(!preg_match(REGEX_EMAIL, $email)){
      $errors[] = ["email_error" => "Le format de l'email n'est pas bon.\r\n"];
   }
   if(!preg_match(REGEX_GENDER, strtolower($search))){
      $errors[] = ["search_error" => "Le format de la recherche de profil n'est pas bon.\r\n"];
   }
   if(!empty($errors)){
      var_dump($errors);
      die();
   }else{
      if (!file_exists($json_path)) {
         $init_tab = [];
         file_put_contents($json_path, json_encode($init_tab));
      }
      //On récupère l'ancien JSON
      $json_datas = file_get_contents($json_path);
      $array_json = json_decode($json_datas, true);
      $add_datas = [
         'lastname' => $lastname,
         'firstname' => $firstname,
         'age' => $age,
         'gender' => $gender,
         'cp' => $cp,
         'email' => $email,
         'password' => $password,
         'search' => $search,
         'picture' => null,
         'description' => null
      ];
      $array_json[] = $add_datas;
      $new_datas = $array_json;
      //ajouter les dernières DATAS
      file_put_contents($json_path, json_encode($new_datas));
      //Création du cookie contenant les informations requises pour l'exercice grâce à a fonction createCookies(), visible dans les utils. La création du cookie active le httpOnly grâce au dernier paramètre (s'il est sur true) et empêche donc l'utilisation de ce cookie avec JS
      createCookie('user_id', count($new_datas), time() + 24*3600, null, null, false, true);
      foreach($add_datas as $data=>$value){
         if($data != 'password'){
            createCookie($data, $value, time() + 24*3600, null, null, false, true);
         }
      }
      header('Location:?user=lovers');
   }
}else{
   Route::goTo('error', 403);
}