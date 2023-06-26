<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sgpo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    $active = $_POST['active'];
    $post = $_POST['post'];

    // Hash du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prépare la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO use6 (Username, Password, Active, Post) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $username, $password, $active, $post);

    // Exécute la requête d'insertion
    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur lors de l'inscription : " . $stmt->error;
    }

    // Ferme la connexion et libère les ressources
    $stmt->close();
    $conn->close();
}
?>
