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
define( 'AUTH_KEY',         'EcR`&vz<by}wwu]0lU0O!H]H<M.h1Mkc>V@dsx_/gyR0Z37OuYwfLUZ&$Y|N% 2L' );
define( 'SECURE_AUTH_KEY',  's1Y[B;JM4Un!Rh?SR}UT[qtoQKO0)w;p !L/jYUJ9}??$; Ja5Cx$I|^(aO%LpY{' );
define( 'LOGGED_IN_KEY',    'G#X8s;N;>yPcCU*-pQ pi:WNsjv*~QD^&8$CXHMJ?i.4a!VCx`s_~drgU@0(dA_<' );
define( 'NONCE_KEY',        '*S8Z:zG^Y~=o8$GwhAl~2/ig@sg?q?$w5v>004sgz2h&n9#~>>$lRQDo^4x0piFc' );
define( 'AUTH_SALT',        '2oj| .Vma*;D_Bsk;+@pja_, kC6bb9`g?]>b|+dngY_Y4IEYq;T)fY<Y?WAz/(Y' );
define( 'SECURE_AUTH_SALT', 'Zzik$kx94>@(ggs)aNs7vY-91};)9eU5%v-`D>z>c,@b7RGWj_;ofDP}LvoDoQLn' );
define( 'LOGGED_IN_SALT',   'RAn.<5<iCmN[=RNbD$hMu?QUFw$SJyeQ(We`|(GcX~De=vo$`7O0=?Ts(cM3XLeb' );
define( 'NONCE_SALT',       'pIeCB8;-qNz*(Ci`6EJ%k:O3)Xm!JMW7]L$84bc75UIZ%#qeqq`D*.[Ur{]DYPC ' );
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
