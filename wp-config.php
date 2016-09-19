<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'heroku_16d0b0434d6ca5e');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'bdaa72ed6737a5');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '7ff4ad05');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'eu-cdbr-west-01.cleardb.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[~|!395<<T-#]0;r5miJmIh(I*k4rt7 E$sg;A~FZ3ug9AXeZcR,BCvuK[=x.rWG');
define('SECURE_AUTH_KEY',  'wJF{<f4H[*oA`c-~--+;*#4itG%>5l_oI/OW-C:yr(gWV.M,*SRD+uYT2d$PX|Rr');
define('LOGGED_IN_KEY',    't2_$h={_@rSbTVls=D2?28v=TS{],Ns1IN8pp%c,%YG07(:(xN8~<Svsh!Ia@.,;');
define('NONCE_KEY',        'R95*6+lzSNbM`2|J)1U2x3TB|>i|.>aa~&hShi6{EcbTNgU{@EnY<fKLDS5Zo=PZ');
define('AUTH_SALT',        'NGJ_7u<S$)-ZrjkecL2$^V]|MwkCN@~Fr2wv#k=[>X3%>iLHth-a_O=A*Lvy=u0#');
define('SECURE_AUTH_SALT', '*R{2$A@5j8rZ)%}Nx$KwUf{oSX#4 N@DAwrx+/6Mei{t7;rBOr5fEO@~Z1Fq$xs-');
define('LOGGED_IN_SALT',   'w/K o]^gaHVgHds>}K 1:~czl8&(_~!Vj4|x&Mtd.:B^PPszjh#4,(V[VZl`l= /');
define('NONCE_SALT',       'F?O]%o=,#N_PP~?CE9qJc.@]02;OY[G Feb2-}m!.m-2txZGHb@]0_34gje|Tf$y');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
