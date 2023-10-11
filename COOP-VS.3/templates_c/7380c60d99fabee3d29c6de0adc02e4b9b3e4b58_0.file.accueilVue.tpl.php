<?php
/* Smarty version 4.3.2, created on 2023-10-11 16:51:53
  from 'C:\laragon\www\coop-emplois\COOP-VS.3\mod_accueil\vue\accueilVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6526d2a93df1f4_99911273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7380c60d99fabee3d29c6de0adc02e4b9b3e4b58' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.3\\mod_accueil\\vue\\accueilVue.tpl',
      1 => 1697043076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_6526d2a93df1f4_99911273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/header.css">
    <link rel="stylesheet" href="public/assets/css/footer.css">

    <title>Coop-emplois</title>


</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="right-panel" class="right-panel">


    <main>
    
        <h1>Contenu principal</h1>
        <p>Bienvenue sur mon site web. Ceci est la page d'accueil.</p>
    </main>

    
</div><!-- /#right-panel -->

<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html>

<?php }
}
