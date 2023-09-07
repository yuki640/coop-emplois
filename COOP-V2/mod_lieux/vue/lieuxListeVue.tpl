<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gourmandise SARL</title>
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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    {include file='public/header.tpl'}

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>L'emplois, c'est maintenant </h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=lieux">Lieux</a></li>
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
                                  <input type="hidden" name="gestion" value="client">
                                  <input type="hidden" name="action" value="form_ajouter">
                                  <label>Ajouter un client :
                                  <input type="image"
                                         name="btn_ajouter"
                                         src="public/images/icones/a16.png">
                                  </label>
                              </form>

                            </strong>
                        </div>
                        <div class="card-body">

                            <div {if ClientTable::getMessageSucces () neq ''} class="alert alert-success" role="alert" {/if} >
                                {ClientTable::getMessageSucces ()}
                            </div>

                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <!-- PLACER LA LISTE DES CLIENTS -->
                           <thead>
                           <tr>
                               <th>Code Client</th>
                               <th>Nom et prénom</th>
                               <th>Ville</th>
                               <th>Téléphone</th>
                               <th class="pos-actions">Consulter</th>
                               <th class="pos-actions">Modifier</th>
                               <th class="pos-actions">Supprimer</th>
                           </tr>
                           </thead>
                           <tbody>
                                {foreach from=$listeClients item=unClient}
                                    <tr>
                                        <td>{$unClient->getCodec()}</td>
                                        <td>{$unClient->getNom()}</td>
                                        <td>{$unClient->getVille()}</td>
                                        <td>{$unClient->getTelephone()}</td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="codec" value="{$unClient->getCodec()}">
                                                <input type="hidden" name="gestion" value="client">
                                                <input type="hidden" name="action" value="form_consulter">
                                                <input type="image" name="btn_consulter" src="public/images/icones/p16.png">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="codec" value="{$unClient->getCodec()}">
                                                <input type="hidden" name="gestion" value="client">
                                                <input type="hidden" name="action" value="form_modifier">
                                                <input type="image" name="btn_modifier" src="public/images/icones/m16.png">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="codec" value="{$unClient->getCodec()}">
                                                <input type="hidden" name="gestion" value="client">
                                                <input type="hidden" name="action" value="form_supprimer">
                                                <input type="image" name="btn_supprimer" src="public/images/icones/s16.png">
                                            </form>
                                        </td>
                                    </tr>

                                    {/foreach}

                                </tbody>
                            </table>
                        </div>
                   </div>
               </div>


           </div><!-- .animated -->
                        </div><!-- .content -->


                    </div><!-- /#right-panel -->

                    <!-- Right Panel -->
                    <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
                    <script src="public/assets/js/plugins.js"></script>
                    <script src="public/assets/js/main.js"></script>


                    <script src="public/assets/js/lib/data-table/datatables.min.js"></script>
                    <script src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
                    <script src="public/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
                    <script src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
                    <script src="public/assets/js/lib/data-table/jszip.min.js"></script>
                    <script src="public/assets/js/lib/data-table/pdfmake.min.js"></script>
                    <script src="public/assets/js/lib/data-table/vfs_fonts.js"></script>
                    <script src="public/assets/js/lib/data-table/buttons.html5.min.js"></script>
                    <script src="public/assets/js/lib/data-table/buttons.print.min.js"></script>
                    <script src="public/assets/js/lib/data-table/buttons.colVis.min.js"></script>
                    <script src="public/assets/js/lib/data-table/datatables-init.js"></script>


                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#bootstrap-data-table-export').DataTable();
                        });
                    </script>

</body>
</html>
