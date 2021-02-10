<?php
$headTitle = "Profil - La Manu Rencontre";
$pageTitle = "Profil";
if (isset($_COOKIE['user_id']) && !empty($_COOKIE['user_id'])) {
   require "public/controllers/users_controller.php";
   $infos = showUserProfile($_COOKIE['user_id']);
   ob_start();; ?>
   <section class="main-sections">
      <h2 class="main-sections-title">
         Mes informations
      </h2>
      <p>User ID : <?= $_COOKIE['user_id']; ?></p>
      <?php
      if($infos != false){
      foreach ($infos as $name => $value) {
         if ($name != 'password' && $name != 'picture' && !empty($value)) {; ?>
            <p><?= $name . ' : ' . $value; ?></p>
      <?php
         }
         if (true) {
            switch ($name) {
               case (!empty($name) && $name =='picture' && isset($_COOKIE['picture']) && !empty($_COOKIE['picture']) && file_exists($_COOKIE['picture'])): 
               ;?>
               <p>Avatar :</p>
               <div class="img-profile-container">
                  <img src="<?= $_COOKIE['picture'] ;?>" alt="<?= $_COOKIE['user_id'].' avatar';?>" class="img-preview"/>
               </div>
               <?php   
               break;
               case (!empty($name) && $name =='description' && isset($_COOKIE['description']) && !empty($_COOKIE['description'])):
               ;?>
                  <p><?= $_COOKIE['description'] ;?></p>
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
      <p><a class="user-profile-link" href="https://meetic.fr">Take my money</a></p>
   </section>
<?php
   $mainContent = ob_get_clean();
} else {
   header('Location:?globals=welcome');
}
require 'public/templates/base_template.php';; ?>