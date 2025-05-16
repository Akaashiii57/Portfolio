<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Résultat</title>
    <link rel="stylesheet" href="succes.css">
</head>
<body>
<?php
session_start();


$status = $_GET['status'] ?? '';
$inscription = $_GET['inscription'] ?? '';

if ($status === 'success') {
    $nomprenom = $_SESSION['Nom'] . " " . $_SESSION['Prenom'];
    echo "<h1>Bienvenue, " . htmlspecialchars($nomprenom) . " 👋</h1>";
    echo "<a href='https://alexis-steiger-portfolio.mds-nancy.yt/' target='_blank'><button>Accéder au portfolio</button></a>";
} elseif ($inscription === 'success') {
    echo "<h1>✅ Inscription réussie !</h1>";
    echo "<a href='Connexion.php'><button>Aller à la connexion</button></a>";
} elseif ($inscription === 'fail') {
    echo "<h1>❌ L'inscription a échoué. Réessayez.</h1>";
    echo "<a href='Inscription.php'><button>Retour</button></a>";
} elseif ($status === 'fail') {
    echo "<h1>❌ Connexion échouée. Email ou mot de passe invalide.</h1>";
    echo "<a href='Connexion.php'><button>Réessayer</button></a>";
}
?>
</body>
</html>
