<?php
// Connexion à la base de données
$hote = 'localhost';
$nom_base = 'restaurant_menu';
$utilisateur = 'root';
$mot_de_passe = '';

try {
    $pdo = new PDO("mysql:host=$hote;dbname=$nom_base", $utilisateur, $mot_de_passe);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $categorie_id = $_POST['categorie_id'];

    // Insertion dans la base de données
    $requete = $pdo->prepare("INSERT INTO plats (nom, description, prix, categorie_id) VALUES (?, ?, ?, ?)");
    $requete->execute([$nom, $description, $prix, $categorie_id]);

    echo "Plat ajouté avec succès !";
}
?>
