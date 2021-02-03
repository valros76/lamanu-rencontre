<?php

function validData($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = nl2br($data);
   return $data;
}