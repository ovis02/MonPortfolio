<?php
$accueilColor = "warning";
$projetsColor = "white";
$aProposColor = "warning";
$contactColor = "warning";
include 'header.php';
?>

<canvas id="canvas"> </canvas>
<!------------------------------Projets------------------------------>
    <!--titre principal des projet-->
    <div class="container text-center mb-3">
      <h1 class="title" id="titre-principale">2.Mes projets</h1>
    </div>

    <!--Projet1-->
<section class="mb-5">
  <div class="container" id="Projet1">
    <div class="row">
      <!-- Description du projet -->
      <div class="col-md-7">
        <div class="content">
          <h2 class="titre-projet">ArcadiaZoo</h2>
          <p class="text">
            <strong>ArcadiaZoo</strong> est une application web complète dédiée à la gestion des activités d'un zoo. Elle permet une gestion efficace des habitats, des animaux, des services et des avis des visiteurs. 
            Cette solution intégrée facilite toutes les opérations au sein du zoo et offre une interface intuitive pour le personnel.
          </p>
            <h3 class="titre-projet">Fonctionnalités</h3>
          <ul class="text">
            <li>Gestion des habitats, animaux, services et avis</li>
            <li>Statistiques en temps réel sur les interactions des visiteurs avec les animaux</li>
            <li>Backend robuste avec gestion des données en MySQL et MongoDB</li>
          </ul>
          <p>
            <h3 class="titre-projet">Technologies utilisées :</h3>
            <br>
            <img src="https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white" alt="HTML5" />
            <img src="https://img.shields.io/badge/-CSS3-1572B6?logo=css3&logoColor=white" alt="CSS3" />
            <img src="https://img.shields.io/badge/-JavaScript-F7DF1E?logo=javascript&logoColor=black" alt="JavaScript" />
            <img src="https://img.shields.io/badge/-Bootstrap-563D7C?logo=bootstrap&logoColor=white" alt="Bootstrap" />
            <img src="https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white" alt="PHP" />
            <img src="https://img.shields.io/badge/-MySQL-4479A1?logo=mysql&logoColor=white" alt="MySQL" />
            <img src="https://img.shields.io/badge/-MongoDB-47A248?logo=mongodb&logoColor=white" alt="MongoDB" />
          </p>
          <p>
            <h3 class="titre-projet mt-5">Lien GitHub :</h3>
            <a href="https://github.com/ovis02/ArcadiaZoo" target="_blank" class="gold-link">Voir le code</a>
          </p>
          <p>
            <h3 class="titre-projet">Lien Heroku :</h3>
            <a href="https://arcazoo-40aeb8b73b17.herokuapp.com/" target="_blank" class="gold-link">Voir le projet en ligne</a>
          </p>
        </div>
      </div>
      <!-- Logo du projet -->
      <div class="col-md-5">
        <div class="logo-container">
          <img src="images/logoArcadia.png" alt="Logo ArcadiaZoo" class="arcadialogo" />
        </div>
      </div>
    </div>
  </div>
</section>
   <!-- Projet 2 : Blog Automobile -->
