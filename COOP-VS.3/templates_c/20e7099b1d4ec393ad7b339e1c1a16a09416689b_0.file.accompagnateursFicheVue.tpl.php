<?php
/* Smarty version 4.3.2, created on 2023-09-19 17:32:33
  from 'C:\laragon\www\coop-emplois\COOP-VS.2\mod_accompagnateurs\vue\accompagnateursFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.2',
    'unifunc' => 'content_6509db31992844_30611299',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '20e7099b1d4ec393ad7b339e1c1a16a09416689b' =>
                array(
                    0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.2\\mod_accompagnateurs\\vue\\accompagnateursFicheVue.tpl',
                    1 => 1695144753,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:public/header.tpl' => 1,
            'file:public/footer.tpl' => 1,
        ),
), false)) {
    function content_6509db31992844_30611299(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_checkPlugins(array(0 => array('file' => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.2\\include\\libs\\plugins\\modifier.capitalize.php', 'function' => 'smarty_modifier_capitalize',),));
        ?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="public/assets/css/fiche.css">

            <title>Mon Site Web</title>


        </head>

        <body>


        <div id="right-panel" class="right-panel">

            <!--Header -->

            <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
            ?>

            <!-- FIN : header -->


            <div class="page-title">
                <h1>L'emplois, c'est maintenant !</h1>
            </div>


            <div class="content mt-3">
                <div class="animated fadeIn">

                    <div class="row">


                        <div class="col-md-6">

                            <div <?php if (AccompagnateursTable::getMessageErreur() != '') { ?> class="alert alert-danger"
                                role="alert" <?php } ?>>
                                <?php echo AccompagnateursTable::getMessageErreur(); ?>

                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value; ?>
                                    </strong></div>
                                <form action="index.php" method="POST">

                                    <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                                    <input type="hidden" name="gestion" value="accompagnateur">

                                    <input type="hidden" name="action"
                                           value="<?php echo $_smarty_tpl->tpl_vars['action']->value; ?>
">


                                    <input type="hidden" name="mailbase"
                                           value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getMail(); ?>
">

                                    <div class="card-body card-block">

                                        <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') { ?>
                                            <div class="form-group">
                                                <label for="text" class=" form-control">
                                                    Code accompagnateurs :
                                                </label>
                                                <input type="text" name="acc_ide" class="form-control"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getIde(); ?>
" readonly>
                                            </div>
                                        <?php } ?>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Nom <sup>(*)</sup>:
                                            </label>
                                            <input type="text" name="acc_nom" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getNom(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Prénom <sup>(*)</sup>:
                                            </label>
                                            <input type="text" name="acc_pre" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getPrenom(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Téléphone <sup>(*)</sup>:
                                            </label>
                                            <input type="text" name="acc_tel" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getTelephone(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Email <sup>(*)</sup>:
                                            </label>
                                            <input type="text" name="acc_mail" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getMail(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Specialisation :
                                            </label>
                                            <input type="text" name="acc_fon" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getFonction(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="card-body card-block">

                                            <div class="col-md-6">

                                                <input type="button" class="btn btn-submit" value="Retour"
                                                       onclick="location.href='index.php?gestion=accompagnateur'">

                                            </div>

                                            <div class="col-md-6">
                                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') { ?>
                                                    <input type="submit" class="btn btn-submit" name="btn-valider"
                                                           value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value); ?>
">
                                                <?php } ?>

                                            </div>
                                            <br>
                                        </div>


                                </form>
                            </div>
                        </div>

                    </div><!-- .animated -->
                </div><!-- .content -->


            </div>

        </div><!-- /#right-panel -->

        </body>
        <?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
        ?>

        </html><?php }
}
