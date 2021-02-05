<?php
$headTitle = "Profil - La Manu Rencontre";
$pageTitle = "Profil";
if (isset($_COOKIE['user_id']) && !empty($_COOKIE['user_id'])) {
   require "public/controllers/users_controller.php";
   $infos = showUserProfile($_COOKIE['user_id']);
   ob_start();; ?>
   <section class="main-section">
      <h2 class="main-sections-title">
         Mes informations
      </h2>
      <p>User ID : <?= $_COOKIE['user_id']; ?></p>
      <?php
      if($infos != false){
      foreach ($infos as $name => $value) {
         if ($name != 'password' && !empty($value)) {; ?>
            <p><?= $name . ' : ' . $value; ?></p>
      <?php
         }
         if (empty($name)) {
            switch ($name) {
               case 'picture': 
               ;?>
                  <form action="" method="" class="" enctype="multipart/form-data">
               
                  </form>
               <?php   
               break;
               case 'description':
               ;?>

               <?php
               break;
               default:
                  "";
            }
         }
      }
      }else{
         Route::goTo('error',500);
      }; ?>
   </section>
<?php
   $mainContent = ob_get_clean();
} else {
   header('Location:?globals=welcome');
}
require 'public/templates/base_template.php';; ?>