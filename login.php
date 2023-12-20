<?php
session_start();

// Paramètres de connexion à la base de données
$host = "ltnya0pnki2ck9w8.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "ufmtrdqqw5rnyyih";
$password = "s6ovwutglzlers1f";
$database = "cd9qjh84w06noeth";
$port = 3306;

try {
    // Connexion à la base de données
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifie si les données POST existent et ne sont pas vides
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Récupère les données du formulaire
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Recherche de l'utilisateur dans la base de données
        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Vérification du mot de passe
            if (password_verify($password, $user['password'])) {
                // Mot de passe correct, authentification réussie
                $_SESSION['username'] = $username;
                header("Location: administrateur.php");
                exit();
            } else {
                // Mot de passe incorrect
                echo "Mot de passe incorrect. Veuillez réessayer.";
            }
        } else {
            // Utilisateur non trouvé
            echo "Utilisateur non trouvé.";
        }
    }
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
