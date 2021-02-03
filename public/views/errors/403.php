<?php
$headTitle = "403 - Rencontre - La manu";
$pageTitle = "403";
ob_start();
;?>

   <section class="errors-sections">
      <h2 class="errors-sections-title">
         Erreur <?= $pageTitle ;?>
      </h2>
      <p class="errors-decription">
         Accès refusé !
      </p>
   </section>

<?php
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';
;?>