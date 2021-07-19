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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'noticebox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'nHz#!o*$easQLf,8V-*ijlU!+^NBE=2:$1C|68FP{oDiVc;8go4IH=$e7&+~4ZTV' );
define( 'SECURE_AUTH_KEY',  'Oo#OlN3s!IA9%=h+Tf5>Vky*UHlei-$wGz~+vbS^^kez1D=U4-UvrRT=RiLLW(0V' );
define( 'LOGGED_IN_KEY',    'u~H|Kc*sg:9fwC!}TVd,6.y;:/H_V:3DaUa]_7mmwJ5m~3lLM4EuRyOkEx%c>Q[#' );
define( 'NONCE_KEY',        '??uFk)NY~_NQM !377~Gd;/KHdSu4y<]&r=|t{=&Ac83x_}CV%c`WfQw 2-H{N81' );
define( 'AUTH_SALT',        'wP%Ot,Gu~V%9m.p9XrXWDxToQIcrh2C%Xq4FYGd$}N7?_y3HlCh31-1@+.yEz)<,' );
define( 'SECURE_AUTH_SALT', 'J@2$c?6)/02d`r{s})~V$jU9i!865uR])&7;|+RbHw+EFl#^.q#!k48A6t]`QE[1' );
define( 'LOGGED_IN_SALT',   'q:Yd.@O856i^*$m.XGA4{XL$Tc[b$^1SbRS~h/me]&$YHf)3;KTjhk$qpiB:qICC' );
define( 'NONCE_SALT',       'R6(4YB)a4OnvMV0Q)wHk QV&NGF2I&C]]&p`|YU[uq8KToy5Ea@cROM^zo?>H{1$' );

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
