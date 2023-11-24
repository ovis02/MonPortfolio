<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Effectuer une validation simple 
    if (empty($email) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
        return;
    }

    try {
        $servername = "localhost";
        $dbname = "portfolio";
        $username = "root";
        $password = "";

        // Création d'une connexion PDO à la base de données
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparation de la requête d'insertion
        $stmt = $conn->prepare("INSERT INTO formulaire (email, message) VALUES (:email, :message)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        // Exécution de la requête
        $stmt->execute();

        // Message de confirmation
        echo "Votre message a été envoyé avec succès.";
    } catch(PDOException $e) {
        // En cas d'erreur, affichage du message d'erreur
        echo "Erreur : " . $e->getMessage();
    }

    // Fermeture de la connexion PDO
    $conn = null;
}
?>
