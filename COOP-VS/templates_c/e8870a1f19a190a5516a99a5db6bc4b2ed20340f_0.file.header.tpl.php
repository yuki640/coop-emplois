<?php
/* Smarty version 4.3.2, created on 2023-09-17 12:50:18
  from 'C:\laragon\www\coop-emplois-v2\COOP-V1\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6506f60a3505a4_01047291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8870a1f19a190a5516a99a5db6bc4b2ed20340f' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois-v2\\COOP-V1\\public\\header.tpl',
      1 => 1694952004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6506f60a3505a4_01047291 (Smarty_Internal_Template $_smarty_tpl) {
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
