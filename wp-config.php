<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Comfort' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_W?Uwj-!| y:L?_ismB!`tBQ{g c[QHG/9GN4`n9g>TGw~-`uHeg5Y)~:.qOR:/u' );
define( 'SECURE_AUTH_KEY',  '|XJd&Cb?<[OKJAP=,ys)R^pBe29yJk%9spVa<K?_PBza0cl6Subx|qx[K)^I{R?|' );
define( 'LOGGED_IN_KEY',    'Qo3?/VJD{W5u^KL_Z?IKwBa$r:%=R=|kVuW<SG44bxz9kFy--Y)=j+UuBo;J}2H#' );
define( 'NONCE_KEY',        'ef:hxH)J=f{cXz?Q+P8PQ^inZGqAw`{n=|~,ESPnCg~hw%[6^jyshG;%clEW%Ghz' );
define( 'AUTH_SALT',        'hB]{XkMz1R`zn2akvU5+zMmgU7/Q%6~t=9]qosUall+;nersttfczUh/7L^Z`0(U' );
define( 'SECURE_AUTH_SALT', 'D}M[~}MkAZDQlw/a8@keeW5)PWO4.xKJH|TrCH2nSAm;&#GcUenT&SJ:ALmn-O30' );
define( 'LOGGED_IN_SALT',   '=)Dp!aF/*uHogt=NWJD<MAnqHGiX17_3$Q19;<f;kH)P`=3ZiX6E`b~% SdU_H2Q' );
define( 'NONCE_SALT',       '<)I0G?+K@nqRDwZ#;>a>2^l60Y6mj; =/ojcgWwof&y!})9xp`750>@6rdQna&ZZ' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
