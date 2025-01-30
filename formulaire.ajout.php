<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Plat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="page accueil.html">
</head>
<body>
    <h1>Ajouter un Nouveau Plat</h1>
    <form method="POST" action="ajouter_plat.php">
        <label for="nom">Nom du plat :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" step="0.01" name="prix" required><br>

        <label for="categorie_id">Catégorie :</label>
        <select id="categorie_id" name="categorie_id" required>
            <!-- Options générées dynamiquement depuis PHP -->

            <?php
            // Connexion à la base de données
            $pdo = new PDO("mysql:host=localhost;dbname=restaurant", "root", "");
            
            ?>
        </select><br>

        <button type="submit">Ajouter le Plat</button>
    </form>
</body>
</html>
