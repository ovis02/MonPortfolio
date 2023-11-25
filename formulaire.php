<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère des données du formulaire
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Effectue une validation simple 
    if (empty($email) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
        return;
    }

    try {
        $servername = "localhost";
        $dbname = "portfolio";
        $username = "root";
        $password = "";

        // Crée une connexion PDO à la base de données
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prépare la requête d'insertion avec la date
        $stmt = $conn->prepare("INSERT INTO formulaire (email, message, date) VALUES (:email, :message, NOW())");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        // Exécute la requête
        $stmt->execute();

        // Message de confirmation
        echo "Votre message a été envoyé avec succès.";
    } catch(PDOException $e) {
        // En cas d'erreur, affichage du message d'erreur
        echo "Erreur : " . $e->getMessage();
    }

    // Ferme la connexion PDO
    $conn = null;
}
?>
