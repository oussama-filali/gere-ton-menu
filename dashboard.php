<!-- dashboard.php -->
<div class="login-form">
    <h3>Connexion Restaurateur</h3>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email professionnel" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
</div>

<?php
// Exemple de connexion SQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu_manager";

// Créer la connexion avec PDO
try {
    $dsn = "mysql:host=$servername;dbname=$dbname";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $conn = new PDO($dsn, $username, $password, $options);
    echo "Connexion réussie";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
