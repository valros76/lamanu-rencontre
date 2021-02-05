<?php
$headTitle = "Chat - La Manu Rencontre";
$pageTitle = "Chat";
if(isset($_COOKIE['user_id']) && !empty($_COOKIE['user_id'])){
ob_start();
;?>

<section class="main-sections">
   <h2 class="main-sections-title">
      In Work...
   </h2>
   <div class="chat-container">
   <div class="chat-infos">
      <p>
         ID: <?= $_COOKIE['user_id'];?>
      </p>
      <p>
         Start at : <?= Date('H:i:s')?>
      </p>
      <p>
         Lover ID: <?= $_COOKIE['user_id'];?> 
      </p>
   </div>
      <div class="chat-view">
         <p>Chargement des messages ...</p>
         <p>↓ aperçu ↓</p>
         <div class="chat-message-container my-message">
            <div class="message-avatar-container my-message-avatar-container">
            <img src="https://via.placeholder.com/50" class="message-avatar my-message-avatar"/>
            </div>
            <p class="message-content my-message-content">
               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ad error excepturi quo, suscipit distinctio veniam deserunt aspernatur. Alias, amet laudantium explicabo illum, doloremque enim quam exercitationem ipsum, architecto totam natus eaque non possimus. Quasi obcaecati amet eum sequi in. Itaque quam minima maiores molestias enim harum debitis quia aspernatur.
            </p>
            <p class="message-infos my-message-infos">
               <?= Date('H:i:s') ;?>
            </p>
         </div>
         <div class="chat-message-container target-message">
            <div class="message-avatar-container target-message-avatar-container">
               <img src="https://via.placeholder.com/50" class="message-avatar target-message-avatar"/>
            </div>
            <p class="message-content target-message-content">
               Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quas facilis error?
            </p>
            <p class="message-infos target-message-infos">
               <?= Date('H:i:s') ;?>
            </p>
         </div>
      </div>
   </div>
</section>

<?php
$mainContent = ob_get_clean();
}
require "public/templates/base_template.php";
;?>