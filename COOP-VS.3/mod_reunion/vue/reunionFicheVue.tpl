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
        <h1>L'emplois, c'est maintenant !</h1>
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">


                <div class="col-md-6">

                    <div {if ReunionTable::getMessageErreur () neq ''} class="alert alert-danger" role="alert" {/if} >
                        {ReunionTable::getMessageErreur ()}
                    </div>

                    <div class="card">
                        <div class="card-header"><strong>{$titrePage}</strong></div>
                        <form action="index.php" method="POST">

                            <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                            <input type="hidden" name="gestion" value="reunion">

                            <input type="hidden" name="action" value="{$action}">

                            <input type="hidden" name="reu_dcr" value="{date("d/m/Y H:i:s",time())}">

                            <input type="hidden" name="reu_dmo" value="{date("d/m/Y H:i:s",time())}">

                            <div class="card-body card-block">

                                {if $action neq 'ajouter'}
                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Code Réunion :
                                        </label>
                                        <input type="text" name="reu_ide" class="form-control"
                                               value="{$unReunion->getReuIde()}"
                                               readonly>
                                    </div>
                                {/if}

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Date <sup>(*)</sup>:
                                    </label>
                                    <input type="text" name="reu_dat" class="form-control"
                                           value="{$unLieux->getReuDat()}"
                                            {$readonly}
                                           required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Heure de début :
                                    </label>
                                    <input type="text" name="reu_heu" class="form-control"
                                           value="{$unLieux->getAdresse1()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Durée approximative :
                                    </label>
                                    <input type="text" name="reu_dur" class="form-control"
                                           value="{$unLieux->getAdresse2()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Nom du lieu :
                                    </label>
                                    <input type="text" name="reu_lie" class="form-control"
                                           value="{$unLieux->getAdresse3()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Capacité :
                                    </label>
                                    <input type="text" name="reu_cap" class="form-control"
                                           value="{$unLieux->getAdresse4()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Contenu de la présentation <sup>*</sup>:
                                    </label>
                                    <input type="text" name="reu_pre" class="form-control"
                                           value="{$unLieux->getCodepostal()}"
                                            {$readonly}
                                           required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Localité de destination cedex <sup>(*)</sup>:
                                    </label>
                                    <input type="text" name="reu_pre" class="form-control"
                                           value="{$unLieux->getVille()}"
                                            {$readonly}
                                           required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Telephone de l'établissement :
                                    </label>
                                    <input type="text" name="reu_pub" class="form-control"
                                           value="{$unLieux->getTelephoneS()}" {$readonly}>
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