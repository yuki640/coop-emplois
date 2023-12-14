<?php
/* Smarty version 4.3.2, created on 2023-12-14 14:51:44
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\mod_front\reunion\listeReunionVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_657b1680588fb6_94806673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a777e980a45f9dfe4c59cfa12873807cfb76cda' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\mod_front\\reunion\\listeReunionVue.tpl',
      1 => 1702565502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657b1680588fb6_94806673 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../../public/assets/css/front.css">
    <link rel="stylesheet" href="../../public/assets/css/liste.css">
    <meta charset="UTF-8">
    <title>Coop-Emploi</title>
</head>
<body>
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

<!-- recuperation des données réunion dans la base de donnée -->

<div id="right-panel" class="right-panel">

    <!--Header -->
    <!-- FIN : header -->

    <div class="page-title">
        <h1>Reunions</h1>
    </div>
                                                        
            <div class="card-body">

        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <!-- PLACER LA LISTE DES CLIENTS -->
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Présentation</th>
                <th class="pos-actions">Consulter</th>
                <th class="pos-actions">Modifier</th>
                <th class="pos-actions">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeReunions']->value, 'uneReunion');
$_smarty_tpl->tpl_vars['uneReunion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['uneReunion']->value) {
$_smarty_tpl->tpl_vars['uneReunion']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_ide;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_dat;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_heu;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->lie_ville;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['uneReunion']->value->reu_pre;?>
</td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="lie_ide" value="<?php echo '';?>
">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="action" value="form_consulter">
                            <input type="image" name="btn_consulter" src="../../public/images/icones/p16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="lie_ide" value="<?php echo '';?>
">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="action" value="form_modifier">
                            <input type="image" name="btn_modifier" src="../../public/images/icones/m16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="lie_ide" value="<?php echo '';?>
">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="action" value="form_supprimer">
                            <input type="image" name="btn_supprimer" src="../../public/images/icones/s16.png">
                        </form>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
    </div>
</div>


</body>

</html><?php }
}
