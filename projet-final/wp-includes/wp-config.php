<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet-final' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'dM5EYCr@+K-oL}l1VZ_;Z<w>{&r2]=p@jbbv&K;tvTm){wPDq[puPUV)sbRGBf(^' );
define( 'SECURE_AUTH_KEY',  'B;!v}[h6HK_E>:im3`0t8X2r(hQ;`7Y0QVB}6%]~LkJiRPms=7voxQ7N(KT3A8oY' );
define( 'LOGGED_IN_KEY',    '=wub*fWUrY;=QcB7nWgL@+YAtj%T?0^Evx;}zCYjX(6PTvN><vM/ Wl*G,9PvnsD' );
define( 'NONCE_KEY',        'B2&7FMWoM2oxAUY8=@ywc?B]7{YLf5@1<9hIy$1)&_pVomad>+@7g)]<B$oP8Ee<' );
define( 'AUTH_SALT',        'B9RV3b)S;*<A/EM~,Kwv`UyB@=NRn{sXgb%:9|Bu%fh.- ~ErWMig5:u^&XGiSYt' );
define( 'SECURE_AUTH_SALT', '$/:Bs6-x~kBi)F?p_> zxyKBM+}?;EnGyF=VNz%xxI+F&%H:O(3bp.Q5.L0Ntk<M' );
define( 'LOGGED_IN_SALT',   '[12eLM[M!av3@lER&RqyOB4{:WTfsjH>58pJsjJ:LH8mjXS65$Slwtlos;%7ae6`' );
define( 'NONCE_SALT',       '!iGb8*V>;NRWA}h/FGUUxs?X^$ene>NDc-TxnLbBX9KQkNZh6&jk-lvPm}ae|G9h' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
