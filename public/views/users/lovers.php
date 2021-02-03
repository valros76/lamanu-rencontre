<?php
$headTitle = "Lovers View - La Manu Rencontre";
$pageTitle = "Lovers";
if (isset($_COOKIE['user_id']) || empty($_COOKIE['user_id'])) {
   require 'public/controllers/users/actions/show_lovers.php';
   $lovers_list = showLoversFor($_COOKIE['user_id']);
   ob_start();

   foreach ($lovers_list as $lover => $value) {
      if (in_array('homme', $lovers_list[$lover])) {
         echo '
      <div class="user-profile male-profile">';
      } else {
         echo '
      <div class="user-profile female-profile">';
      }
      if (isset($lovers_list[$lover]['picture']) && !empty($lovers_list[$lover]['picture']) && file_exists('public/assets/images/upload/' . $lovers_list[$lover]['picture'])) {
         echo '<img src="public/assets/images/upload/' . $lovers_list[$lover]['picture'] . '" alt="' . $lovers_list[$lover]['firstname'] . ' avatar" class="user-avatar"/>';
      } else {
         echo '<img src="https://via.placeholder.com/80" alt="' . $lovers_list[$lover]['firstname'] . ' avatar" class="user-avatar"/>';
      }
      echo '
   <div class="user-para-infos">';
      if (isset($lovers_list[$lover]['lastname'])) {
         echo '<p>Nom : ' . $lovers_list[$lover]['lastname'] . '</p>';
      }
      if (isset($lovers_list[$lover]['firstname'])) {
         echo '<p>Prénom : ' . $lovers_list[$lover]['firstname'] . '</p>';
      }
      if (isset($lovers_list[$lover]['age'])) {
         echo '<p>Âge : ' . $lovers_list[$lover]['age'] . '</p>';
      };
      if (isset($lovers_list[$lover]['gender'])) {
         echo '<p>Genre : ' . $lovers_list[$lover]['gender'] . '</p>';
      }
      if (isset($lovers_list[$lover]['email'])) {
         echo '<p>Email : ' . $lovers_list[$lover]['email'] . '</p>';
      } else if (isset($_lovers_list[$lover]['mail'])) {
         echo '<p>Email : ' . $lovers_list[$lover]['mail'] . '</p>';
      }
      if (isset($lovers_list[$lover]['cp'])) {
         echo '<p>Code postal : ' . $lovers_list[$lover]['cp'] . '</p>';
      } elseif (isset($_lovers_list[$lover]['zipcode'])) {
         echo '<p>Code postal : ' . $lovers_list[$lover]['zipcode'] . '</p>';
      }
      if (isset($lovers_list[$lover]['description'])) {
         echo '<p>Description : ' . $lovers_list[$lover]['description'] . '</p>';
      }
      echo '</div>';
      if (isset($lovers_list[$lover]['firstname'])) {
         echo '<a href="?user_action=chat_with&target=' . $lovers_list[$lover]['firstname'] . '" class="user-profile-link">Chatter avec ' . $lovers_list[$lover]['firstname'] . '</a>';
      }
      echo '</div>';
   }

   $mainContent = ob_get_clean();
} else {

   header('Location:?globals=welcome');
}
require 'public/templates/base_template.php';;
