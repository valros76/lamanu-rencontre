<?php
global $root;
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
   $home_link = '?user=home';
} else if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
   $home_link = '?admin=home';
} else {
   $home_link = '?global=welcome';
}; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <?= $othersMeta ?? ""; ?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $headtitle ?? "La manu - Rencontre"; ?></title>
   <link rel="stylesheet" href="<?= 'public/sources/css/style.css?v=' . time(); ?>">
   <?= $preloads ?? ""; ?>
   <?= $cdns ?? ""; ?>
</head>

<body>
   <header class="main-head">
      <h1 class="main-head-title">
         <?= $pageTitle ?? "Rencontre"; ?>
      </h1>
      <?= $mainNav ?? '
         <nav class="main-nav">
            <i class="menu-wrapper" id="main-wrapper-icon"></i>
            <ul class="main-menu main-menu-hide" id="main-menu"> 
            <i class="menu-wrapper-close" id="main-wrapper-close-icon"></i>';
      if (isset($_COOKIE['user_id']) && !empty($_COOKIE['user_id'])) {
         echo '<li class="main-menu-items">
                  <a href="?user=lovers" class="main-menu-links">
                     Lovers
                  </a>
               </li>';
      } else {
         echo '
         <li class="main-menu-items">
            <a href="' . $home_link . '" class="main-menu-links">
               Accueil
            </a>
         </li>
               <li class="main-menu-items">
                  <a href="?user=user_connexion" class="main-menu-links">
                     Connexion
                  </a>
               </li>
               <li class="main-menu-items">
                  <a href="?admin=admin_connexion" class="main-menu-links">
                     Modération
                  </a>
               </li>';
      }
      if (isset($_COOKIE['admin_id']) && !empty($_COOKIE['admin_id'])) {
         echo '
         <li class="main-menu-items">
               <a href="?admin_action=create_test_users" class="main-menu-links">
                  Create users
               </a>
            </li>';
      }
      echo '</ul>
         </nav>
      '; ?>
   </header>

   <main class="main-content">
      <?= $mainContent ?? '
         <section class="errors-sections">
            <h2 class="errors-sections-title">
               Erreur
            </h2>
            <p class="errors-description">
               Une erreur s\'est produite lors du chargement du contenu...
            </p>
         </section>
      '; ?>
   </main>

   <?= $mainFooter ?? ""; ?>
   <script src="public/sources/js/menu-wrapper.js"></script>
   <?= $scripts ?? ""; ?>
</body>

</html>