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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '`DLEN|xC?a1LJ#iXWfdR5Wup*$e)]#,K+f(lCN&y~Lh/,`mj)<lxZmXc HDiQGik' );
define( 'SECURE_AUTH_KEY',  'IS!>nPkL$]O/a%J@L^_~7ZrzlGln}(]?BNh<[ml={<GV}+A|?r0K:ZHoV)ts~WyF' );
define( 'LOGGED_IN_KEY',    'FaU_-7&F#<[lt}3:0<k+Orc_U.5fdAb!JZ*S@<WE7~!OH XqA?vhi|_.x{FuF~`K' );
define( 'NONCE_KEY',        'gw?g@.Lcf_BZWpS P~A%8rE:p/sjr7HRL50)9R= hE5oKDYX6iSK}(D6[of#tJ[y' );
define( 'AUTH_SALT',        '[}UgY uiLsD9xbC[y3|U%o}cXG8!o ~R8wo;cT<-e/kt;Lyu=&*Wkzds{d1D0CT_' );
define( 'SECURE_AUTH_SALT', '2Xj@nM<F0_4WMU5B@mRfzVl^-&5WJ+*9dc/:Yl;2aKqW&W;?8e2iNP*P*Q(qY`H5' );
define( 'LOGGED_IN_SALT',   'V1UnHoJ$x^1iZ$dFKu02eu|R)#YHL2[R;|2HB;xPOvz<>RMr`imlE0q>Q=T/]J:-' );
define( 'NONCE_SALT',       'u>p`t#0au{ :@LFW27!+Aosl.Bs]*^`ri#27IPz7!2y lybLc3OioDuqs pbN7m?' );
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
