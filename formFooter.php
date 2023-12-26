<!--Contact-->
    <section class="Contact">
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
                     <a href="cv/Aowis_MOHAMMAD_cv final.pdf">
          <button class="download-button">Télécharger</button>
          </a>
        </div>
         <div id="confirmation"></div>
      </div>
    </section>
    <!--Footer-->   
    <footer class="footer">
      <div class="container">
        <div class="col-12">
          <div class="row d-flex justify-content-center">
            <div class="col-md-2 col-sm-1">
                <a href="https://www.facebook.com/oves.moh">
              <img src="images/facebook.png" alt="Logo 1" />
               </a>
            </div>
            <div class="col-md-2 col-sm-1">
               <a href="https://www.instagram.com/ovismo786/">
              <img src="images/instagram.png" alt="Logo 2" />
              </a>
            </div>
            <div class="col-md-2 col-sm-1">
              <a href="https://www.linkedin.com/in/ovis-m-45763328a/">
              <img src="images/linkedin.png" alt="Logo 3" />
              </a>
            </div>
            <div class="col-md-2 col-sm-1">
              <a href="https://twitter.com/oviss02">
              <img src="images/twitter.png" alt="Logo 4" />
              </a>
            </div>
            <div class="col-md-2 col-sm-1">
              <a href="https://github.com/ovis02">
              <img src="images/github.png" alt="Logo 5" />
              </a>
            </div>
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
