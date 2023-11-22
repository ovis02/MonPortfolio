<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Effectuez une validation simple 
    if (empty($email) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
    } else {
  

        // 1. Envoi du message de confirmation
        $confirmationMessage = "Merci pour votre message. Je l'ai bien reçu et il sera traité prochainement.";

        // 2. Enregistrement des données dans la base de données MySQL en utilisant PDO
        try {
            $servername = "localhost";
            $dbname = "portfolio";
            $username = "ovis02";
            $password = "Zayd786.";

            // Créez une connexion PDO
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // Définissez l'attribut PDO pour générer des exceptions en cas d'erreur
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparez la requête d'insertion
            $stmt = $conn->prepare("INSERT INTO formulaire (email, message) VALUES (:email, :message)");

            // Liez les valeurs aux paramètres
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            // Exécutez la requête
            $stmt->execute();

            echo $confirmationMessage;
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        // Fermez la connexion PDO
        $conn = null;
    }
}
?>
