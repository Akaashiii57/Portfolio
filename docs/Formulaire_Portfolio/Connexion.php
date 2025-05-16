<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    $pdo = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

$message = "";

if (isset($_POST['connexion'])) { 
    $pseudoSaisi = trim($_POST['Pseudo']);
    $emailSaisi = trim($_POST['Email']);
    $motDePasse = $_POST['Mot_de_passe'];

    if (empty($pseudoSaisi) || empty($emailSaisi) || empty($motDePasse)) {
        $message = "❌ Veuillez remplir tous les champs.";
    } else {
        // Recherche par Email uniquement
        $stmt = $pdo->prepare("SELECT * FROM users WHERE Email = ?");
        $stmt->execute([$emailSaisi]);

        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérifie le mot de passe
            if (password_verify($motDePasse, $user['Mot_de_passe'])) {
                // Vérifie si le pseudo correspond
                if ($user['Pseudo'] === $pseudoSaisi) {
                    $_SESSION['pseudo'] = $user['Pseudo'];
                    $_SESSION['email'] = $user['Email'];
                    $_SESSION['Nom'] = $user['Nom'];
                    $_SESSION['Prenom'] = $user['Prenom'];
                    header("Location: succes.php?status=success");
                    exit();
                } else {
                    $message = "❌ Mauvais pseudo.";
                }
            } else {
                $message = "❌ Mot de passe incorrect.";
            }
        } else {
            $message = "❌ Aucun compte trouvé avec cet email.";
        }
    }
}
?>



<html>
    <head>        
        <title>Page formulaire stylée</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>
    <body>

<?php if (!empty($message) && isset($_POST['connexion'])) : ?>
    <div class="message-erreur"><?php echo $message; ?></div>
<?php endif; ?>

        <form method="post" action=""> 
            <h1>CONNEXION</h1>
<div class="marge">
            <label class="lab">Entrez votre Pseudo</label>
            <input type="text" name="Pseudo" id="username" placeholder="Inserez votre Pseudo"/> 
</div>
<div class="marge">
            <label class="lab">Entrez votre Email</label>
            <input type="email" name="Email" id="Email" placeholder="Insérez votre email" required/> 
        </div>       

        <div class="marge">   
            <label class="lab">Entrez votre Mot de Passe</label>
            <input type="password" name="Mot_de_passe" id="Mot_de_passe" placeholder="Insérez votre mot de passe" required/>
        </div>

        <div class="right">
            <input type="checkbox" name="checkbox" id="checkbox"/> 
            <label for="checkbox">Se souvenir de moi ?</label>
        </div>

        <input class="button" type="submit" name="connexion" value="SE CONNECTER"/>

        <p class="compte lab">Vous n'avez pas de compte ?<br>
            Cliquez pour en <a href="Inscription.php">créer</a>
        </p>
    </form>
    <script>
    setTimeout(() => {
        const message = document.querySelector('.message-erreur');
        if (message) {
            message.style.opacity = '0';
            setTimeout(() => message.remove(), 500); // supprime après fondu
        }
    }, 3000);
</script>
    </body>
</html> 


