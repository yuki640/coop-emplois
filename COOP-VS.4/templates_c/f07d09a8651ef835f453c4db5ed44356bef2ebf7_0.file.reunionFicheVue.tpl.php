<?php
/* Smarty version 4.3.2, created on 2023-10-14 14:04:33
  from 'C:\laragon\www\coop-emplois\COOP-VS.3\mod_reunion\vue\reunionFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.2',
    'unifunc' => 'content_652a9ff10eb9a9_09060221',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'f07d09a8651ef835f453c4db5ed44356bef2ebf7' =>
                array(
                    0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.3\\mod_reunion\\vue\\reunionFicheVue.tpl',
                    1 => 1697289530,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:public/header.tpl' => 1,
            'file:public/footer.tpl' => 1,
        ),
), false)) {
    function content_652a9ff10eb9a9_09060221(Smarty_Internal_Template $_smarty_tpl)
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
                <h1>L'emploi, c'est maintenant !</h1>
            </div>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-6">
                            <div <?php if (ReunionTable::getMessageErreur() != '') { ?> class="alert alert-danger" role="alert" <?php } ?> >
                                <?php echo ReunionTable::getMessageErreur(); ?>

                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value; ?>
                                    </strong></div>
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="gestion" value="reunion">
                                    <input type="hidden" name="action"
                                           value="<?php echo $_smarty_tpl->tpl_vars['action']->value; ?>
">
                                    <input type="hidden" name="reu_dcr"
                                           value="<?php echo date('d/m/Y H:i:s', time()); ?>
">
                                    <input type="hidden" name="reu_dmo"
                                           value="<?php echo date('d/m/Y H:i:s', time()); ?>
">
                                    <div class="card-body card-block">
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') { ?>
                                            <div class="form-group">
                                                <label for="text" class="form-control">
                                                    Code Réunion :
                                                </label>
                                                <input type="text" name="reu_ide" class="form-control"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuIde(); ?>
" readonly>
                                            </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <label for="text" class="form-control">
                                                Date <sup>(*)</sup>:
                                            </label>
                                            <input type="date" name="reu_dat" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuDat(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label for "text" class="form-control">
                                            Heure de début :
                                            </label>
                                            <input type="time" name="reu_heu" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuHeu(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label for="text" class="form-control">
                                                Durée approximative :
                                            </label>
                                            <input type="time" name="reu_dur" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuDur(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label for="reu_lie" class="form-control">Nom du lieu :</label>
                                            <select name="reu_lie"
                                                    class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                                <?php
                                                $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeLieux']->value, 'lieu');
                                                $_smarty_tpl->tpl_vars['lieu']->do_else = true;
                                                if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lieu']->value) {
                                                    $_smarty_tpl->tpl_vars['lieu']->do_else = false;
                                                    ?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide']; ?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['lieu']->value['lie_ide'] == $_smarty_tpl->tpl_vars['unReunion']->value->getReuLie()) { ?>selected<?php } ?>>
                                                        <?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_nom']; ?>

                                                    </option>
                                                    <?php
                                                }
                                                $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text" class="form-control">
                                                Capacité :
                                            </label>
                                            <input type="number" name="reu_cap" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuCap(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label for="text" class="form-control">
                                                Intitulé de la présentation <sup>*</sup>:
                                            </label>
                                            <input type="text" name="reu_pre" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unReunion']->value->getReuPre(); ?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <label for="reu_acc" class="form-control">Nom de l'accompagnateur :</label>
                                            <select name="reu_acc"
                                                    class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                                <?php
                                                $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAccompagnateurs']->value, 'accompagnateur');
                                                $_smarty_tpl->tpl_vars['accompagnateur']->do_else = true;
                                                if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accompagnateur']->value) {
                                                    $_smarty_tpl->tpl_vars['accompagnateur']->do_else = false;
                                                    ?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['accompagnateur']->value['acc_ide']; ?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['accompagnateur']->value['acc_ide'] == $_smarty_tpl->tpl_vars['unReunion']->value->getReuAcc()) { ?>selected<?php } ?>>
                                                        <?php echo $_smarty_tpl->tpl_vars['accompagnateur']->value['acc_nom']; ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['accompagnateur']->value['acc_pre']; ?>

                                                    </option>
                                                    <?php
                                                }
                                                $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="text" class="form-control">
                                                Visible sur les sites proposant l'inscription aux réunions ?
                                            </label>
                                            <!-- Champ caché pour la valeur "faux" (false) par défaut -->
                                            <input type="hidden" name="reu_pub" value="0">
                                            <!-- Champ de type "checkbox" pour permettre à l'utilisateur de basculer -->
                                            <input type="checkbox" name="reu_pub" class="form-control"
                                                   value="1"
                                                   <?php if ($_smarty_tpl->tpl_vars['unReunion']->value->getReuPub()) { ?>checked<?php } ?> <?php echo $_smarty_tpl->tpl_vars['readonly']->value; ?>
                                            >
                                        </div>

                                        <div class="card-body card-block">
                                            <div class="col-md-6">
                                                <input type="button" class="btn btn-retour" value="Retour"
                                                       onclick="location.href='index.php?gestion=reunion&action=listerAV'">
                                            </div>
                                            <div class="col-md-6">
                                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') { ?>
                                                    <input type="submit" class="btn btn-submit" name="btn-valider"
                                                           value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value); ?>
">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
        ?>
        </body>
        </html>
    <?php }
}
