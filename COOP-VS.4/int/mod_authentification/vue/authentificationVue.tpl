<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentification</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../../../public/assets/css/auth.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="../../../mod_front/index.html">Accueil</a></li>
            <li><a href="#">La coopérative</a></li>
            <li><a href="#">Nos projets</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Se connecter</a></li>
        </ul>
    </nav>
</header>
<div class="form">

    <div id="login">
        <h1>Bon retour parmis nous !</h1>

        <form action="/" method="post">

            <div class="field-wrap">
                <label>
                    Email<span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off"/>
            </div>

            <div class="field-wrap">
                <label>
                    Mots de passe <span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off"/>
            </div>

            <p class="forgot"><a href="#">Mots de passe oublier ?</a></p>

            <button class="button button-block">Connexion</button>

        </form>

    </div>


</div>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="./script.js"></script>

</body>
</html>
