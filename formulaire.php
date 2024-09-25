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
            $host = "ryfqldzbliwmq6g5.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
            $database = "icjewbuoibg8gufs";
            $username = "h8v23xyptizhutwr";
            $password = "o07u65ssxx9gq82b";
            $port = 3306;


        // Crée une connexion PDO à la base de données
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
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
