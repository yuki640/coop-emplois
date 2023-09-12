<?php
/* Smarty version 4.3.2, created on 2023-09-12 17:26:33
  from 'C:\laragon\www\coop-emplois\COOP-V3\mod_Accompagnateurs\vue\AccompagnateursListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65009f493a2942_88897522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f491b028b73d10bf41a828419bf57b3b640edb88' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-V3\\mod_Accompagnateurs\\vue\\AccompagnateursListeVue.tpl',
      1 => 1694539585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_65009f493a2942_88897522 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CoopEmplois</title>
    <meta name="description" content="<!-- PLACER LE TITRE-->">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

</head>
<body>


<!-- Left Panel -->

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Accompagnateurs</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=accompagnateurs">Accompagnateurs</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><!-- PLACER LE TITRE DE LA PAGE-->

                                <!-- PLACER LE FORMULAIRE D'AJOUT-->
                              <form class="pos-ajout" method="post" action="index.php">
                                  <input type="hidden" name="gestion" value="accompagnateurs">
                                  <input type="hidden" name="action" value="form_ajouter">
                                  <label>Ajouter un accompagnateurs :
                                  <input type="image"
                                         name="btn_ajouter"
                                         src="public/images/icones/a16.png">
                                  </label>
                              </form>

                            </strong>
                        </div>
                        <div class="card-body">

                            <div <?php if (AccompagnateursTable::getMessageSucces() != '') {?> class="alert alert-success" role="alert" <?php }?> >
                                <?php echo AccompagnateursTable::getMessageSucces();?>

                            </div>

                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <!-- PLACER LA LISTE DES CLIENTS -->
                           <thead>
                           <tr>
                               <th>Code Accompagnateurs</th>
                               <th>Nom du Accompagnateurs</th>
                               <th>Ville</th>
                               <th>Téléphone Salle</th>
                               <th class="pos-actions">Consulter</th>
                               <th class="pos-actions">Modifier</th>
                               <th class="pos-actions">Supprimer</th>
                           </tr>
                           </thead>
                           <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAccompagnateurs']->value, 'unAccompagnateurs');
$_smarty_tpl->tpl_vars['unAccompagnateurs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unAccompagnateurs']->value) {
$_smarty_tpl->tpl_vars['unAccompagnateurs']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateurs']->value->getCodeL();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateurs']->value->getNom();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateurs']->value->getVille();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['unAccompagnateurs']->value->getTelephoneS();?>
</td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="codel" value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateurs']->value->getCodeL();?>
">
                                                <input type="hidden" name="gestion" value="accompagnateurs">
                                                <input type="hidden" name="action" value="form_consulter">
                                                <input type="image" name="btn_consulter" src="public/images/icones/p16.png">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="codel" value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateurs']->value->getCodeL();?>
">
                                                <input type="hidden" name="gestion" value="accompagnateurs">
                                                <input type="hidden" name="action" value="form_modifier">
                                                <input type="image" name="btn_modifier" src="public/images/icones/m16.png">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="codel" value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateurs']->value->getCodeL();?>
">
                                                <input type="hidden" name="gestion" value="accompagnateurs">
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
               </div>


           </div><!-- .animated -->
                        </div><!-- .content -->


                    </div><!-- /#right-panel -->

                    <!-- Right Panel -->
                    <?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>


                    <?php echo '<script'; ?>
 type="text/javascript">
                        $(document).ready(function () {
                            $('#bootstrap-data-table-export').DataTable();
                        });
                    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
