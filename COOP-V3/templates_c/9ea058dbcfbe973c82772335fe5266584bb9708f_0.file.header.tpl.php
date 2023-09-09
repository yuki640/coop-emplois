<?php
/* Smarty version 4.3.2, created on 2023-09-08 11:06:40
  from 'C:\laragon\www\coop-emplois\COOP-V2\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fb0040b658b5_47357940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ea058dbcfbe973c82772335fe5266584bb9708f' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-V2\\public\\header.tpl',
      1 => 1694171199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fb0040b658b5_47357940 (Smarty_Internal_Template $_smarty_tpl) {
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
