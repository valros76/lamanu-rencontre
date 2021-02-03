<?php
$headTitle = "500 - Rencontre - La manu";
$pageTitle = "500";
ob_start();
;?>

   <section class="errors-sections">
      <h2 class="errors-sections-title">
         Erreur <?= $pageTitle ;?>
      </h2>
      <p class="errors-decription">
         Erreur serveur. Si vous venez de remplir un formulaire, il se peut que vos informations soient incorrectes.
      </p>
   </section>

<?php
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';
;?>