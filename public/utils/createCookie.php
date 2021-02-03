<?php

function createCookie($name, $value, $exp, $path = null, $domain = null, $secure = false, $httponly = true)
{
   setcookie(validData($name), validData($value), $exp, $path, $domain, $secure, $httponly);
   if(isset($_COOKIE['name']) && !empty($_COOKIE['name'])){
      return true;
   }else{
      return false;
   }
}  
