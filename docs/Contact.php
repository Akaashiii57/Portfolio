<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="projects.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<section>
    <div class="deux"><!--Contact-->
      <div class="gauche">
          <div class="image1">
              <img src="Image/Photo cv.png" alt="Moi parce que je suis le plus beau de la terre" style="border-top-left-radius: 20px">
          </div>
          <?php include 'Aside-menu.php'; ?>
      </div>
      <div class="droite" id="CONTACT">
            <div class="deux_un">
            <h1 class="Titre_1 anim"><strong>Contact</strong></h1>
        </div>
        <div class="deux_deux formulaire">  

            <form method="post" action="">
              <div class="names">
                <input type="text" id="nom" placeholder="Votre Nom" required>
                <input type="text" id="prenom" placeholder="Votre Prénom" required>
              </div>
              <div class="coord">
                <input type="Email" id="email" placeholder="Votre Email" required>
                <input type="number" id="phone" placeholder="Votre Numero de téléphone" required> 
              </div>
              <input type="submit" name="envoyer" id="send" value="Envoyer">
            </form>
        </div>
   </div>
   </div> 
</section> 
</body>
<?php
?>