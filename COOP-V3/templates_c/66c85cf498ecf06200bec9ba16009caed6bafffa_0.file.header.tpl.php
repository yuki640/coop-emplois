<?php
/* Smarty version 4.3.2, created on 2023-09-08 13:47:44
  from 'C:\Users\640po\OneDrive\Laragon2.0\www\coop-emploi\coop-emplois\COOP-V2\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fb2600344935_35209919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66c85cf498ecf06200bec9ba16009caed6bafffa' => 
    array (
      0 => 'C:\\Users\\640po\\OneDrive\\Laragon2.0\\www\\coop-emploi\\coop-emplois\\COOP-V2\\public\\header.tpl',
      1 => 1694180828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fb2600344935_35209919 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="#">Accompagnateurs</a></li>
           
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
