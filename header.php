<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Lexend+Mega&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="portfolio.css" />
  </head>
  <body>
   <header class="header-3d">
      <nav class="navbar navbar-expand custom-navbar">
        <a class="navbar-brand admin" href="#">
          <img src="images/maison.png" alt="Logo" class="custom-logo" />
        </a>
         
        <div class="login-form">
          <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Nom d'utilisateur">
            <input type="password" name="password" placeholder="Mot de passe">
            <button type="submit">Se connecter</button>
          </form>
        </div>
        <ul class="navbar-nav ml-auto custom-link">
          <li class="nav-item">
            <a class="nav-link perso-class text-<?php echo $accueilColor; ?>" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link perso-class text-<?php echo $projetsColor; ?>" href="Projets.php">Projets</a>
          </li>
        
        <li class="nav-item">
    <a class="nav-link perso-class text-<?php echo $aProposColor; ?>" href="apropos.php">À propos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link perso-class text-<?php echo $contactColor; ?>" href="contact.php">Contact</a>
  </li>
  </ul>
       <a class="burger-menu">
      <img src="images/burger.png" alt="Menu" id="burger-menu"/>
    </a>
      </nav>
      <!-- Barre de navigation latérale -->
  <div class="side-nav" id="side-nav">
    <a href="#" class="close-btn" id="close-btn">&times;</a>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="Projets.php">Projets</a></li>
      <li><a href="apropos.php">À propos</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
    </header>