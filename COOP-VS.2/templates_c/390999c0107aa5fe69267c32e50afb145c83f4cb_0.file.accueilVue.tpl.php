<?php
/* Smarty version 4.3.2, created on 2023-09-17 14:02:52
  from 'C:\laragon\www\coop-emplois-v2\COOP-VS\mod_accueil\vue\accueilVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6507070c13b777_82123969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '390999c0107aa5fe69267c32e50afb145c83f4cb' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois-v2\\COOP-VS\\mod_accueil\\vue\\accueilVue.tpl',
      1 => 1694959370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_6507070c13b777_82123969 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/style.css">

    <title>Coop-emplois</title>


</head>
<body>



<div id="right-panel" class="right-panel">

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    
    <main>
    
        <h1>Contenu principal</h1>
        <p>Bienvenue sur mon site web. Ceci est la page d'accueil.</p>
    </main>

    
</div><!-- /#right-panel -->


</body>
<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html>

<?php }
}
