<?php
$headTitle = "Profil - La Manu Rencontre";
$pageTitle = "Profil";
ob_start();
;?>

<?php
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';
;?>