<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$message = "";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}

if (isset($_POST['enregistrer'])) {
    $nom = trim($_POST['Nom']);
    $prenom = trim($_POST['Prenom']);
    $pseudo = trim($_POST['Pseudo']);
    $email = trim($_POST['Email']);
    $password = $_POST['Mot_de_passe'];

    // Vérification des champs obligatoires 
    if (empty($nom) || empty($prenom) ||empty($pseudo) || empty($email) || empty($password)) {
        $message = "Tous les champs doivent être remplis.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $message = "L'email est invalide.";
    }

    // Vérification séparée de l'email 
    $checkEmail = $pdo->prepare("SELECT * FROM users WHERE Email = ?");
    $checkEmail->execute([$email]);
    $checkPseudo = $pdo->prepare("SELECT * FROM users WHERE Pseudo = ?");
    $checkPseudo->execute([$pseudo]); 
    if ($checkEmail->rowCount() > 0) {
        $message = "L'email existe déjà dans la base de données.";
    }
    elseif ($checkPseudo->rowCount() > 0) {
        $message = "Le pseudo existe déjà dans la base de données.";
    }

    // Si tout est ok, on insère les données
    if (empty($message)) {
        // Hash du mot de passe 
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insertion sécurisée
        $insert = $pdo->prepare("INSERT INTO users (Nom, Prenom, Pseudo, Email, Mot_de_passe) VALUES (?, ?, ?, ?, ?)");
        $success = $insert->execute([$nom, $prenom, $pseudo, $email, $hashedPassword]);

        if ($success) {
            header("Location: succes.php?inscription=success");
            exit();
        } else {
            $message = "Erreur lors de l'inscription.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>        
        <title>Page formulaire stylée</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>
    <body>
        <?php if (!empty($message)) : ?>
            <div class="message-erreur"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="post" action=""> 
            <h1>INSCRIPTION</h1>
            <div class="marge">
                <label class="lab">Entrez votre Nom</label>
                <input type="text" name="Nom" id="Nom" placeholder="Insérez votre nom" required/>
            </div>
            <div class="marge">
                <label class="lab">Entrez votre Prénom</label>
                <input type="text" name="Prenom" id="Prenom" placeholder="Insérez votre prénom" required/>
            </div>            
            <div class="marge">
                <label class="lab">Entrez votre Pseudo</label>
                <input type="text" name="Pseudo" id="Pseudo" placeholder="Insérez votre pseudo" required/>
            </div>
            <div class="marge">
                <label class="lab">Entrez votre Email</label>
                <input type="email" name="Email" id="Email" placeholder="Inserez votre email" required/>
            </div>
            <div class="marge">
                <label class="lab">Entrez votre Mot de Passe</label>
                <input type="password" name="Mot_de_passe" id="Password" placeholder="Inserez votre mot de passe" required/>
            </div>
            <div class="right">
                <input type="checkbox" name="checkbox" id="checkbox"/> <p>Se souvenir de moi ?</p>
            </div>
            <input type="submit" name="enregistrer" value="S'INSCRIRE"/>
            <p class="compte lab"> Vous avez déjà un compte ? Se <a href="Connexion.php">connectez</a></p>
        </form>
    </body>
</html>







