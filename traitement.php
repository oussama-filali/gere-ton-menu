<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit();
}

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu_manager";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupération des données
$entree = $_POST['entree'];
$plat = $_POST['plat'];
$dessert = $_POST['dessert'];
$ingredients = $_POST['ingredients'];
$prix = $_POST['prix'];

// Insertion dans la base de données
$sql = "INSERT INTO menus (entree, plat, dessert, ingredients, prix) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$entree, $plat, $dessert, $ingredients, $prix]);

echo "<script>alert('Menu ajouté avec succès !'); window.location.href='menu.php';</script>";
?>
