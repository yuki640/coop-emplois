<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Web</title>
    <style>
        /* Ajoutez votre CSS personnalisé ici pour la mise en page */
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/reunion.php">Réunion</a></li>
                <li><a href="/entretiens.php">Entretiens</a></li>
                <li><a href="/porteurs_de_projet.php">Porteurs de Projet</a></li>
                <li><a href="/accompagnateurs.php">Accompagnateurs</a></li>
                <li><a href="/parametres.php">Paramètres</a></li>
            </ul>
        </nav>
    </header>
    
    <aside>
        <nav>
            <ul>
                <li><a href="/plan_du_site.php">Plan du Site</a></li>
                <li><a href="/espace_personnel.php">Espace Personnel</a></li>
            </ul>
        </nav>
    </aside>

    <main>
        <h1>Contenu principal</h1>
        <p>Bienvenue sur mon site web. Ceci est la page d'accueil.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mon Site Web</p>
    </footer>
</body>
</html>
