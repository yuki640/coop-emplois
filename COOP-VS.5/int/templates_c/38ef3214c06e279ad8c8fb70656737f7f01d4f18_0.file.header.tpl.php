<?php
/* Smarty version 4.3.2, created on 2023-12-14 10:13:24
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_657ac734979671_79525233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ef3214c06e279ad8c8fb70656737f7f01d4f18' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\public\\header.tpl',
      1 => 1702544612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657ac734979671_79525233 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/header.css">
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
                        <a href="index.php?gestion=reunion&action=listerAV">À venir</a>
                        <a href="index.php?gestion=reunion&action=listerDP">Déja passée</a>
                    </div>
                </li>
                <li><a href="index.php?gestion=entretien">Entretien</a></li>
            <li><a href=" #">Porteurs de Projet</a></li>
                <li><a href="index.php?gestion=accompagnateur">Accompagnateurs</a></li>

                <li class="dropdown">
                    <a href="#" class="dropbtn">Paramètres</a>
                    <div class="dropdown-content">
                        <a href="index.php?gestion=lieux">Lieux</a>
                        <a href="#">Page 2</a>
                        <a href="#">Page 3</a>
                    </div>
                </li>

                <li class="menu-item right">
                    <ul>
                        <li><a href="#">Plan du site</a></li>
                        <li class="dropdown pull-right">
                            <a href="#" class="dropbtn">Espace personnel</a>
                            <div class="dropdown-content expanded-dropdown-content">
                                <a href="#">Page 1</a>
                                <a href="#">Page 2</a>
                                <a href="#">Page 3</a>
                            </div>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
    </header>

    <img src="public/images/logo_coopemploi.png" style="
    height: 100px;
     width: 130px;
">

</body>

</html><?php }
}
