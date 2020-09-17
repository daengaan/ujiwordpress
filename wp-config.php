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
define( 'DB_NAME', 'ujiwordpress' );

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
define( 'AUTH_KEY',         '>E7Y]5-Z^~Uu3?%>4BCortl1WVtyx_q.(7Q1%S}a}Q!aB)IsPGgtILCpvK8sOI:p' );
define( 'SECURE_AUTH_KEY',  '<2sH9>zj9G(C.f{Q|L|0,lfs,Vt`LvrQ|eC]&pM9gW<9uBPjUv,|iLTq2!LB@F5G' );
define( 'LOGGED_IN_KEY',    '=AT$}IbZxf8:Uh}|jl]FFKvrIcbr4]YdfxXB<;a*J)s^C3m>M(h%zCW]*^a*gtWD' );
define( 'NONCE_KEY',        'isfT{/Eq6v-9Z5E,a`{op]U#((u[ik<pD~]BPPMu~16(?n>JR)IOmD(<#oCL%[ H' );
define( 'AUTH_SALT',        '/( >?jx^fH:2aV}a@vCvpT]A_Qxyo-TOf])9=cKiI#{KnuVkPTPs#L7I!vTA#ZAF' );
define( 'SECURE_AUTH_SALT', 'U1>nUZEzrc#.89pRtf,fDmk&R!Z{ph43|]I<a9i@Lg!=u~M&}<{Fi+6_Py~IFdQk' );
define( 'LOGGED_IN_SALT',   'uI)UH<n$Vm,b#$lyp[,t5W&ppc%h}=INH+~!oC#&Ew+r_$|n]%av^Z#px}/|;+QY' );
define( 'NONCE_SALT',       'IBHEiO8lRtoF|s-x]^a#PADUh``02Q`|#$&n&#d.4!*s&]G/2;k3 jdhxJTDbDUE' );

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
