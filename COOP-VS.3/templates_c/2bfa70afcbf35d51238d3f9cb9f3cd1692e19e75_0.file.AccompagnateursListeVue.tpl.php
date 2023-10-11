<?php
/* Smarty version 4.3.2, created on 2023-09-18 21:08:52
  from 'C:\laragon\www\coop-emplois\COOP-VS\mod_Accompagnateurs\vue\AccompagnateursListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.2',
    'unifunc' => 'content_6508bc641b01d9_23505225',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '2bfa70afcbf35d51238d3f9cb9f3cd1692e19e75' =>
                array(
                    0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS\\mod_Accompagnateurs\\vue\\AccompagnateursListeVue.tpl',
                    1 => 1695071329,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:public/header.tpl' => 1,
            'file:public/footer.tpl' => 1,
        ),
), false)) {
function content_6508bc641b01d9_23505225 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/liste.css">

    <title>CoopEmploi</title>


</head>

<body>

<div id="right-panel" class="right-panel">

    <!--Header -->
    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
    ?>
    <!-- FIN : header -->

    <div class="page-title">
        <h1>Accompagnateurs</h1>
    </div>
    <div class="card-header">
        <strong class="card-title">
            <!-- PLACER LE TITRE DE LA PAGE-->
            <!-- PLACER LE FORMULAIRE D'AJOUT-->
            <form class="pos-ajout" method="post" action="index.php">
                <input type="hidden" name="gestion" value="accompagnateur">
                <input type="hidden" name="action" value="form_ajouter">
                <label>Ajouter un accompagnateur :
                    <input type="image" name="btn_ajouter" src="public/images/icones/a16.png">
                </label>
            </form>
        </strong>
    </div>
    <div class="card-body">
        <div <?php if (AccompagnateursTable::getMessageSucces() != '') { ?> class="alert alert-success" role="alert" <?php } ?>>
            <?php echo AccompagnateursTable::getMessageSucces(); ?>

        </div>
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <!-- PLACER LA LISTE DES CLIENTS -->
            <thead>
            <tr>
                <th>Code Accompagnateur</th>
                <th>Nom de L'Accompagnateur</th>
                <th>Prenom</th>
                <th>Téléphone</th>
                <th>specialisation</th>
                <th class="pos-actions">Consulter</th>
                <th class="pos-actions">Modifier</th>
                <th class="pos-actions">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAccompagnateurs']->value, 'unAccompagnateur');
            $_smarty_tpl->tpl_vars['unAccompagnateur']->do_else = true;
            if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unAccompagnateur']->value) {
                $_smarty_tpl->tpl_vars['unAccompagnateur']->do_else = false;
                ?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getCodeA(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getNom(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getPrenom(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getTelephone(); ?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getSpecialisation(); ?>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="codea"
                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getCodeA(); ?>
">
                            <input type="hidden" name="gestion" value="accompagnateur">
                            <input type="hidden" name="action" value="form_consulter">
                            <input type="image" name="btn_consulter" src="public/images/icones/p16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="codea"
                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getCodeA(); ?>
">
                            <input type="hidden" name="gestion" value="accompagnateur">
                            <input type="hidden" name="action" value="form_modifier">
                            <input type="image" name="btn_modifier" src="public/images/icones/m16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="codea"
                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getCodeA(); ?>
">
                            <input type="hidden" name="gestion" value="accompagnateur">
                            <input type="hidden" name="action" value="form_supprimer">
                            <input type="image" name="btn_supprimer" src="public/images/icones/s16.png">
                        </form>
                    </td>
                </tr>
                <?php
            }
            $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
            </tbody>
        </table>
    </div>
</div>


</body>

<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</html><?php }
}
