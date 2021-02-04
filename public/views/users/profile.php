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
      <?php
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
      }; ?>
   </section>
<?php
   $mainContent = ob_get_clean();
} else {
   header('Location:?globals=welcome');
}
require 'public/templates/base_template.php';; ?>