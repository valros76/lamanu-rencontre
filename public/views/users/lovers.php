<?php
$headTitle = "Lovers View - La Manu Rencontre";
$pageTitle = "Lovers";
ob_start();
;?>

<?php
$mainContent = ob_get_clean();
require 'public/templates/base_template.php';
;?>