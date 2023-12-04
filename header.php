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
    <link rel="stylesheet" href="portfolio.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand custom-navbar">
        <a class="navbar-brand admin" href="#"
          ><img src="images/logoporfolio2.jpg" alt="Logo" class="custom-logo"
        /></a>
           <div class="login-form">
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="Nom d'utilisateur">
      <input type="password" name="password" placeholder="Mot de passe">
      <button type="submit">Se connecter</button>
    </form>
  </div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link perso-class text-<?php echo $accueilColor; ?>" href="Accueil.php"
              >Accueil</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link perso-class text-<?php echo $projetsColor; ?>" href="Projets.php"
              >Projets</a
            >
          </li>
        </ul>
      </nav>
    </header>
