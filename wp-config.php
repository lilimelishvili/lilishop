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
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K{U?ENG=y&[eyDk4~reS_s1A+}rYRi-6!_*)6!)Bc:FK:1*^zc+9G*EsV_}Y7AV`' );
define( 'SECURE_AUTH_KEY',  '=q-z5n|N,Cc!TI?UbyZm(ll.,Ms<S9N|[ZX%kEhUlt|Gn~(:ddZV,Ew.c)n.EIV|' );
define( 'LOGGED_IN_KEY',    '1=}}`vc-/n/)Qv+X%oM1puvS6R,{@eu||Qgwm{ed#bNqko4$kiG8#j`#M&cf~7@,' );
define( 'NONCE_KEY',        'ccJSc&lxTfmDOOblDv55j!kll__L=Hs)dXKHx+N;?YnG~?Zxf$P1<4HZY,{+G($x' );
define( 'AUTH_SALT',        ']0GHTCbUfpf:f3D-isFwVJ@J!#pvR3vv(+E8N5RJ1dl>Fuq*lF@O](4M86 bFh:`' );
define( 'SECURE_AUTH_SALT', 'HYB:e>2hUn$A+ zA>|h:xG1Pa^+64>,Qck{SE(Ez+Vd45|XsqOJ9m}O@nJ>QopWQ' );
define( 'LOGGED_IN_SALT',   '%p$9Zihr fWDF+TaI^z!S?ux0w@d~89<.yjDx]N|IQN]yyie02D(Ps[7 +g VR70' );
define( 'NONCE_SALT',       'ZH*5*sE89d[V[quOeO|3D 0_7bF21#WT+pv*9BhBkgQv2EJE.m[*~T|*~-q%}@~Q' );

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
