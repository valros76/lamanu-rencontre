<?php

function showUserProfile($id){
   if(file_exists('public/upload/users.json')){
      $json_datas = file_get_contents('public/upload/users.json');
      $array_json = json_decode($json_datas, true);
      if(in_array($id, array_keys($array_json))){
         $result = $array_json[$id];
      }
      return $result;
   }
   header('Location:?error=500');
}