<?php
/* Smarty version 4.3.2, created on 2023-10-11 16:29:40
  from 'C:\laragon\www\coop-emplois\COOP-VS.3\mod_lieux\vue\lieuxFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.2',
    'unifunc' => 'content_6526cd7438bbb5_49515732',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '65e8710cdc976956a5e2e08426ec1078a28df858' =>
                array(
                    0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.3\\mod_lieux\\vue\\lieuxFicheVue.tpl',
                    1 => 1697041772,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:public/header.tpl' => 1,
            'file:public/footer.tpl' => 1,
        ),
), false)) {
    function content_6526cd7438bbb5_49515732(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_checkPlugins(array(0 => array('file' => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.3\\include\\libs\\plugins\\modifier.capitalize.php', 'function' => 'smarty_modifier_capitalize',),));
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

                            <div <?php if (LieuxTable::getMessageErreur() != '') { ?> class="alert alert-danger" role="alert" <?php } ?> >
                                <?php echo LieuxTable::getMessageErreur(); ?>

                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value; ?>
                                    </strong></div>
                                <form action="index.php" method="POST">

                                    <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                                    <input type="hidden" name="gestion" value="lieux">

                                    <input type="hidden" name="action"
                                           value="<?php echo $_smarty_tpl->tpl_vars['action']->value; ?>
">

                                    <input type="hidden" name="lie_dcr"
                                           value="<?php echo date("d/m/Y H:i:s", time()); ?>
">

                                    <input type="hidden" name="lie_dmo"
                                           value="<?php echo date("d/m/Y H:i:s", time()); ?>
">

                                    <div class="card-body card-block">

                                        <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') { ?>
                                            <div class="form-group">
                                                <label for="text" class=" form-control">
                                                    Code lieux :
                                                </label>
                                                <input type="text" name="lie_ide" class="form-control"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getIde(); ?>
"
                                                       readonly>
                                            </div>
                                        <?php } ?>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Nom <sup>(*)</sup>:
                                            </label>
                                            <input type="text" name="lie_nom" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getNom(); ?>
"
                                                <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>

                                                   required
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Service, N°de bureau ou étage :
                                            </label>
                                            <input type="text" name="lie_ad1" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getAdresse1(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Résidence, Immeuble, Bâtiment, ZI :
                                            </label>
                                            <input type="text" name="lie_ad2" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getAdresse2(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Numéro voie , type, nom de la voie :
                                            </label>
                                            <input type="text" name="lie_ad3" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getAdresse3(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Mention de distribution, lieu-dit :
                                            </label>
                                            <input type="text" name="lie_ad4" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getAdresse4(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Code postal <sup>*</sup>:
                                            </label>
                                            <input type="text" name="lie_cpo" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getCodepostal(); ?>
"
                                                <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>

                                                   required
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Localité de destination cedex <sup>(*)</sup>:
                                            </label>
                                            <input type="text" name="lie_ville" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getVille(); ?>
"
                                                <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>

                                                   required
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Telephone de l'établissement :
                                            </label>
                                            <input type="text" name="lie_tel" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getTelephoneS(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Nom du contact : <sup>(*)</sup>
                                            </label>
                                            <input type="text" name="lie_con" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getContact(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Téléphone du contact <sup>(*)</sup>
                                            </label>
                                            <input type="text" name="lie_tco" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getTelephoneC(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>

                                                   required
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Capacité d'accueil de la salle : <sup>(*)</sup>
                                            </label>
                                            <input type="text" name="lie_cap" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getCapacite(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>

                                                   required
                                            >
                                        </div>

                                        <div class="card-body card-block">

                                            <div class="col-md-6">

                                                <input type="button" class="btn btn-retour" value="Retour"
                                                       onclick="location.href='index.php?gestion=lieux'">

                                            </div>

                                            <div class="col-md-6">
                                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') { ?>
                                                    <input type="submit"
                                                           class="btn btn-submit"
                                                           name="btn-valider"
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
