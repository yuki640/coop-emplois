<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../../public/assets/css/listereu.css">
    <meta charset="UTF-8">
    <title>Coop-Emploi</title>
</head>

<body class="background">

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

    <main>
        <h1>Réunions disponibles</h1>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Informations</th>
                    <th>Participer</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$listeReunions item=uneReunion}
                <tr class="tab">
                    <td>{$uneReunion->reu_dat}</td>
                    <td>Salle {$uneReunion->lie_nom} - {$uneReunion->lie_cpo} {$uneReunion->lie_ville}</td>
                    <td>La réunion débutera à {$uneReunion->reu_heu} pour une durée de {$uneReunion->reu_dur}H environ</td>
{*                    <td class="inscription-reunion"><a href="../inscription/ficheInscription.php">Participer</a></td>*}
                    <td>
                        <form action="../inscription/ficheInscription.php" method="post">
                            <input class="inscription-reunion" type="submit" name="Participer" value="Participer">
                            <input type="hidden" name="reu_ide" value="{$uneReunion->reu_ide}">
                            <input type="hidden" name="gestion" value="lieux">
                            <input type="hidden" name="form_inscription" value="">
                        </form>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>

       
    </main>

    <!-- Add your footer here if you have one -->
    <!-- <footer>Footer content here</footer> -->

</body>

</html>
