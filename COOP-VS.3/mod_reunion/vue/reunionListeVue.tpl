<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/liste.css">

    <title>liste des lieux</title>


</head>

<body>

<div id="right-panel" class="right-panel">

    <!--Header -->
    {include file='public/header.tpl'}
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
                <input type="hidden" name="gestion" value="reunion">
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

        <div {if ReunionTable::getMessageSucces () neq ''} class="alert alert-success" role="alert" {/if} >
            {ReunionTable::getMessageSucces ()}
        </div>

        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <!-- PLACER LA LISTE DES CLIENTS -->
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Intitulé</th>
                <th>Capacité</th>
                <th class="pos-actions">Consulter</th>
                <th class="pos-actions">Modifier</th>
                <th class="pos-actions">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$listeReunion item=unReunion}
                <tr>
                    <td>{$unReunion->getReuIde()}</td>
                    <td>{$unReunion->getReuDat()}</td>
                    <td>{$unReunion->getReuHeu()}</td>
                    <td>{$unReunion->getReuPre()}</td>
                    <td>{$unReunion->getReuCap()}</td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="reu_ide" value="{$unReunion->getReuIde()}">
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="form_consulter">
                            <input type="image" name="btn_consulter" src="public/images/icones/p16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="reu_ide" value="{$unReunion->getReuIde()}">
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="form_modifier">
                            <input type="image" name="btn_modifier" src="public/images/icones/m16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="reu_ide" value="{$unReunion->getReuIde()}">
                            <input type="hidden" name="gestion" value="reunion">
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


</body>

{* ajouter footer *}
{include file='public/footer.tpl'}
{* fin ajouter footer *}


</html>





