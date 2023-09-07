<?php
/* Smarty version 4.3.2, created on 2023-09-07 18:39:48
  from 'C:\Users\640po\OneDrive\Laragon2.0\www\coop-emploi\coop-emplois\COOP-V1\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fa18f43b1a79_87884739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3ede32e79cfe3544bf27fa693ebed0d71ebe250' => 
    array (
      0 => 'C:\\Users\\640po\\OneDrive\\Laragon2.0\\www\\coop-emploi\\coop-emplois\\COOP-V1\\public\\header.tpl',
      1 => 1694111987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fa18f43b1a79_87884739 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Mon Site Web</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Réunion</a>
                <div class="dropdown-content">
                    <a href="/reunion.php">Page 1</a>
                    <a href="#">Page 2</a>
                    <a href="#">Page 3</a>
                </div>
            </li>
            <li><a href="/entretiens.php">Entretiens</a></li>
            <li><a href="/porteurs_de_projet.php">Porteurs de Projet</a></li>
            <li><a href="/accompagnateurs.php">Accompagnateurs</a></li>
           
            <li class="dropdown">
                <a href="#" class="dropbtn">Paramètres</a>
                <div class="dropdown-content">
                    <a href="/reunion.php">Page 1</a>
                    <a href="#">Page 2</a>
                    <a href="#">Page 3</a>
                </div>
            </li>
            <li class="menu-item right"><a href="/plan_du_site.php">Plan du site</a></li>
          <li class="menu-item right">
            <li class="dropdown">
                <a href="#" class="dropbtn">Espace personnel</a>
                <div class="dropdown-content">
                    <a href="/reunion.php">Page 1</a>
                    <a href="#">Page 2</a>
                    <a href="#">Page 3</a>
                </div>
            </li>
            </li>
        </ul>
    </nav>
</header>

<main>
    <h1>Contenu principal</h1>
    <p>Bienvenue sur mon site web. Ceci est la page d'accueil.</p>
</main>

<footer>
    <p>&copy; <?php echo '<?php'; ?>
 echo date("Y"); <?php echo '?>'; ?>
 Mon Site Web</p>
</footer>
</body>
</html>
<?php }
}
