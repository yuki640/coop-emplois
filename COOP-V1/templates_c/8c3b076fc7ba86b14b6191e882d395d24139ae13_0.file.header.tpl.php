<?php
/* Smarty version 4.3.2, created on 2023-09-07 18:24:46
  from 'C:\laragon\www\coop-emplois\COOP-V1\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fa156e1ec570_22525418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3b076fc7ba86b14b6191e882d395d24139ae13' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-V1\\public\\header.tpl',
      1 => 1694111074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fa156e1ec570_22525418 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="/reunion.php">Réunion</a></li>
            <li><a href="/entretiens.php">Entretiens</a></li>
            <li><a href="/porteurs_de_projet.php">Porteurs de Projet</a></li>
            <li><a href="/accompagnateurs.php">Accompagnateurs</a></li>
            <li><a href="/parametres.php">Paramètres</a></li>
            <li class="menu-item right"><a href="/plan_du_site.php">Plan du site</a></li>
            <li class="menu-item right"><a href="/espace_personnel.php">Espace personnel</a></li>
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
