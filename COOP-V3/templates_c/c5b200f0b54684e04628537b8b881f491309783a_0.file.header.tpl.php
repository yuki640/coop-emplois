<?php
/* Smarty version 4.3.2, created on 2023-09-13 08:06:30
  from 'C:\laragon\www\coop-emplois\COOP-V3\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65016d86e632f9_57806756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b200f0b54684e04628537b8b881f491309783a' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-V3\\public\\header.tpl',
      1 => 1694592361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65016d86e632f9_57806756 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="index.php?">Accueil</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Réunion</a>
                <div class="dropdown-content">
                    <a href="#">Page 1</a>
                    <a href="#">Page 2</a>
                    <a href="#">Page 3</a>
                </div>
            </li>
            <li><a href="#"">Entretiens</a></li>
            <li><a href="#">Porteurs de Projet</a></li>
            <li><a href="index.php?gestion=accompagnateurs">Accompagnateurs</a></li>
           
            <li class="dropdown">
                <a href="#" class="dropbtn">Paramètres</a>
                <div class="dropdown-content">
                    <a href="index.php?gestion=lieux">Lieux</a>
                    <a href="#">Page 2</a>
                    <a href="#">Page 3</a>
                </div>
            </li>
            <li class="menu-item right"><a href="#">Plan du site</a></li>

            <li class="dropdown pull-right">
                <a href="#" class="dropbtn">Espace personnel</a>
                <div class="dropdown-content">
                    <a href="#">Page 1</a>
                    <a href="#">Page 2</a>
                    <a href="#">Page 3</a>
                </div>
            </li>
            
        </ul>
    </nav>
</header>


</body>

</html>
<?php }
}
