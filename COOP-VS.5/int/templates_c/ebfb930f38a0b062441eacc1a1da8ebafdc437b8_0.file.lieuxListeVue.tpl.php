<?php
<<<<<<< HEAD
/* Smarty version 4.3.2, created on 2023-12-14 11:16:43
=======
/* Smarty version 4.3.2, created on 2023-12-14 11:39:42
>>>>>>> origin/thomas
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\int\mod_lieux\vue\lieuxListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
<<<<<<< HEAD
  'unifunc' => 'content_657ad60bb42a40_50909296',
=======
  'unifunc' => 'content_657adb6ea75b48_14710247',
>>>>>>> origin/thomas
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebfb930f38a0b062441eacc1a1da8ebafdc437b8' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\int\\mod_lieux\\vue\\lieuxListeVue.tpl',
<<<<<<< HEAD
      1 => 1702549002,
=======
      1 => 1702545838,
>>>>>>> origin/thomas
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
<<<<<<< HEAD
    'file:../../../public/header.tpl' => 1,
    'file:../../../public/footer.tpl' => 1,
  ),
),false)) {
function content_657ad60bb42a40_50909296 (Smarty_Internal_Template $_smarty_tpl) {
=======
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_657adb6ea75b48_14710247 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/thomas
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<<<<<<< HEAD
    <link rel="stylesheet" href="../../../public/assets/css/liste.css">
=======
    <link rel="stylesheet" href="public/assets/css/liste.css">
>>>>>>> origin/thomas

    <title>liste des lieux</title>


</head>

<body>

    <div id="right-panel" class="right-panel">

        <!--Header -->
<<<<<<< HEAD
        <?php $_smarty_tpl->_subTemplateRender('file:../../../public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
=======
        <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
>>>>>>> origin/thomas
?>
        <!-- FIN : header -->

        <div class="page-title">
            <h1>Lieux</h1>
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
<<<<<<< HEAD
                         src="../../../public/images/icones/a16.png">
=======
                         src="public/images/icones/a16.png">
>>>>>>> origin/thomas
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeLieux']->value, 'unLieu');
$_smarty_tpl->tpl_vars['unLieu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unLieu']->value) {
$_smarty_tpl->tpl_vars['unLieu']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getIde();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getNom();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getVille();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getContact();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getTelephoneC();?>
</td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getIde();?>
">
                                <input type="hidden" name="gestion" value="lieux">
                                <input type="hidden" name="action" value="form_consulter">
<<<<<<< HEAD
                                <input type="image" name="btn_consulter" src="../../../public/images/icones/p16.png">
=======
                                <input type="image" name="btn_consulter" src="public/images/icones/p16.png">
>>>>>>> origin/thomas
                            </form>
                        </td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getIde();?>
">
                                <input type="hidden" name="gestion" value="lieux">
                                <input type="hidden" name="action" value="form_modifier">
<<<<<<< HEAD
                                <input type="image" name="btn_modifier" src="../../../public/images/icones/m16.png">
=======
                                <input type="image" name="btn_modifier" src="public/images/icones/m16.png">
>>>>>>> origin/thomas
                            </form>
                        </td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['unLieu']->value->getIde();?>
">
                                <input type="hidden" name="gestion" value="lieux">
                                <input type="hidden" name="action" value="form_supprimer">
<<<<<<< HEAD
                                <input type="image" name="btn_supprimer" src="../../../public/images/icones/s16.png">
=======
                                <input type="image" name="btn_supprimer" src="public/images/icones/s16.png">
>>>>>>> origin/thomas
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

<<<<<<< HEAD
<?php $_smarty_tpl->_subTemplateRender('file:../../../public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
=======
<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
>>>>>>> origin/thomas
?>


</html>





<?php }
}
