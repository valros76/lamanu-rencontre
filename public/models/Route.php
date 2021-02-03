<?php

class Route
{
   protected $type;
   protected $slug;
   protected $params;

   static function goTo($type, $slug, ...$params)
   {
      if (isset($type) && !empty($type) && isset($slug) && !empty($slug)) {
         switch ($type) {
            case 'user':
               $dir_path = 'public/views/users/';
               break;
            case 'admin':
               $dir_path = 'public/views/admin/';
               break;
            case 'global':
               $dir_path = 'public/views/globals/';
               break;
            case 'error':
            default:
               $dir_path = 'public/views/errors/';
               $slug = '404';
         }
         if (!isset($params) || empty($params)) {
            require $dir_path . $slug . '.php';
         } else {
            require $dir_path . $slug . '.php' . $params;
         }
      }
   }
   static function action($type, $slug, ...$params)
   {
      if (isset($type) && !empty($type) && isset($slug) && !empty($slug)) {
         switch ($type) {
            case 'user_action':
               $dir_path = 'public/controllers/users/actions/';
               break;
            case 'admin_action':
               $dir_path = 'public/controllers/admin/actions/';
               break;
            case 'global_action':
               $dir_path = 'public/controllers/globals/actions/';
               break;
            case 'error':
            default:
               self::goTo('error', '404');
         }
         if (!isset($params) || empty($params)) {
            require $dir_path . $slug . '.php';
         } else {
            require $dir_path . $slug . '.php' . $params;
         }
      }
   }

   static function init()
   {
      require 'public/views/globals/welcome.php';
   }
}
