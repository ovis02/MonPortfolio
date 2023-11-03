<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Effectuez une validation simple (vous pouvez ajouter des validations plus avancées)
    if (empty($email) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
    } else {
        // Les données sont valides, vous pouvez effectuer d'autres opérations ici

        // 1. Envoi du message de confirmation
        $confirmationMessage = "Merci pour votre message. Je l'ai bien reçu et il sera traité prochainement.";

        // Vous pouvez envoyer ce message par e-mail en utilisant une bibliothèque de messagerie comme PHPMailer
        // ou simplement l'afficher à l'utilisateur.

        // 2. Enregistrement des données dans la base de données MySQL
        $servername = "votre_serveur_mysql";
        $username = "votre_utilisateur_mysql";
        $password = "votre_mot_de_passe_mysql";
        $dbname = "votre_base_de_donnees_mysql";

        // Créez une connexion à la base de données
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifiez la connexion
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Préparez et exécutez une requête pour insérer les données dans la base de données
        $sql = "INSERT INTO messages (email, message) VALUES ('$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo $confirmationMessage;
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }

        // Fermez la connexion à la base de données
        $conn->close();
    }
}
?>
