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
define( 'DB_NAME', 'madsphilipsen' );

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
define( 'AUTH_KEY',         'yeKYgc:?P>K8r0,x1iLaoHjj.Qg6u,pZdrpVmwc-JraW3,f{Y$y1{*~C&QCQ2]j}' );
define( 'SECURE_AUTH_KEY',  'mT[BxNn$4;NgX0=o><EZ>yvLoFFPV?,/OQSw7?TlB@x+KykelAIvT03-9vzn{h6U' );
define( 'LOGGED_IN_KEY',    '0`F]IFjZ{0!Z~kMWb8LC@a$M&~KFsd)f):PgP>bXho(]0|wZ,pL3orRDF4u#Gu;Y' );
define( 'NONCE_KEY',        'ftUu1Simfpj<#f]gG.rz;@BF?Q}=WB_0H0zJO`n4IWNF93@6glM12HWWI ow ZZS' );
define( 'AUTH_SALT',        'Vj[xfisqkT1jz4J!C>xrnMB2gX>::/9w6l([ohg 4uam8CZhC8T(@VS,P<reQIfw' );
define( 'SECURE_AUTH_SALT', 'B&Ws9~58:;PY>i4^b 7:[(J:jrFXEu%Nbg7g>yIL:O##X~zT:mPEn}VZb]XIj=?u' );
define( 'LOGGED_IN_SALT',   'VqQdmW`}s`;Jh/b_Dc0%[h~np<@0q{Et1B}/@f50NrKl_f@Ne$P)RW@84Tal;vrE' );
define( 'NONCE_SALT',       'OU&~uwKWYrS$LRH0(Oids|eNvcdc@J[qE3]!LM%oN`Um5?N+pMy<u[NvMEE=R&!^' );

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
