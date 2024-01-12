<?php
/* Smarty version 4.3.2, created on 2024-01-12 13:42:40
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\mod_front\reunion\listeReunionVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65a141d0058f51_40548448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a777e980a45f9dfe4c59cfa12873807cfb76cda' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\mod_front\\reunion\\listeReunionVue.tpl',
      1 => 1705066932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a141d0058f51_40548448 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../../public/assets/css/listereu.css">
    <meta charset="UTF-8">
    <title>Coop-Emploi</title>
</head>

<body class="background">

    <header>
        <nav>
            <ul>
                <li><a href="../../index.html">Accueil</a></li>
                <li><a href="">La coopérative</a></li>
                <li><a href="">Nos projets</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="../../int/index.php">Se connecter</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Réunions disponibles</h1>
            <?php if ($_smarty_tpl->tpl_vars['affichage']->value == 1) {?>
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
                    <td>
                        <form action="../inscription/ficheInscription.php" method="post">
                            <input class="inscription-reunion" type="submit" name="Participer" value="Participer">
                            <input type="hidden" name="reu_ide" value="<?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_ide;?>
">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="form_inscription" value="">
                        </form>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
            <?php } else { ?>
                    <h4><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
            <?php }?>

       
    </main>

    <!-- Add your footer here if you have one -->
    <!-- <footer>Footer content here</footer> -->

</body>

</html>
<?php }
}
