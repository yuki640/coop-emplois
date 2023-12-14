<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../../public/assets/css/front.css">
    <link rel="stylesheet" href="../../public/assets/css/liste.css">
    <meta charset="UTF-8">
    <title>Coop-Emploi</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="">La coopérative</a></li>
            <li><a href="">Nos projets</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="../../int/index.php">Se connecter</a></li>
        </ul>
    </nav>
</header>

<!-- recuperation des données réunion dans la base de donnée -->

<div id="right-panel" class="right-panel">

    <!--Header -->
    <!-- FIN : header -->

    <div class="page-title">
        <h1>Reunions</h1>
    </div>
    {*    <div class="card-header">*}
    {*        <strong class="card-title">*}
    {*            <!-- PLACER LE TITRE DE LA PAGE-->*}
    {*            <!-- PLACER LE FORMULAIRE D'AJOUT-->*}
    {*            <!-- PLACER LE FORMULAIRE D'AJOUT-->*}
    {*            <form class="pos-ajout" method="post" action="index.php">*}
    {*                <input type="hidden" name="gestion" value="lieux">*}
    {*                <input type="hidden" name="action" value="form_ajouter">*}
    {*                <label>Ajouter un lieu :*}
    {*                    <input type="image"*}
    {*                           name="btn_ajouter"*}
    {*                           src="../../public/images/icones/a16.png">*}
    {*                </label>*}
    {*            </form>*}

    {*        </strong>*}
    {*    </div>*}
    <div class="card-body">

        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <!-- PLACER LA LISTE DES CLIENTS -->
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Présentation</th>
                <th class="pos-actions">Consulter</th>
                <th class="pos-actions">Modifier</th>
                <th class="pos-actions">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$listeReunions item=uneReunion}
                <tr>
                    <td>{$uneReunion->reu_ide}</td>
                    <td>{$uneReunion->reu_dat}</td>
                    <td>{$uneReunion->reu_heu}</td>
                    <td>{$uneReunion->lie_ville}</td>
                    <td>{$uneReunion->reu_pre}</td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="lie_ide" value="{""}">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="action" value="form_consulter">
                            <input type="image" name="btn_consulter" src="../../public/images/icones/p16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="lie_ide" value="{""}">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="action" value="form_modifier">
                            <input type="image" name="btn_modifier" src="../../public/images/icones/m16.png">
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="lie_ide" value="{""}">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="action" value="form_supprimer">
                            <input type="image" name="btn_supprimer" src="../../public/images/icones/s16.png">
                        </form>
                    </td>
                </tr>
            {/foreach}

            </tbody>
        </table>
    </div>
</div>


</body>

</html>