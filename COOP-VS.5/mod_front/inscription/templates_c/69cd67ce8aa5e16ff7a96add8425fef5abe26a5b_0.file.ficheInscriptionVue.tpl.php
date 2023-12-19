<?php
/* Smarty version 4.3.2, created on 2023-12-19 12:44:58
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\mod_front\inscription\ficheInscriptionVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6581904ae7b158_44763863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69cd67ce8aa5e16ff7a96add8425fef5abe26a5b' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\mod_front\\inscription\\ficheInscriptionVue.tpl',
      1 => 1702989883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581904ae7b158_44763863 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../../public/assets/css/front.css">
    <meta charset="UTF-8">
    <title>Coop'Emploi</title>
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

<main class="hero background color">

    <form action="ficheInscription.php" method="post">
        <fieldset>
            <h1>S'inscrire</h1>
            <br>

            <br>
            <p>Pour que nous puissions vous confirmer votre inscription. il est nécessaire de preciser un telephone ou
                une adresse mail valide. Merci pour votre comprehension.</p>
            <br>
            <input type="hidden" name="inscription" value="">
            <input type="hidden" name="reu_ide" value="<?php echo $_smarty_tpl->tpl_vars['reu_ide']->value;?>
">
            <label for="nom">Nom :</label>
            <input type="text" name="pdp_nom" id="nom" required><br>
            <label for="prenom">Prénom :</label>
            <input type="text" name="pdp_pre" id="prenom" required><br>
            <label for="code_postal">Code postal :</label>
            <input type="text" name="pdp_cpo" id="code_postal" required><br>
            <label for="ville">Ville :</label>
            <input type="text" name="pdp_vil" id="ville" required><br>
            <label for="tel_fix">Téléphone fixe :</label>
            <input type="tel" name="pdp_tel" id="tel_fix" required><br>
            <label for="tel_port">Téléphone portable :</label>
            <input type="tel" name="pdp_por" id="tel_port" required><br>
            <label for="email">Email :</label>
            <input type="email" name="pdp_mai" id="email" required><br>
            <input type="button" class="btn btn-retour" value="Retour"
               onclick="location.href='../index.html">
               
        </fieldset>
        <button type="submit">Envoyer</button>
    </form>
</main>
</body>
</html>
<?php }
}
