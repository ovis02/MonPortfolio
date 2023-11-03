<!--Contact-->
    <section class="Contact">
      <div class="container">
        <h2 class="title">Contact</h2>
        <div class="contact-box">
          <div class="contact-left">
            <img src="monLogo.png" alt="Votre Logo" class="logo2" />
          </div>
          <div class="contact-right">
            <form method="post" action="formulaire.php">
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
            </form>
          </div>
        </div>
        <div class="button-container">
          <button class="send-button" type="submit">Envoyer</button>
          <p class="text">Télécharger mon CV</p>
          <button class="download-button">Télécharger</button>
        </div>
      </div>
    </section>
    <!--Footer-->
    <footer class="footer">
      <div class="container">
        <div class="col-12">
          <div class="row d-flex justify-content-center">
            <div class="col-md-2 col-sm-1">
              <img src="facebook.png" alt="Logo 1" />
            </div>
            <div class="col-md-2 col-sm-1">
              <img src="instagram.png" alt="Logo 2" />
            </div>
            <div class="col-md-2 col-sm-1">
              <img src="linkedin.png" alt="Logo 3" />
            </div>
            <div class="col-md-2 col-sm-1">
              <img src="twitter.png" alt="Logo 4" />
            </div>
            <div class="col-md-2 col-sm-1">
              <img src="github.png" alt="Logo 5" />
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="portfolio.js"></script>
  </body>
</html>