<section class="mb-5">
  <div class="container" id="Projet2">
    <div class="row">
      <div class="col-md-5">
        <div class="logo-container">
          <img src="images/blogAuto.png" alt="blogAuto" class="blogAuto" />
        </div>
      </div>

      <div class="col-md-7">
        <div class="content">
          <h2 class="titre-projet">Blog Automobile</h2>
          <p class="text">
            Ce projet est un blog dédié aux voitures légendaires, mettant en avant six modèles emblématiques de l'histoire automobile. Les utilisateurs peuvent voter pour leur voiture préférée et laisser des commentaires.
          </p>
          <h3 class="titre-projet">Fonctionnalités</h3>
          <ul class="text">
            <li>Affichage des voitures : Chaque modèle est présenté avec une description détaillée et des images.</li>
            <li>Système de vote : Permet aux utilisateurs de choisir leur voiture préférée parmi les modèles présentés.</li>
            <li>Formulaire de commentaires : Les visiteurs peuvent laisser leurs avis et partager leur passion pour les voitures.</li>
            <li>Interface d'administration : Gère les commentaires et les votes, offrant une modération efficace.</li>
          </ul>
        <p>
            <h3 class="titre-projet ">Technologies utilisées :</h3>
            <br>
            <img src="https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white" alt="HTML5" />
            <img src="https://img.shields.io/badge/-CSS3-1572B6?logo=css3&logoColor=white" alt="CSS3" />
            <img src="https://img.shields.io/badge/-JavaScript-F7DF1E?logo=javascript&logoColor=black" alt="JavaScript" />
            <img src="https://img.shields.io/badge/-Bootstrap-563D7C?logo=bootstrap&logoColor=white" alt="Bootstrap" />
            <img src="https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white" alt="PHP" />
            <img src="https://img.shields.io/badge/-MySQL-4479A1?logo=mysql&logoColor=white" alt="MySQL" />
                      </p>
          <h3 class="titre-projet mt-5">Navigation et Design</h3>
          <p class="text">
            La barre de navigation est inspirée de la face avant d'une Audi avec un éclairage LED. Lorsque l'on passe la souris dessus, les phares s'allument, offrant un effet visuel interactif.
          </p>
          <h3 class="titre-projet">Lien GitHub :</h3>
            <a href="https://github.com/ovis02/BlogVoitures.git" target="_blank" class="gold-link">Voir le code</a>
          </p>
          <p>
            <h3 class="titre-projet">Lien Heroku :</h3>
            <a href="https://arcazoo-40aeb8b73b17.herokuapp.com/" target="_blank" class="gold-link">Voir le projet en ligne</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--Projet3-->
<section>
  <div class="container" id="Projet3">
    <div class="row">
      <div class="col-md-7">
        <div class="content">
          <h2 class="titre-projet">Infirmière Libérale</h2>
          <p class="text">
            Ce projet est une application dédiée aux soins infirmiers à domicile, permettant aux patients de prendre rendez-vous avec l'infirmière libérale, Sahila Azam. L'application offre une interface simple pour consulter les services disponibles et réserver des créneaux horaires.
          </p>
          <h3 class="titre-projet">Fonctionnalités</h3>
          <ul class="text">
            <li>Prise de rendez-vous : Les patients peuvent sélectionner et réserver des créneaux horaires disponibles.</li>
            <li>Formulaire de contact : Permet aux utilisateurs de poser des questions ou de demander des informations supplémentaires.</li>
            <li>Présentation des services : Informations détaillées sur les différents soins proposés.</li>
            <li>Notifications : Confirmation par email des rendez-vous pris.</li>
          </ul>
          <h3 class="titre-projet">Technologies utilisées :</h3>
          <br>
          <img src="https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white" alt="HTML5" />
          <img src="https://img.shields.io/badge/-CSS3-1572B6?logo=css3&logoColor=white" alt="CSS3" />
          <img src="https://img.shields.io/badge/-JavaScript-F7DF1E?logo=javascript&logoColor=black" alt="JavaScript" />
          <img src="https://img.shields.io/badge/-Bootstrap-563D7C?logo=bootstrap&logoColor=white" alt="Bootstrap" />
          <img src="https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white" alt="PHP" />
          <img src="https://img.shields.io/badge/-PostgreSQL-4169E1?logo=postgresql&logoColor=white" alt="PostgreSQL" />
          <h3 class="titre-projet mt-5">Navigation et Design</h3>
          <p class="text">
            L'interface utilisateur est conçue pour être intuitive et facile à naviguer, offrant une expérience utilisateur optimale sur tous les appareils.
          </p>
          <h3 class="titre-projet">Lien GitHub :</h3>
          <a href="https://github.com/ovis02/Infirmiere.git" target="_blank" class="gold-link">Voir le code</a>
          </p>
          <p>
            <h3 class="titre-projet">Lien de démo :</h3>
            <a href="https://application-infirmiere.herokuapp.com/" target="_blank" class="gold-link">Voir le projet en ligne</a>
          </p>
        </div>
      </div>

      <div class="col-md-5 ">
        <div class="logo-container">
          <img src="images/nurse.png" alt="nurse" class="nurse" />
        </div>
      </div>
    </div>
  </div>
</section>
        <?php include 'Footer.php'; ?>