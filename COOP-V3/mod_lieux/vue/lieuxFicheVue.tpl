<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="FR">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>titreVue</title>
    <meta name="description" content="titreVue">
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
                    <h1>L'emplois, c'est maintenant !</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=Lieux">Lieux</a></li>
                        <li class="active">TitreVue</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">


                <div class="col-md-6">

                    <div {if LieuxTable::getMessageErreur () neq ''} class="alert alert-danger" role="alert" {/if} >
                        {LieuxTable::getMessageErreur ()}
                    </div>

                    <div class="card">
                        <div class="card-header"><strong>{$titrePage}</strong></div>
                        <form action="index.php" method="POST">

                            <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                            <input type="hidden" name="gestion" value="lieux">

                            <input type="hidden" name="action" value="{$action}">

                            <input type="hidden" name="datec" value="{date("d/m/Y H:i:s",time())}" >

                            <input type="hidden" name="datem" value="{date("d/m/Y H:i:s",time())}">

                            <div class="card-body card-block">

                                {if $action neq 'ajouter'}
                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Code lieux :
                                        </label>
                                        <input type="text" name="codel" class="form-control"
                                               value="{$unLieux->getCodeL()}"
                                               readonly>
                                    </div>
                                {/if}

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Nom <sup>(*)</sup>:
                                    </label>
                                    <input type="text" name="nom" class="form-control"
                                           value="{$unLieux->getNom()}"
                                            {$readonly}
                                            required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Service, N°de bureau ou étage :
                                    </label>
                                    <input type="text" name="adresse1" class="form-control"
                                           value="{$unLieux->getAdresse1()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                       Résidence, Immeuble, Bâtiment, ZI :
                                    </label>
                                    <input type="text" name="adresse1=2" class="form-control"
                                           value="{$unLieux->getAdresse2()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Numéro voie , type, nom de la voie :
                                    </label>
                                    <input type="text" name="adresse3" class="form-control"
                                           value="{$unLieux->getAdresse3()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Mention de distribution, lieu-dit :
                                    </label>
                                    <input type="text" name="adresse4" class="form-control"
                                           value="{$unLieux->getAdresse4()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Code postal <sup>*</sup>:
                                    </label>
                                    <input type="text" name="codepostal" class="form-control"
                                           value="{$unLieux->getCodepostal()}"
                                            {$readonly}
                                            required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Localité de destination cedex <sup>(*)</sup>:
                                    </label>
                                    <input type="text" name="ville" class="form-control"
                                           value="{$unLieux->getVille()}"
                                            {$readonly}
                                            required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Telephone de l'établissement :
                                    </label>
                                    <input type="text" name="telephoneS" class="form-control"
                                           value="{$unLieux->getTelephoneS()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Nom du contact : <sup>(*)</sup>
                                    </label>
                                    <input type="text" name="contact" class="form-control"
                                           value="{$unLieux->getContact()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Téléphone du contact <sup>(*)</sup>
                                    </label>
                                    <input type="text" name="telephoneC" class="form-control"
                                           value="{$unLieux->getTelephoneC()}" {$readonly}
                                           required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Capacité d'accueil de la salle : <sup>(*)</sup>
                                    </label>
                                    <input type="text" name="capacite" class="form-control"
                                           value="{$unLieux->getCapacite()}" {$readonly}
                                           required
                                    >
                                </div>

                                <div class="card-body card-block">

                                    <div class="col-md-6">

                                        <input type="button" class="btn btn-submit" value="Retour"
                                               onclick="location.href='index.php?gestion=lieux'">

                                    </div>

                                    <div class="col-md-6">
                                        {if $action != 'consulter'}
                                            <input type="submit"
                                                   class="btn btn-submit"
                                                   name="btn-valider"
                                                   value="{$action|capitalize}">
                                        {/if}

                                    </div>
                                    <br>
                                </div>


                        </form>
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
{* debut footer *}
{include file='public/footer.tpl'}
{* fin footer *}
</html>