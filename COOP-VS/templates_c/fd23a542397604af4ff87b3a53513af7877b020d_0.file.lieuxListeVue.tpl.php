<?php
<<<<<<< HEAD
/* Smarty version 4.3.2, created on 2023-09-18 17:52:32
=======
/* Smarty version 4.3.2, created on 2023-09-17 15:44:39
>>>>>>> origin/thomas
  from 'C:\laragon\www\coop-emplois\COOP-VS\mod_lieux\vue\lieuxListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
<<<<<<< HEAD
  'unifunc' => 'content_65088e60851771_80152503',
=======
  'unifunc' => 'content_65071ee75ccb59_93258327',
>>>>>>> origin/thomas
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd23a542397604af4ff87b3a53513af7877b020d' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS\\mod_lieux\\vue\\lieuxListeVue.tpl',
<<<<<<< HEAD
      1 => 1694960724,
=======
      1 => 1694965030,
>>>>>>> origin/thomas
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65088e60851771_80152503 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65071ee75ccb59_93258327 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/thomas
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/liste.css">

    <title>liste de lieux</title>


</head>

<body>

    <div id="right-panel" class="right-panel">

        <!--Header -->
        <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- FIN : header -->

        <div class="page-title">
            <h1>L'emplois, c'est maintenant </h1>
        </div>
        <div class="card-header">
            <strong class="card-title">
                <!-- PLACER LE TITRE DE LA PAGE-->
                <!-- PLACER LE FORMULAIRE D'AJOUT-->
                  <!-- PLACER LE FORMULAIRE D'AJOUT-->
                  <form class="pos-ajout" method="post" action="index.php">
                  <input type="hidden" name="gestion" value="lieux">
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

            <div <?php if (LieuxTable::getMessageSucces() != '') {?> class="alert alert-success" role="alert" <?php }?> >
                <?php echo LieuxTable::getMessageSucces();?>

            </div>

            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <!-- PLACER LA LISTE DES CLIENTS -->
           <thead>
           <tr>
               <th>ID</th>
               <th>Nom</th>
               <th>Ville</th>
               <th>Contact</th>
               <th>Téléphone</th>
               <th class="pos-actions">Consulter</th>
               <th class="pos-actions">Modifier</th>
               <th class="pos-actions">Supprimer</th>
           </tr>
           </thead>
           <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeLieux']->value, 'unLieux');
$_smarty_tpl->tpl_vars['unLieux']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unLieux']->value) {
$_smarty_tpl->tpl_vars['unLieux']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getCodeL();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getNom();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getVille();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getContact();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getTelephoneC();?>
</td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="codel" value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getCodeL();?>
">
                                <input type="hidden" name="gestion" value="lieux">
                                <input type="hidden" name="action" value="form_consulter">
                                <input type="image" name="btn_consulter" src="public/images/icones/p16.png">
                            </form>
                        </td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="codel" value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getCodeL();?>
">
                                <input type="hidden" name="gestion" value="lieux">
                                <input type="hidden" name="action" value="form_modifier">
                                <input type="image" name="btn_modifier" src="public/images/icones/m16.png">
                            </form>
                        </td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="codel" value="<?php echo $_smarty_tpl->tpl_vars['unLieux']->value->getCodeL();?>
">
                                <input type="hidden" name="gestion" value="lieux">
                                <input type="hidden" name="action" value="form_supprimer">
                                <input type="image" name="btn_supprimer" src="public/images/icones/s16.png">
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

<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</html>





<?php }
}
