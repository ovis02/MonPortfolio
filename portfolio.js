//aparaitre la confirmation de maniere asyncrone

$(document).ready(function () {
  $("#myForm").submit(function (event) {
    event.preventDefault(); // Empêche la soumission classique du formulaire

    // Récupération des données du formulaire
    var formData = $(this).serialize();

    // Requête AJAX
    $.ajax({
      type: "POST",
      url: "formulaire.php", // Assurez-vous que le chemin est correct
      data: formData,
      success: function (response) {
        // Mettre à jour la section de message avec la réponse
        $("#confirmation").html(response);
      },
      error: function () {
        $("#confirmation").html(
          "Une erreur est survenue lors de l'envoi du formulaire."
        );
      },
    });
  });
});

//Formulaire administrateur

const adminLink = document.querySelector(".admin");
const loginForm = document.querySelector(".login-form");

adminLink.addEventListener("click", function (event) {
  event.preventDefault();

  if (loginForm.style.display === "block") {
    loginForm.style.display = "none"; // Cache le formulaire s'il est déjà affiché
  } else {
    loginForm.style.display = "block"; // Affiche le formulaire s'il est caché
  }
});
