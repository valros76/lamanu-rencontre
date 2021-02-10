<?php
if (isset($_COOKIE['user_id']) && !empty($_COOKIE['user_id'])) {
   header('Location:?user=lovers');
}
$headTitle = "Welcome - Rencontre - La manu";
$pageTitle = "Welcome";
require 'public/controllers/lovers_controller.php';
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Bienvenue JEUNE ♥❤ LOVER ❤♥ sur La Manu Rencontre
   </h2>
   <!--<p class="important-para-description">
      Pour utiliser pleinement notre service, merci de <a href="?user=user_inscription" class="inline-links">créer un compte</a> en cliquant sur le lien d'inscription.
   </p>-->
   <video src="public/assets/videos/montage_video_lamanurencontre.webm" class="welcome-video" muted controls></video>
   <form action="?user_action=user_register" method="post" class="inscription-form" enctype="multipart/form-data">
      <div class="inscription-formgroup formgroup-1">
         <label for="lastname">*Nom :</label>
         <input type="text" name="lastname" id="lastname" placeholder="Doe" required />
         <label for="firstname">*Prénom :</label>
         <input type="text" name="firstname" id="firstname" placeholder="John" required />
      </div>

      <div class="inscription-formgroup formgroup-2">
      <label for="age">*Âge :</label>
      <input type="number" name="age" id="age" min="18" max="120" placeholder="18" required />
      <label for="gender">*Genre :</label>
      <select name="gender" id="gender" required>
         <option value="homme"selected>Un homme</option>
         <option value="femme">Une femme</option>
      </select>
      </div>

      <div class="inscription-formgroup formgroup-3">
      <label for="cp">*Code postal :</label>
      <input type="number" min="00001" max="99999" name="cp" id="cp" placeholder="16000" required />
      <label for="email">*Email :</label>
      <input type="email" name="email" id="email" placeholder="test@mail.fr" required />
      <label for="password">*Password :</label>
      <input type="password" name="password" id="password" placeholder="********" required />
      <label for="search">*Vous cherchez :</label>
      <select name="search" id="search" required>
         <option value="homme">Un homme</option>
         <option value="femme" selected>Une femme</option>
      </select>
      <label for="file">Avatar :</label>
      <input type="file" name="file" id="file" accept=".jpeg,.png,.jpg,.webp" required/>
      <figure id="img-preview-container">
      </figure>
      </div>
      <input type="submit" value="Rencontrez nos célibataires" />
   </form>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = '<script src="public/sources/js/img-preview.js" defer></script>';
require 'public/templates/base_template.php';; ?>