<?php
$accueilColor = "warning";
$projetsColor = "warning";
$aProposColor = "warning";
$contactColor = "white";
include 'header.php';
?>
<canvas id="canvas"> </canvas>

<!--Contact-->
    <section class="Contact">
      <div class="container">
        <h2 class="title-form">Contact</h2>
        <div class="contact-box">
          <div class="contact-left">
            <img src="images/logo.png" alt="Votre Logo" class="logo2" />
          </div>
          <div class="contact-right">
            <form id="myForm" method="POST" action="formulaire.php">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  placeholder="Entrez votre adresse email"
                />
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea
                  id="message"
                  name="message"
                  required
                  placeholder="Saisissez votre message ici"
                  style="height: 200px"
                ></textarea>
                    
              </div>
              <button class="send-button" type="submit">Envoyer</button>
            </form>
          </div>
        </div>
           <div id="confirmation"></div>
      </div>
    </section>
      <?php include 'Footer.php'; ?>