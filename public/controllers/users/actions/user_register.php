<?php

$lastname = isset($_POST['lastname']) && !empty($_POST['lastname']) ? $_POST['lastname'] : '';
$firstname = isset($_POST['firstname']) && !empty($_POST['firstname']) ? $_POST['firstname'] : '';
$age = isset($_POST['age']) && !empty($_POST['age']) ? (int) $_POST['age'] : '';
$gender = isset($_POST['gender']) && !empty($_POST['gender']) ? $_POST['gender'] : '';
$cp = isset($_POST['cp']) && !empty($_POST['cp']) ? (int) $_POST['cp'] : '';
$email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';$password = isset($_POST['password']) && !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : '';
$search = isset($_POST['search']) && !empty($_POST['search']) ? $_POST['search'] : '';
$avatar = isset($_FILES['file']) && !empty($_FILES['file']) ? $_FILES['file'] : '';
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
   && !empty($avatar)
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
   $img_dir = "public/assets/upload_imgs";
   if (!is_dir($img_dir)) {
      mkdir($img_dir, 0644);
   }
   $avatar_file = $img_dir .'/'. basename($avatar["name"]);
   $avatar_type = strtolower(pathinfo($avatar_file,PATHINFO_EXTENSION));
   $uploadState = 1;

   if (file_exists($avatar_file)) {
      $errors[] = ["avatar_error" => "Le fichier existe déjà.\r\n"];
      $uploadOk = 0;
   }
   if (move_uploaded_file($avatar["tmp_name"], $avatar_file) && $uploadState === 1) {
      // echo "The file ". htmlspecialchars( basename( $avatar["name"])). " has been uploaded.";
   }else{
      $errors[] = ["avatar_error" => "Téléchargement de l'avatar impossible.\r\n"];
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
      Route::goTo('global', 'welcome');
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
         'picture' => $avatar_file,
         'description' => null
      ];
      $array_json[] = $add_datas;
      $new_datas = $array_json;
      //ajouter les dernières DATAS
      file_put_contents($json_path, json_encode($new_datas));
      //Création du cookie contenant les informations requises pour l'exercice grâce à a fonction createCookies(), visible dans les utils. La création du cookie active le httpOnly grâce au dernier paramètre (s'il est sur true) et empêche donc l'utilisation de ce cookie avec JS
      createCookie('user_id', (count($new_datas) - 1), time() + 24*3600, null, null, false, true);
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