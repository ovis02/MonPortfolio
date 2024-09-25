<?php
$accueilColor = "white";
$projetsColor = "warning";
$aProposColor = "warning";
$contactColor = "warning";
include 'header.php';
?>
<canvas id="canvas"> </canvas>
<!--Introduction-->
    <section class="Introduction">
      <div class="perso-content">
        <h1 class="perso-title">Salut,<br> je suis Mohammad Aowis</h1>
        <p class="perso-subtitle">Web Developer</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="content1">
              <h1 class="title">Développeur front-end</h1>
              <p class="text">
                Développeur front-end créant des sites web conviviaux et
                percutants Explorez mon portfolio pour découvrir mon expertise
                en conception web.
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="logo-container">
              <img src="images/logo.png" alt="Votre Logo" class="logo" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Présentation-->
    <section class="Main">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="content2">
              <h2 class="title">1. Qui suis-je ?</h2>
              <p class="text">
                Je suis une personne récemment convertie au développement web.
                Passionné par l'aspect artistique du métier et doté d'une grande
                imagination, je suis enthousiaste à l'idée de participer à la
                transition numérique en cours. Je suis quelqu'un de sérieux,
                déterminé à donner le meilleur de moi-même dans ce domaine en
                constante évolution. Mon objectif est de créer des expériences
                en ligne captivantes et de répondre aux besoins croissants de la
                société numérique d'aujourd'hui. Je suis prêt à apprendre et à
                contribuer activement à ce monde en constante évolution.
              </p>
            </div>
          </div>

          <div class="col-md-5">
            <div class="logo-container2">
              <img
                src="images/Image2.png"
                alt="Votre Photo de Profil"
                class="profile-picture"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Technologies -->
<section class="technologies">
  <div class="container">
    <h2 class="title">Technologies</h2>
    <div class="tech-icons">
      <img src="images/html.png" alt="HTML" />
      <img src="images/css.png" alt="CSS" />
      <img src="images/js.png" alt="JavaScript" />
      <img src="images/php.png" alt="PHP" />
      <img src="images/nodejs.png" alt="Node.js" />
      <img src="images/bootstrap.png" alt="Bootstrap" />
      <!-- Ajoute d'autres logos ici -->
    </div>
  </div>
</section>
     <?php include 'Footer.php'; ?>