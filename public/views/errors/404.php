<?php
$headTitle = "404 - Rencontre - La manu";
$pageTitle = "404";
ob_start();
;?>

   <section class="errors-sections">
      <h2 class="errors-sections-title">
         Erreur <?= $pageTitle ;?>
      </h2>
      <p class="errors-decription">
         Le contenu demandé n'existe pas !
      </p>
   </section>

<?php
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';
;?>