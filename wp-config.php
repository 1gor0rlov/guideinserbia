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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'guideinserbia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^Hz9od&zEnVZ`TnSH=X/;w5?=w#J[YbNm+x{Rn=TZh,;ZM<Hr@jp[q[:S3v&T/Cs');
define('SECURE_AUTH_KEY',  'KS2Sa=*4w4SZ5@s)qUX#eZa,VZqR%esP}{3OR2?d{&@#:5}*n37z/tL4iHaY%1(f');
define('LOGGED_IN_KEY',    '4$%-RD$y_z`~dXhXSM>fd^UtF|Bk$:*-Ff(`y`<#gf=3>X.#7:>Lc.xs16D2E$p|');
define('NONCE_KEY',        '*ClBa)MHfDEx7FI~SDouLho/0mVnu6vp.Mt-v@ pY7FCOrihbj$vw=t4:d&Or4va');
define('AUTH_SALT',        'CG%e1*QW+%,7:WXrdj:Wa{O0}K,k0d2Ou#K|#>;+Vuz0@Y#5MAln~W5&WdqPw[cH');
define('SECURE_AUTH_SALT', 'rsK1 `,n|Z#u<0TjKYC!Yyorz0z_.QqK2*j00(OfWQ)mUW#W2;r~x(B0 A/ &YnL');
define('LOGGED_IN_SALT',   'z.{eT:pevec~DlpKGli?T+;fzuxwFoI&AQ.^6=zcc]_vI^5&nYw`&C,]8Bu]KycL');
define('NONCE_SALT',       'ElVG~Y/X |M^F$y*2Vqm>_K#ibfmIF,pd#(x<v7nU[R&]ERY.MqjGi`Odi3@9ObL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
