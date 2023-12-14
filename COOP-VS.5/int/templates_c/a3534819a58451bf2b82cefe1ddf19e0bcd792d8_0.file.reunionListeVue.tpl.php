<?php
/* Smarty version 4.3.2, created on 2023-12-14 11:14:44
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\int\mod_reunion\vue\reunionListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_657ad594e7c8e5_78902410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3534819a58451bf2b82cefe1ddf19e0bcd792d8' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\int\\mod_reunion\\vue\\reunionListeVue.tpl',
      1 => 1702548882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../public/header.tpl' => 1,
    'file:../../../public/footer.tpl' => 1,
  ),
),false)) {
function content_657ad594e7c8e5_78902410 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/assets/css/liste.css">

    <title>liste des reunions</title>


</head>

<body>

<div id="right-panel" class="right-panel">

    <!--Header -->
    <?php $_smarty_tpl->_subTemplateRender('file:../../../public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- FIN : header -->

    <div class="page-title">
        <h1>
            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'listerAV') {?>
                <?php echo $_smarty_tpl->tpl_vars['titrePageAV']->value;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['titrePageDP']->value;?>

            <?php }?>
        </h1>
    </div>
    <div class="card-header">
        <strong class="card-title">
            <!-- PLACER LE TITRE DE LA PAGE-->
            <!-- PLACER LE FORMULAIRE D'AJOUT-->
            <!-- PLACER LE FORMULAIRE D'AJOUT-->
            <form class="pos-ajout" method="post" action="index.php">
                <input type="hidden" name="gestion" value="reunion">
                <input type="hidden" name="action" value="form_ajouter">
                <label>Ajouter un lieu :
                    <input type="image"
                           name="btn_ajouter"
                           src="../../../public/images/icones/a16.png">
                </label>
            </form>

        </strong>
    </div>
    <div class="card-body">

        <div <?php if (ReunionTable::getMessageSucces() != '') {?> class="alert alert-success" role="alert" <?php }?> >
            <?php echo ReunionTable::getMessageSucces();?>

        </div>

        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <!-- PLACER LA LISTE DES CLIENTS -->
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Nom du lieux</th>
                <th>Nom de l'accompagnateur</th>
                <th>Publié O/N</th>
                <th>Nombre d'inscrits</th>
                <th class="pos-actions">Consulter</th>
                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'listerDP') {?>
                <th class="pos-actions">Modifier</th>
                <th class="pos-actions">Supprimer</th>
                <?php }?>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeReunion']->value, 'unReunion');
$_smarty_tpl->tpl_vars['unReunion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unReunion']->value) {
$_smarty_tpl->tpl_vars['unReunion']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuDatFormatted();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuLieNom();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuAccNom();?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['unReunion']->value->getReuPub() == 1) {?>
                            OUI
                        <?php } else { ?>
                            NON
                        <?php }?>
                    </td>
                    <td></td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="reu_ide" value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
">
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="form_consulter">
                            <input type="image" name="btn_consulter" src="../../../public/images/icones/p16.png">
                        </form>
                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'listerDP') {?>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="reu_ide" value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
">
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="form_modifier">
                            <input type="image" name="btn_modifier" src="../../../public/images/icones/m16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="reu_ide" value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
">
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="form_supprimer">
                            <input type="image" name="btn_supprimer" src="../../../public/images/icones/s16.png">
                        </form>
                    </td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
    </div>
</div>


</body>

<?php $_smarty_tpl->_subTemplateRender('file:../../../public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</html>





<?php }
}
