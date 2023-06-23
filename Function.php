<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sgpo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupération des valeurs du formulaire
$username = $_POST['Username'];
$password = $_POST['Password'];

// Requête pour vérifier les informations de connexion
$sql = "SELECT * FROM use6 WHERE Username = '$username' AND Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Informations de connexion valides
    header('location:table.php');
} else {
    // Informations de connexion invalides
    header('location:erreur.php');

}

// Fermeture de la connexion à la base de données
$conn->close();
?>
