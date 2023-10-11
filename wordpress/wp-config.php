<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wcoopemploi' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']@ @lgD^NxK*BBHlWU7Q~W.oF15P@`3qU5ekdH(ex.}yzt&AkNDLkVyb$>zuN4z/' );
define( 'SECURE_AUTH_KEY',  'Fzq{>)I1j?}?/bry*{3x[8B!_/?^^:HR:?KiOe<Pnws!(?G!K[?>bwx~^a#7DpMV' );
define( 'LOGGED_IN_KEY',    '6)g-r.%SS`u3*6Vd[l?xYQ).2tA`8V?mm!?`CK,1|m}l<I+T11F5;n%^}%`j;Pt;' );
define( 'NONCE_KEY',        'j1ZCyu3L?vzxFYZ$(@}<Qh$N$G{H-0ZAE+iZUZnQJSz^pR:LcaFMkE>?bR@8=TQ1' );
define( 'AUTH_SALT',        '(9;e1W,a#XA1N1_WmY1V*!J$D^P9}R{3F! r`gwfX65s~c}`X1JE<r)$MY-7aJ;T' );
define( 'SECURE_AUTH_SALT', 'ov$7]%JF0~[?, j?/c|.#UN,tpbP<|`sq_ /;~p)-~:~|tTr_e9w*N438/AAj/x<' );
define( 'LOGGED_IN_SALT',   'R>@|FQNHj`sd(Ue1V*H(3pV<1Q!fsZ>06&$IS]L1}drm;yB)Q?C}X]LV.)i9H{L$' );
define( 'NONCE_SALT',       'Y z <)XHBLR<%]SL^]C1%8(D8~Z~-O7yVhK|EE4BH {$$CsIb7U(oTvJdC1G?YpI' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
