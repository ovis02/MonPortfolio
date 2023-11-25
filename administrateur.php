<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Administrateur</title>
    <link rel="stylesheet" href="portfolio.css">
</head>
<body>
    <h1 class="titre-message">Ma messagerie</h1>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Message</th>
                <th>Date d'envoi</th>
            </tr>
        </thead>
        <tbody id="recup">
            <?php
            $servername = "localhost";
            $dbname = "portfolio";
            $username = "root";
            $password = "";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->query("SELECT id, email, message, date FROM formulaire");
                $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($messages as $message) {
                    echo "<tr>";
                    echo "<td>" . $message['email'] . "</td>";
                    echo "<td>" . $message['message'] . "</td>";
                    echo "<td>" . $message['date'] . "</td>"; 
                    echo "</tr>";
                }
            } catch(PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </tbody>
    </table>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="portfolio.js"></script>
</body>
</html>
