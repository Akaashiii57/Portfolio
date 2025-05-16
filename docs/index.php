<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
        <link rel="stylesheet" href="portfolio.css?version=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="projects.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="portfolio.css?v=<?php echo time(); ?>">
        <link rel="icon" href="Design site/Logo AS.png" type="image/x-icon">
    </head>
    <body>
      <?php include 'Menu-top.php'; ?>
    

      <?php include 'Home.php'; ?>

    
      <?php include 'A-propos.php'; ?>

        <!-- <div class="deux"> Experience
          <div class="gauche">
              <div class="image">
                  <img src="Image/Image portfolio.jpg" alt="Moi parce que je suis le plus beau de la terre" style="border-top-left-radius: 20px">
              </div>
            <div class="aside-menu"></div>
          </div>
          <div class="droite" id="EXPERIENCE">
              <div class="deux_un">
                <div class="deux_un">
                <h1 class="Titre_1 anim"><strong>Expériences</strong></h1>
            </div>
            <div class="deux_deux">
            </div>  
        </div>
       </div>
      </div> -->

      <?php include 'Portfolio.php'; ?>

      <?php include 'Contact.php'; ?>
   
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

<script src="Page d'accueil.js"></script>
<script src="index.js"></script>
</html>