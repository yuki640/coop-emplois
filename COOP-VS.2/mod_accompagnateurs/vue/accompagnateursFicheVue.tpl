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

                        <div {if AccompagnateursTable::getMessageErreur () neq ''} class="alert alert-danger"
                            role="alert" {/if}>
                            {AccompagnateursTable::getMessageErreur ()}
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>{$titrePage}</strong></div>
                            <form action="index.php" method="POST">

                                <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                                <input type="hidden" name="gestion" value="accompagnateur">

                                <input type="hidden" name="action" value="{$action}">



                                <input type="hidden" name="mailbase" value="{$unAccompagnateur->getMail()}">

                                <div class="card-body card-block">

                                    {if $action neq 'ajouter'}
                                        <div class="form-group">
                                            <label for="text" class=" form-control">
                                                Code accompagnateurs :
                                            </label>
                                            <input type="text" name="acc_ide" class="form-control"
                                                value="{$unAccompagnateur->getIde()}" readonly>
                                        </div>
                                    {/if}

                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Nom <sup>(*)</sup>:
                                        </label>
                                        <input type="text" name="acc_nom" class="form-control"
                                            value="{$unAccompagnateur->getNom()}" {$readonly} required>
                                    </div>

                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Prénom <sup>(*)</sup>:
                                        </label>
                                        <input type="text" name="acc_pre" class="form-control"
                                            value="{$unAccompagnateur->getPrenom()}" {$readonly}>
                                    </div>

                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Téléphone <sup>(*)</sup>:
                                        </label>
                                        <input type="text" name="acc_tel" class="form-control"
                                            value="{$unAccompagnateur->getTelephone()}" {$readonly}>
                                    </div>

                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Email <sup>(*)</sup>:
                                        </label>
                                        <input type="text" name="acc_mail" class="form-control"
                                            value="{$unAccompagnateur->getMail()}" {$readonly}>
                                    </div>

                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Specialisation :
                                        </label>
                                        <input type="text" name="acc_fon" class="form-control"
                                            value="{$unAccompagnateur->getFonction()}" {$readonly}>
                                    </div>

                                    <div class="card-body card-block">

                                        <div class="col-md-6">

                                            <input type="button" class="btn btn-submit" value="Retour"
                                                onclick="location.href='index.php?gestion=accompagnateur'">

                                        </div>

                                        <div class="col-md-6">
                                            {if $action != 'consulter'}
                                                <input type="submit" class="btn btn-submit" name="btn-valider"
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