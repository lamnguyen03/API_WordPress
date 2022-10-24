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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'j&}o; .yB]Zr=io,=)kj<HYy$^;Z%FK4M#Rizns8Q2(4T[@]!dA!5dNFsM.!4/ow' );
define( 'SECURE_AUTH_KEY',  'XG;nnjxUDknTf9|/h=k@iRnv*.{lU1-}L$x9nJM t8S]RHt=r#3xuIcvNt9uzG_C' );
define( 'LOGGED_IN_KEY',    'jGeu{r=BfLd}$ufc}Zc[8yv4o5${it]*R$epBxV!8ixmB2M&-o(2:qD~3$M`#7bY' );
define( 'NONCE_KEY',        'lM6i$Vzb]z/dN/;4PL$wE1~d.vs:C$b*G0-q~?Yw@h+=7!khPTZ7GLvrR?]Jt7db' );
define( 'AUTH_SALT',        'A2_ErY.UllDBbUelHy@aivtZ9wHj;A-HC#I|^;SW!!?)b:DKrr|j#!*lG(Wuihvc' );
define( 'SECURE_AUTH_SALT', 'py:;a#o#5HA|bC:yi,$bH>kuyq$p.gWIP@1Hn.F7vd]?ZD5Nf^c(}Y#=A{bzlD5=' );
define( 'LOGGED_IN_SALT',   ' #TsE1}<Pr(!?f|W!8>d 3z/0%|(~L5+{x|M|9o-=t}*YkSO%eI2S:o9;dQ{<O}!' );
define( 'NONCE_SALT',       'j-SAS?,Dsf-BiDe;l6FRO.C75wBTAdp=BlQSc%ldz~z,lnuxmC*nh^XYnyvU%@An' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
