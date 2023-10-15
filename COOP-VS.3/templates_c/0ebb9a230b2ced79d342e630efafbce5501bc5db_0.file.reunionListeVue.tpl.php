<?php
<<<<<<< HEAD
/* Smarty version 4.3.2, created on 2023-10-11 18:04:14
  from 'C:\laragon\www\coop-emplois\COOP-VS.3\mod_reunion\vue\reunionListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6526e39eafea67_58135794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ebb9a230b2ced79d342e630efafbce5501bc5db' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.3\\mod_reunion\\vue\\reunionListeVue.tpl',
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
function content_6526e39eafea67_58135794 (Smarty_Internal_Template $_smarty_tpl) {
=======
/* Smarty version 4.3.2, created on 2023-10-14 14:04:28
  from 'C:\laragon\www\coop-emplois\COOP-VS.3\mod_reunion\vue\reunionListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.2',
    'unifunc' => 'content_652a9feceec611_57228285',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '0ebb9a230b2ced79d342e630efafbce5501bc5db' =>
                array(
                    0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.3\\mod_reunion\\vue\\reunionListeVue.tpl',
                    1 => 1697053963,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:public/header.tpl' => 1,
            'file:public/footer.tpl' => 1,
        ),
), false)) {
function content_652a9feceec611_57228285 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/thomas
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/liste.css">

<<<<<<< HEAD
    <title>liste des lieux</title>
=======
    <title>liste des reunions</title>
>>>>>>> origin/thomas


</head>

<body>

<div id="right-panel" class="right-panel">

    <!--Header -->
    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
<<<<<<< HEAD
?>
    <!-- FIN : header -->

    <div class="page-title">
        <h1>Lieux</h1>
=======
    ?>
    <!-- FIN : header -->

    <div class="page-title">
        <h1>
            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'listerAV') { ?>
                <?php echo $_smarty_tpl->tpl_vars['titrePageAV']->value; ?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['titrePageDP']->value; ?>

            <?php } ?>
        </h1>
>>>>>>> origin/thomas
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
                           src="public/images/icones/a16.png">
                </label>
            </form>

        </strong>
    </div>
    <div class="card-body">

<<<<<<< HEAD
        <div <?php if (ReunionTable::getMessageSucces() != '') {?> class="alert alert-success" role="alert" <?php }?> >
            <?php echo ReunionTable::getMessageSucces();?>
=======
        <div <?php if (ReunionTable::getMessageSucces() != '') { ?> class="alert alert-success" role="alert" <?php } ?> >
            <?php echo ReunionTable::getMessageSucces(); ?>
>>>>>>> origin/thomas

        </div>

        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <!-- PLACER LA LISTE DES CLIENTS -->
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Intitulé</th>
                <th>Capacité</th>
                <th class="pos-actions">Consulter</th>
                <th class="pos-actions">Modifier</th>
                <th class="pos-actions">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php
<<<<<<< HEAD
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeReunion']->value, 'unReunion');
$_smarty_tpl->tpl_vars['unReunion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unReunion']->value) {
$_smarty_tpl->tpl_vars['unReunion']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuDat();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuHeu();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuPre();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuCap();?>
</td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
">
                            <input type="hidden" name="gestion" value="lieux">
=======
            $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeReunion']->value, 'unReunion');
            $_smarty_tpl->tpl_vars['unReunion']->do_else = true;
            if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unReunion']->value) {
                $_smarty_tpl->tpl_vars['unReunion']->do_else = false;
                ?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuDat(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuHeu(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuPre(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuCap(); ?>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="reu_ide"
                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde(); ?>
">
                            <input type="hidden" name="gestion" value="reunion">
>>>>>>> origin/thomas
                            <input type="hidden" name="action" value="form_consulter">
                            <input type="image" name="btn_consulter" src="public/images/icones/p16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
<<<<<<< HEAD
                            <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
">
                            <input type="hidden" name="gestion" value="lieux">
=======
                            <input type="hidden" name="reu_ide"
                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde(); ?>
">
                            <input type="hidden" name="gestion" value="reunion">
>>>>>>> origin/thomas
                            <input type="hidden" name="action" value="form_modifier">
                            <input type="image" name="btn_modifier" src="public/images/icones/m16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
<<<<<<< HEAD
                            <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde();?>
">
                            <input type="hidden" name="gestion" value="lieux">
=======
                            <input type="hidden" name="reu_ide"
                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde(); ?>
">
                            <input type="hidden" name="gestion" value="reunion">
>>>>>>> origin/thomas
                            <input type="hidden" name="action" value="form_supprimer">
                            <input type="image" name="btn_supprimer" src="public/images/icones/s16.png">
                        </form>
                    </td>
                </tr>
<<<<<<< HEAD
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
=======
                <?php
            }
            $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
>>>>>>> origin/thomas

            </tbody>
        </table>
    </div>
</div>


</body>

<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</html>


<<<<<<< HEAD



=======
>>>>>>> origin/thomas
<?php }
}
