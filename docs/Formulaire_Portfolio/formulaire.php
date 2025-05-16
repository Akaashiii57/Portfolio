<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>TP FORMULAIRE</title>
</head>
<body>
    <fieldset>
        <legend>Inscription</legend>
    <form class="formulaire" method="post">
        <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" >
<br>
        <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prenom" >
<br>
        <label for="username">Pseudo</label>
            <input type="text" name="username" id="username" placeholder="Entrez votre pseudo" required>
<br>
        <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Entrez votre email" >
<br>
        <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
<br>
        <label for="telephone">Téléphone:</label>
            <input type="number" name="telephone" id="telephone" placeholder="Entrez votre numéro de téléphone" >
<br>
        <label for="sexe">Adresse:</label>
            <input type="radio" name="genre" value="genre" value="Homme" id="homme" /> Homme <input type="radio" name="genre" value="genre" value="Homme" id="homme" /> Femme
<br>
        <input type="submit" value="Valider">
</fieldset>



<?php



if ((isset($_POST['password']) AND $_POST['password'] == "cmoi") AND (isset($_POST['username']) AND $_POST['username'] == "Akaashi")) // isset veut dire existe donc si le mot de passe existe et qu'il est egale a cmoi pareil pour l'username 
{
 echo '<p>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</p>'; // afficher le code
}
else 
{
    echo '<p>Le pseudo et le mot de passe sont incorrect, tu es un usurpateur</p>'; // si le mot de passe ou l'username ou les deux sont faux alors afficher le <p></p>
}

$conn = new mysqli("localhost", "root", "", "formulaire");
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();

?>