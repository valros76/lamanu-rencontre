<?php

function createDebugLovers()
{
   $list_debug_passwords = ["test","coucou","lorem123","dontdothat42","xpmadness85Zd"];
   $password_debug = $list_debug_passwords[rand(0,count($list_debug_passwords)-1)];
   $lovers = [
         [
            "lastname"=>"Doe",
            "firstname"=>"John",
            "age"=>25,
            "gender"=>"homme",
            "cp"=>80132,
            "email"=>"john.doe@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Smith",
            "firstname"=>"Stan",
            "age"=>48,
            "gender"=>"homme",
            "cp"=>12000,
            "email"=>"stan.smith@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Commander",
            "firstname"=>"Klayton",
            "age"=>19,
            "gender"=>"homme",
            "cp"=>75000,
            "email"=>"thecommander@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Hold",
            "firstname"=>"Raymond",
            "age"=>52,
            "gender"=>"homme",
            "cp"=>91000,
            "email"=>"pragmatisme@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Peralta",
            "firstname"=>"Jake",
            "age"=>28,
            "gender"=>"homme",
            "cp"=>76000,
            "email"=>"cestlenomdetadernieredextape@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Boyle",
            "firstname"=>"Charles",
            "age"=>37,
            "gender"=>"homme",
            "cp"=>76470,
            "email"=>"critique.culinaire@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Jeffords",
            "firstname"=>"Thierry",
            "age"=>45,
            "gender"=>"homme",
            "cp"=>62000,
            "email"=>"objectif.200tractions@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Judy",
            "firstname"=>"Doug",
            "age"=>34,
            "gender"=>"homme",
            "cp"=>91000,
            "email"=>"car.jacker@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Pimento",
            "firstname"=>"Adrien",
            "age"=>39,
            "gender"=>"homme",
            "cp"=>34000,
            "email"=>"pimenti.pimento@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Nameless",
            "firstname"=>"Scully",
            "age"=>52,
            "gender"=>"homme",
            "cp"=>80000,
            "email"=>"scully.ancestrar@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Lessname",
            "firstname"=>"Hitchcock",
            "age"=>56,
            "gender"=>"homme",
            "cp"=>80000,
            "email"=>"toutpourundonut@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Santiago",
            "firstname"=>"Amy",
            "age"=>31,
            "gender"=>"femme",
            "cp"=>75000,
            "email"=>"eleve.modele@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Diaz",
            "firstname"=>"Rosa",
            "age"=>37,
            "gender"=>"femme",
            "cp"=>34000,
            "email"=>"extremement.sociable@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Linetti",
            "firstname"=>"Gina",
            "age"=>39,
            "gender"=>"femme",
            "cp"=>75000,
            "email"=>"linetti.forever@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Moore",
            "firstname"=>"Olivia",
            "age"=>32,
            "gender"=>"femme",
            "cp"=>95632,
            "email"=>"anti.cerveaux@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Charles",
            "firstname"=>"Payton",
            "age"=>34,
            "gender"=>"femme",
            "cp"=>95632,
            "email"=>"procureur.payton@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Braeden",
            "firstname"=>"Lisa",
            "age"=>26,
            "gender"=>"femme",
            "cp"=>55082,
            "email"=>"jdrgn@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"femme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Harvelle",
            "firstname"=>"Ellen",
            "age"=>43,
            "gender"=>"femme",
            "cp"=>55082,
            "email"=>"harvelle.ellen@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Masters",
            "firstname"=>"Meg",
            "age"=>47,
            "gender"=>"femme",
            "cp"=>55082,
            "email"=>"meg.masters@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Good",
            "firstname"=>"Fiona",
            "age"=>56,
            "gender"=>"femme",
            "cp"=>55082,
            "email"=>"jeunesse.eternelle@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
         [
            "lastname"=>"Harmon",
            "firstname"=>"Violet",
            "age"=>19,
            "gender"=>"femme",
            "cp"=>55082,
            "email"=>"best.season@gmail.com",
            "password"=>password_hash($password_debug,PASSWORD_DEFAULT),
            "search"=>"homme",
            "picture"=>"https://via.placeholder.com/80",
            "description"=>null
         ],
   ];
   $json_path = 'public/upload/users.json';
   $upload_path = 'public/upload';
   if (!is_dir($upload_path)) {
      mkdir($upload_path, 0644);
   }
   if (!file_exists($json_path)) {
      $init_tab = [];
      file_put_contents($json_path, json_encode($init_tab));
   }
   //On récupère l'ancien JSON
   $json_datas = file_get_contents($json_path);
   $array_json = json_decode($json_datas, true);
   foreach($lovers as $lover){
      $array_json[] = $lover;
   }
   $new_datas = $array_json;
   //ajouter les dernières DATAS
   file_put_contents($json_path, json_encode($new_datas));
   return $lovers;
}


$all_lovers = createDebugLovers();
ob_start();
foreach($all_lovers as $lover => $value){
      if(in_array('homme',$all_lovers[$lover])){
         echo '
         <div class="user-profile male-profile">';
      }else{
         echo '
         <div class="user-profile female-profile">';
      }
      if(file_exists('public/assets/images/upload/'.$all_lovers[$lover]['picture'])){
         echo'<img src="public/assets/images/upload/'.$all_lovers[$lover]['picture'].'" alt="'.$all_lovers[$lover]['firstname'].' avatar" class="user-avatar"/>';
      }else{
         echo'<img src="https://via.placeholder.com/80" alt="'.$all_lovers[$lover]['firstname'].' avatar" class="user-avatar"/>';
      }
      echo '
      <div class="user-para-infos">
      <p>'.$all_lovers[$lover]['lastname'].'</p>
      <p>'.$all_lovers[$lover]['firstname'].'</p>
      <p>'.$all_lovers[$lover]['age'].'</p>
      <p>'.$all_lovers[$lover]['gender'].'</p>
      <p>'.$all_lovers[$lover]['cp'].'</p>
      <p>'.$all_lovers[$lover]['email'].'</p>
      <p>'.$all_lovers[$lover]['search'].'</p>
      <p>'.$all_lovers[$lover]['description'].'</p>
      </div>
      <a href="?user_action=chat_with&target='.$all_lovers[$lover]['firstname'].'" class="user-profile-link">Chatter avec '.$all_lovers[$lover]['firstname'].'</a>
      </div>';
}
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';