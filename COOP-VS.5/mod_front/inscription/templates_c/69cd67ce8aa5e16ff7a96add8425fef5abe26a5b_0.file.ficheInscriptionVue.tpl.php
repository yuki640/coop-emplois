<?php
/* Smarty version 4.3.2, created on 2024-01-12 14:54:24
  from 'C:\laragon\www\coop-emplois\COOP-VS.5\mod_front\inscription\ficheInscriptionVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65a152a0b59c93_68872248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69cd67ce8aa5e16ff7a96add8425fef5abe26a5b' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-VS.5\\mod_front\\inscription\\ficheInscriptionVue.tpl',
      1 => 1705071263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a152a0b59c93_68872248 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="../../index.html">Accueil</a></li>
            <li><a href="">La coopérative</a></li>
            <li><a href="">Nos projets</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="../../int/index.php">Se connecter</a></li>
        </ul>
    </nav>
</header>

<main class="hero background color">
    <?php if ($_smarty_tpl->tpl_vars['affichage']->value == 0) {?>

        <form action="ficheInscription.php" method="post">
            <fieldset>
                <h1>S'inscrire</h1>
                <br>

                <br>
                <p>Pour que nous puissions vous confirmer votre inscription. il est nécessaire de preciser un telephone
                    ou
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

            </fieldset>
            <button type="submit">Envoyer</button>
        </form>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <a href="../../index.html"><button type="button" class="button">Accueil</button></a>
    <?php }?>
</main>
</body>
</html>
<?php }
}
