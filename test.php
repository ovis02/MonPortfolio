<?php
$hashedPasswordFromDatabase = '$2y$10$ajVjRTFHUExEMFJS...'; // Votre mot de passe haché stocké dans la base de données

$passwordToCheck = "Zayd786."; // Mot de passe que vous voulez vérifier

if (password_verify($passwordToCheck, $hashedPasswordFromDatabase)) {
    echo "Le mot de passe correspond.";
} else {
    echo "Le mot de passe ne correspond pas.";
}
?>