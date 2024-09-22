<!--Contact-->
    <section id="formulaire" class="Contact">
      <div class="container">
        <h2 class="title">Contact</h2>
        <div class="contact-box">
          <div class="contact-left">
            <img src="images/monLogo.png" alt="Votre Logo" class="logo2" />
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
  
        <div class="button-container">
                    <p class="text">Télécharger mon CV</p>
                     <a href="cv/Aowis_MOHAMMAD_cv finalisé.pdf">
          <button class="download-button">Télécharger</button>
          </a>
        </div>
         <div id="confirmation"></div>
      </div>
    </section>
    
<!-- Footer -->
<footer class="footer">
  <div class="container">
    <!-- Section principale du footer -->
    <div class="footer-content row d-flex justify-content-between align-items-center">
      <!-- Section à propos -->
      <div class="col-md-4 footer-about">
        <h3>À propos de moi</h3>
        <p>
          Développeur passionné par la création d'expériences web modernes et performantes. Mon portfolio reflète mon expertise dans le design et le développement front-end.
        </p>
      </div>

      <!-- Section réseaux sociaux -->
      <div class="col-md-4 text-center footer-social">
        <div class="row d-flex justify-content-center">
          <div class="col social-icon">
            <a href="https://www.facebook.com/oves.moh" target="_blank">
              <img src="images/facebook.png" alt="Facebook Logo" />
            </a>
          </div>
          <div class="col social-icon">
            <a href="https://www.instagram.com/ovismo786/" target="_blank">
              <img src="images/instagram.png" alt="Instagram Logo" />
            </a>
          </div>
          <div class="col social-icon">
            <a href="https://www.linkedin.com/in/ovis-m-45763328a/" target="_blank">
              <img src="images/linkedin.png" alt="LinkedIn Logo" />
            </a>
          </div>
          <div class="col social-icon">
            <a href="https://twitter.com/oviss02" target="_blank">
              <img src="images/twitter.png" alt="Twitter Logo" />
            </a>
          </div>
          <div class="col social-icon">
            <a href="https://github.com/ovis02" target="_blank">
              <img src="images/github.png" alt="GitHub Logo" />
            </a>
          </div>
        </div>
      </div>

      <!-- Section contact rapide -->
      <div class="col-md-4 footer-contact text-right">
        <h3>Me contacter</h3>
        <p>Email: <a href="mailto:oves7860@gmail.com">oves7860@gmail.com</a></p>
        <p>Téléphone: +33 6 09 38 12 07</p>
      </div>
    </div>

    <!-- Barre de copyright -->
    <div class="footer-bottom row text-center">
      <div class="col-12">
        <p>© 2024 MOHAMMAD Aowis. Tous droits réservés.</p>
        <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
      </div>
    </div>
  </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <script src="portfolio.js"></script>
  </body>
</html>
