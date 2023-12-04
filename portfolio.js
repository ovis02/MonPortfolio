// confirmation de maniere asyncrone

$(document).ready(function () {
  $("#myForm").submit(function (event) {
    event.preventDefault(); // Empêche la soumission classique du formulaire

    // Récupère des données du formulaire
    var formData = $(this).serialize();

    // Requête AJAX
    $.ajax({
      type: "POST",
      url: "formulaire.php",
      data: formData,
      success: function (response) {
        // met à jour la section dans l'id de confirmation
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

$(document).ready(function () {
  $(".admin").on("click", function (event) {
    event.preventDefault();

    if ($(".login-form").css("display") === "block") {
      $(".login-form").css("display", "none"); // Cache le formulaire s'il est déjà affiché
    } else {
      $(".login-form").css("display", "block"); // Affiche le formulaire s'il est caché
    }
  });
});
