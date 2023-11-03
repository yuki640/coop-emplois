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

        {include file='public/header.tpl'}

        <!-- FIN : header -->


        <div class="page-title">
            <h1>L'emploi, c'est maintenant !</h1>
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

                    <input type="hidden" name="lie_dcr" value="{date("d/m/Y H:i:s",time())}" >

                    <input type="hidden" name="lie_dmo" value="{date("d/m/Y H:i:s",time())}">

                    <div class="card-body card-block">

                        {if $action neq 'ajouter'}
                            <div class="form-group">
                                <label for="text" class=" form-control">
                                    Code lieux :
                                </label>
                                <input type="text" name="lie_ide" class="form-control"
                                       value="{$unLieux->getIde()}"
                                       readonly>
                            </div>
                        {/if}

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Nom <sup>(*)</sup>:
                            </label>
                            <input type="text" name="lie_nom" class="form-control"
                                   value="{$unLieux->getNom()}"
                                    {$readonly}
                                    required
                            >
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Service, N°de bureau ou étage :
                            </label>
                            <input type="text" name="lie_ad1" class="form-control"
                                   value="{$unLieux->getAdresse1()}" {$readonly}>
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                               Résidence, Immeuble, Bâtiment, ZI :
                            </label>
                            <input type="text" name="lie_ad2" class="form-control"
                                   value="{$unLieux->getAdresse2()}" {$readonly}>
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Numéro voie , type, nom de la voie :
                            </label>
                            <input type="text" name="lie_ad3" class="form-control"
                                   value="{$unLieux->getAdresse3()}" {$readonly}>
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Mention de distribution, lieu-dit :
                            </label>
                            <input type="text" name="lie_ad4" class="form-control"
                                   value="{$unLieux->getAdresse4()}" {$readonly}>
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Code postal <sup>*</sup>:
                            </label>
                            <input type="text" name="lie_cpo" class="form-control"
                                   value="{$unLieux->getCodepostal()}"
                                    {$readonly}
                                    required
                            >
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Localité de destination cedex <sup>(*)</sup>:
                            </label>
                            <input type="text" name="lie_ville" class="form-control"
                                   value="{$unLieux->getVille()}"
                                    {$readonly}
                                    required
                            >
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Téléphone de l'établissement :
                            </label>
                            <input type="text" name="lie_tel" class="form-control"
                                   value="{$unLieux->getTelephoneS()}" {$readonly}>
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Nom du contact : <sup>(*)</sup>
                            </label>
                            <input type="text" name="lie_con" class="form-control"
                                   value="{$unLieux->getContact()}" {$readonly}>
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Téléphone du contact <sup>(*)</sup>
                            </label>
                            <input type="text" name="lie_tco" class="form-control"
                                   value="{$unLieux->getTelephoneC()}" {$readonly}
                                   required
                            >
                        </div>

                        <div class="form-group">
                            <label for="text" class=" form-control">
                                Capacité d'accueil de la salle : <sup>(*)</sup>
                            </label>
                            <input type="number" name="lie_cap" class="form-control"
                                   value="{$unLieux->getCapacite()}" {$readonly}
                                   required
                            >
                        </div>

                        <div class="card-body card-block">

                            <div class="col-md-6">

                                <input type="button" class="btn btn-retour" value="Retour"
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


        </div>

    </div><!-- /#right-panel -->

</body>
{* debut footer *}
{include file='public/footer.tpl'}
{* fin footer *}

</html>