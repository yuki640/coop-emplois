<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../../public/assets/css/front.css">
    <meta charset="UTF-8">
    <title>Coop'Emploi</title>
</head>
<body class="background">
<header>
    <nav>
        <ul>
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="">La coopérative</a></li>
            <li><a href="">Nos projets</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="../../int/index.php">Se connecter</a></li>
        </ul>
    </nav>
</header>

    <main class="color">
        
        <form action="ficheInscription.php" method="post">
            <fieldset>
                <h1>S'inscrire</h1>
                <br>

                <br>
                <p>pour que nous puissions vous confirmer votre inscription. il est nécessaire de preciser un telephone ou une adresse mail valide. Merci pour votre comprention.</p>
                <br>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required><br>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" required><br>
                <label for="code_postal">Code postal :</label>
                <input type="text" name="code_postal" id="code_postal" required><br>
                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville" required><br>
                <label for="tel_fix">Téléphone fixe :</label>
                <input type="tel" name="tel_fix" id="tel_fix" required><br>
                <label for="tel_port">Téléphone portable :</label>
                <input type="tel" name="tel_port" id="tel_port" required><br>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required><br>
            </fieldset>
            <button type="submit">Envoyer</button>
        </form>
    </main>
</body>
</html>
