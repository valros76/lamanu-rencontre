<?php

function showLoversFor($id){
   $json_path = 'public/upload/users.json';
   if (file_exists($json_path)) {
      $json_datas = file_get_contents($json_path);
      $array_json = json_decode($json_datas, true);
      return $array_json;
   }
}