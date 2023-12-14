<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/assets/css/fiche.css">
    <title>Mon Site Web</title>
</head>
<body>
<div id="right-panel" class="right-panel">
    <!--Header -->
    {include file='../../../public/header.tpl'}
    <!-- FIN : header -->
    <div class="page-title">
        <h1>L'emploi, c'est maintenant !</h1>
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
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="{$action}">
                            <input type="hidden" name="reu_dcr" value="{date('d/m/Y H:i:s', time())}">
                            <input type="hidden" name="reu_dmo" value="{date('d/m/Y H:i:s', time())}">
                            <div class="card-body card-block">
                                {if $action neq 'ajouter'}
                                    <div class="form-group">
                                        <label for="text" class="form-control">
                                            Code Réunion :
                                        </label>
                                        <input type="text" name="reu_ide" class="form-control"
                                               value="{$unReunion->getReuIde()}" readonly>
                                    </div>
                                {/if}
                                <div class="form-group">
                                    <label for="text" class="form-control">
                                        Date <sup>(*)</sup>:
                                    </label>
                                    <input type="date" name="reu_dat" class="form-control"
                                           value="{$unReunion->getReuDat()}" {$readonly} required>
                                </div>
                                <div class="form-group">
                                    <label for "text" class="form-control">
                                    Heure de début :
                                    </label>
                                    <input type="time" name="reu_heu" class="form-control"
                                           value="{$unReunion->getReuHeu()}" {$readonly} required>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="form-control">
                                        Durée approximative :
                                    </label>
                                    <input type="time" name="reu_dur" class="form-control"
                                           value="{$unReunion->getReuDur()}" {$readonly}>
                                </div>
                                <div class="form-group">
                                    <label for="reu_lie" class="form-control">Nom du lieu :</label>
                                    <select name="reu_lie" class="form-control" {$readonly}>
                                        {foreach $listeLieux as $lieu}
                                            <option value="{$lieu['lie_ide']}"
                                                    {if $lieu['lie_ide'] == $unReunion->getReuLie()}selected{/if}>
                                                {$lieu['lie_nom']}
                                            </option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="form-control">
                                        Capacité :
                                    </label>
                                    <input type="number" name="reu_cap" class="form-control"
                                           value="{$unReunion->getReuCap()}" {$readonly} required>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="form-control">
                                        Intitulé de la présentation <sup>*</sup>:
                                    </label>
                                    <input type="text" name="reu_pre" class="form-control"
                                           value="{$unReunion->getReuPre()}" {$readonly} required>
                                </div>

                                <div class="form-group">
                                    <label for="reu_acc" class="form-control">Nom de l'accompagnateur :</label>
                                    <select name="reu_acc" class="form-control" {$readonly}>

                                    {foreach $listeAccompagnateurs as $accompagnateur}
                                            <option value="{$accompagnateur['acc_ide']}"
                                                    {if $accompagnateur['acc_ide'] == $unReunion->getReuAcc()}selected{/if}>
                                                {$accompagnateur['acc_nom']} {$accompagnateur['acc_pre']}
                                            </option>
                                        {/foreach}

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="text" class="form-control">
                                        Visible sur les sites proposant l'inscription aux réunions ?
                                    </label>
                                    <!-- Champ caché pour la valeur "faux" (false) par défaut -->
                                    <input type="hidden" name="reu_pub" value="0">
                                    <!-- Champ de type "checkbox" pour permettre à l'utilisateur de basculer -->
                                    <input type="checkbox" name="reu_pub" class="form-control"
                                           value="1" {if $unReunion->getReuPub()}checked{/if} {$readonly}>
                                </div>

                                <div class="card-body card-block">
                                    <div class="col-md-6">
                                        <input type="button" class="btn btn-retour" value="Retour"
                                               onclick="location.href='index.php?gestion=reunion&action=listerAV'">
                                    </div>
                                    <div class="col-md-6">
                                        {if $action neq 'consulter'}
                                            <input type="submit" class="btn btn-submit" name="btn-valider"
                                                   value="{$action|capitalize}">
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>
</div>
{include file='../../../public/footer.tpl'}
</body>
</html>
