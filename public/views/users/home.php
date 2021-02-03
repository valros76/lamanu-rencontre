<?php
$headTitle = "La Manu - Rencontres";
$pageTitle = "Accueil";
ob_start();
;?>

<?php
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';