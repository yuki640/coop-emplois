<?php
/* Smarty version 4.3.2, created on 2023-12-15 10:59:24
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\mod_front\reunion\listeReunionVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_657c318c390781_12432893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a777e980a45f9dfe4c59cfa12873807cfb76cda' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\mod_front\\reunion\\listeReunionVue.tpl',
      1 => 1702637963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657c318c390781_12432893 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../../public/assets/css/listreu.css">
    <meta charset="UTF-8">
    <title>Coop-Emploi</title>
</head>

<body class="background">

    <header>
        <nav>
            <ul>
                <li><a href="../index.html">Accueil</a></li>
                <li><a href="">La coopérative</a></li>
                <li><a href="">Nos projets</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="../../int/index.php">Se connecter</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Réunions disponibles</h1>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Informations</th>
                    <th>Participer</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeReunions']->value, 'uneReunion');
$_smarty_tpl->tpl_vars['uneReunion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['uneReunion']->value) {
$_smarty_tpl->tpl_vars['uneReunion']->do_else = false;
?>
                <tr class="tab">
                    <td><?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_dat;?>
</td>
                    <td>Salle <?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->lie_nom;?>
 - <?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->lie_cpo;?>
 <?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->lie_ville;?>
</td>
                    <td>La réunion débutera à <?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_heu;?>
 pour une durée de <?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_dur;?>
H environ</td>
                    <td class="inscription-reunion"><a href="index.php?gestion=participer&id=<?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_ide;?>
">Participer</a></td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

       
    </main>

    <!-- Add your footer here if you have one -->
    <!-- <footer>Footer content here</footer> -->

</body>

</html>
<?php }
}
