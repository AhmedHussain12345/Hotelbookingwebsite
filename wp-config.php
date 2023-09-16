<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-XT&@DpPS =:uvudGrf`V_5M59PC~D,!EPYV.H+E}6D5bq17=}-imJj%aZ0;QUka' );
define( 'SECURE_AUTH_KEY',  'WL+;m@D0utNv2yj.w`a7<)?yI-Qpg+_FWQ`FJAV|^@{6UbUbb<PL,1ko^B@s[3}*' );
define( 'LOGGED_IN_KEY',    'EB*pu-,;)Niutd}^_56#b@<B7WNiZ[x#9]I:~{HQ`fwh||LiGw+(r|S|wbc={GEs' );
define( 'NONCE_KEY',        'UHiR*<g<$J!7jCHQeu]1!GGM]9x|9K3]Oz~p5uMz& }`3*gP,M+UAeW^jh4eX.>-' );
define( 'AUTH_SALT',        '|R$<!nthKxstpS.BpT$yK+CnbmiUjo505h7{g3I^:FbTSkt722N@lm;18A39v|b}' );
define( 'SECURE_AUTH_SALT', ']6hjSY,Vh(+47f8RW/Ac4:IKEa`)d_|0oKY;=LZiX3j|;wFcx!hYWEA.^Op*NvtI' );
define( 'LOGGED_IN_SALT',   '9|+$ML02|q:s@Fa{2T<*W`SygSZx8%wt6!RYn3R#gk!$H_!]O?g9hAav4m>Zue%^' );
define( 'NONCE_SALT',       '}Eug6~!vwKO#OkWRSmR74L0ESnAl>P>`rV>&MivcOw}epw<[unyyT;a0$;}}!p;A' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
