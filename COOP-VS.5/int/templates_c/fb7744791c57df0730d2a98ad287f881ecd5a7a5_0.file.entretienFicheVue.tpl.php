<?php
/* Smarty version 4.3.2, created on 2023-12-14 12:24:00
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\int\mod_entretien\vue\entretienFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_657ae5d0654177_56268342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7744791c57df0730d2a98ad287f881ecd5a7a5' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\int\\mod_entretien\\vue\\entretienFicheVue.tpl',
      1 => 1702553037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../public/header.tpl' => 1,
    'file:../../public/footer.tpl' => 1,
  ),
),false)) {
function content_657ae5d0654177_56268342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\int\\include\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
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

        <?php $_smarty_tpl->_subTemplateRender('file:../../public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- FIN : header -->


        <div class="page-title">
            <h1>L'emploi, c'est maintenant !</h1>
        </div>




        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">


                    <div class="col-md-6">

                        <div <?php if (EntretienTable::getMessageErreur() != '') {?> class="alert alert-danger"
                            role="alert" <?php }?>>
                            <?php echo EntretienTable::getMessageErreur();?>

                        </div>

                        <div class="card">
                            <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>
                            <form action="index.php" method="POST">

                                <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                                <input type="hidden" name="gestion" value="entretien">

                                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">



                                <input type="hidden" name="mailbase" value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getMail();?>
">

                                <div class="card-body card-block">

                                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Code accompagnateurs :
                                            </label>
                                            <input type="text" name="acc_ide" class="form-control"
                                                value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getIde();?>
" readonly>
                                        </div>
                                    <?php }?>

                                    <div class="form-group">
                                        <label for="acc_pre" class="form-control">
                                            Prénom <sup>(*)</sup>:
                                        </label>
                                            <input type="text" id="acc_pre" name="acc_pre" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getPrenom();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 required>
                                      
                                    </div>

                                    <div class="form-group">
                                        <label for="acc_nom" class="form-control">
                                            Nom <sup>(*)</sup>:
                                        </label>                                        
                                            <input type="text" id="acc_nom" name="acc_nom" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getNom();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 required>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="acc_tel" class="form-control">
                                            Téléphone <sup>(*)</sup>:
                                        </label>
                                        <input type="text" id="acc_tel" name="acc_tel" class="form-control"
                                               value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getTelephone();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                    </div>

                                    <div class="form-group">
                                        <label for="acc_mail" class="form-control">
                                            Email <sup>(*)</sup>:
                                        </label>
                                        <input type="text" id="acc_mail" name="acc_mail" class="form-control"
                                               value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getMail();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                    </div>

                                    <div class="form-group">
                                        <label for="acc_fon" class="form-control">
                                            Specialisation :
                                        </label>
                                        <input type="text" id="acc_fon" name="acc_fon" class="form-control"
                                               value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getFonction();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                    </div>

                                    <div class="form-group">
                                        <label for="uti_log" class="form-control">
                                            Login <sup>(*)</sup>:
                                        </label>
                                        <input type="text" id="uti_log" name="uti_log" class="form-control"
                                        value="<?php echo $_smarty_tpl->tpl_vars['unEntretien']->value->getlog();?>
" readonly>
                                    </div>



                                    <div class="card-body card-block">

                                        <div class="col-md-6">

                                            <input type="button" class="btn btn-submit" value="Retour"
                                                onclick="location.href='index.php?gestion=entretien
                                        </div>

                                        <div class="col-md-6">
                                            <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                                                <input type="submit" class="btn btn-submit" name="btn-valider"
                                                    value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                                            <?php }?>

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
    <?php echo '<script'; ?>
>
        function genererLogin() {
            // Récupérez les valeurs des champs "Nom" et "Prénom" avec la première lettre en majuscule
          

                var nom = document.querySelector('input[name="acc_nom"]').value.charAt(0).toUpperCase();
            var prenom = document.querySelector('input[name="acc_pre"]').value.charAt(0).toUpperCase();

            // Créez une date au format YYYYMMJJ-HHMM
            var date = new Date();
            var dateFormatted = date.getFullYear() +
                (date.getMonth() + 1).toString().padStart(2, '0') +
                date.getDate().toString().padStart(2, '0') + '-' +
                date.getHours().toString().padStart(2, '0') +
                date.getMinutes().toString().padStart(2, '0');

            // Créez le login en utilisant la première lettre du prénom, la première lettre du nom, et la date
            var login = prenom.charAt(0) + nom.charAt(0) + dateFormatted;

            // Mettez à jour le champ "Login" avec la valeur générée
            document.querySelector('input[name="uti_log"]').value = login;
        }

        // Attachez l'événement input au champ "Prénom"
        document.getElementById('acc_pre').addEventListener('input', genererLogin);
        document.getElementById('acc_nom').addEventListener('input', genererLogin);
    <?php echo '</script'; ?>
>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:../../public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
