<?php
if (isset($_COOKIE['user_id']) && !empty($_COOKIE['user_id'])) {
   header('Location:?user=lovers');
}
$headTitle = "Connexion - Rencontre - La manu";
$pageTitle = "Connexion";
require 'public/controllers/lovers_controller.php';
ob_start();; ?>

<section class="main-sections">
   <form action="?user_action=user_connect" method="post" class="inscription-form">
      <div class="inscription-formgroup formgroup-1">
      <label for="email">*Email :</label>
      <input type="email" name="email" id="email" placeholder="test@mail.fr" required />
      <label for="password">*Password</label>
      <input type="password" name="password" id="password" placeholder="*********" required/>
      </div>
      <input type="submit" value="Connexion" />
   </form>
</section>

<?php
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';; ?>