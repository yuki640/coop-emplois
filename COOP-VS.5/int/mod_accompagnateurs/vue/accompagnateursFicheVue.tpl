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

    {include file='../../public/header.tpl'}

    <!-- FIN : header -->


    <div class="page-title">
        <h1>L'emploi, c'est maintenant !</h1>
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
                                            Code accompagnateur :
                                        </label>
                                        <input type="text" name="acc_ide" class="form-control"
                                               value="{$unAccompagnateur->getIde()}" readonly>
                                    </div>
                                {/if}

                                <div class="form-group">
                                    <label for="acc_pre" class="form-control">
                                        Prénom <sup>(*)</sup>:
                                    </label>
                                    <input type="text" id="acc_pre" name="acc_pre" class="form-control"
                                           value="{$unAccompagnateur->getPrenom()}" {$readonly} required>

                                </div>

                                <div class="form-group">
                                    <label for="acc_nom" class="form-control">
                                        Nom <sup>(*)</sup>:
                                    </label>
                                    <input type="text" id="acc_nom" name="acc_nom" class="form-control"
                                           value="{$unAccompagnateur->getNom()}" {$readonly} required>

                                </div>

                                <div class="form-group">
                                    <label for="acc_tel" class="form-control">
                                        Téléphone <sup>(*)</sup>:
                                    </label>
                                    <input type="text" id="acc_tel" name="acc_tel" class="form-control"
                                           value="{$unAccompagnateur->getTelephone()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="acc_mail" class="form-control">
                                        Email <sup>(*)</sup>:
                                    </label>
                                    <input type="text" id="acc_mail" name="acc_mail" class="form-control"
                                           value="{$unAccompagnateur->getMail()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="acc_fon" class="form-control">
                                        Specialisation :
                                    </label>
                                    <input type="text" id="acc_fon" name="acc_fon" class="form-control"
                                           value="{$unAccompagnateur->getFonction()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="uti_log" class="form-control">
                                        Login <sup>(*)</sup>:
                                    </label>
                                    <input type="text" id="uti_log" name="uti_log" class="form-control"
                                           value="{$unAccompagnateur->getlog()}" readonly>
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
<script>
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
</script>

</body>
{* debut footer *}
{include file='../../public/footer.tpl'}
{* fin footer *}

</html>