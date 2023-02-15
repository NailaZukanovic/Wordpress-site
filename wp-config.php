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
define( 'DB_NAME', 'stem' );

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
define( 'AUTH_KEY',         'RDJ$/U|I[5O5/?njKWO&%kL%`IU]!=!1R`Zn!E/M$_)>~<pd@],@#/!:>Q6z;&gU' );
define( 'SECURE_AUTH_KEY',  'O@*;kbxQ=b9wVWzH^Z H%99cveS%MGJewJl}bYw/N(tRKDBn}KO*]A.21*M=}_+|' );
define( 'LOGGED_IN_KEY',    'vhkf$VDlfC`,54-V+MK`qv!RqA@FnnlC49hu)4n3.MT KEn)]iNQK5kvI-]>pb*}' );
define( 'NONCE_KEY',        'q<t;5TK0!bo00l}QA5Wg^8N6M9YyOD(v%bcdL&ZEr:kj@7qn~ZZMo}-3`6Z#?cE)' );
define( 'AUTH_SALT',        'l}E9HBD#ZSl4t;wD,^>?Qi~7;J)CX[s}ES>=PL]y86PW(?GODneaq7/&R_%.xO*J' );
define( 'SECURE_AUTH_SALT', 'gZg:/?a9Q`@bs!>k`?~m[^dHC%(m8U,$:5KPX~=$*VE$O0uI|i6<^%a+1g+.`v1T' );
define( 'LOGGED_IN_SALT',   'lLX9wWkw9S<9WbA?,o)R]*>4N.gfiQTOVg3AcP)5.]nuz)!RQAPpcJ:sF:tF%eZJ' );
define( 'NONCE_SALT',       '?Q,hv3uXA]Czk~wp*`QTLzfI3`AhT39S:edR(?/YaGe<Giro_#lObS_Jbd=q#,`d' );

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
