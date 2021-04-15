<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


define ( 'FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Root@1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y6))7zv(KX/gD#<=cK +[,/=|sjj@e;&57)C_%hQR[JqhVAqa6hDCgiX#I+I$(!@' );
define( 'SECURE_AUTH_KEY',  'X:S8tE`btIu7G:5|*X+!8;y28%>Bw#Q6#K-pAsV##hPZZ,=?NpXZ9<}_M&gs6(wm' );
define( 'LOGGED_IN_KEY',    ':yTVQU&-}+z_6B1-W^u@+8O;R9?X?PfS,<~:d7~DNGU}5BA5Fo (k;c^J^v~=WyF' );
define( 'NONCE_KEY',        '**eF_<<-9+Ddlr8@uI6EvKN:7UiO<pV*;9qyqI}bz6IK5c5%EE,Kz&W:f0]Uo{uM' );
define( 'AUTH_SALT',        '5ft,^JH(U5T8}o_=mc1DTzr>6^K]bPUU_sWhN@D|8Z{l~|Q.;I`,jr}Iv*1WI&CU' );
define( 'SECURE_AUTH_SALT', 'd|4 JT![qFxZyzv<`=3A7`#jt)d}lpl+GKx#IVHV=]+BHu@Kms|z.r|OKvW$I>Cy' );
define( 'LOGGED_IN_SALT',   'ehL02ZEsIQOx;H6?,Xb`:,!}=j14/ /tQ|wCR1*@G2S~jnB3_02QzfWqVNb,s{~v' );
define( 'NONCE_SALT',       ')7A14]Y7isFV#J4eWAP/|pQ!b~?h2AT*}G?T%VT[3^6Hy;A8kq>+@@GJ`*HE#m7d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
