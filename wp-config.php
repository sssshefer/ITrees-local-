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
define( 'DB_NAME', 'trees' );

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
define( 'AUTH_KEY',         '5XA+eDNP^NMtP9`5p`v?YN!M;5lIVdS7_Y).^JXl0r]//[GMwl$$voQlCO0nZd!D' );
define( 'SECURE_AUTH_KEY',  '7+mq49#m %p8UF4T;Kbo5fAArr}_<`vc_N{4q`@{R,0I)_*s]K^=u-tHLTvDL%}6' );
define( 'LOGGED_IN_KEY',    '=5:.iIQ~YDu^hS-]aE6*ejpy7{GX9.4UA;]ugbl_ M qdXMe_>Umb9ih3>|RC tq' );
define( 'NONCE_KEY',        '_*Ru]ft0`)d:6zY[F?(cN`^&>Gw3-.!)WZ26Jm[tDcU1@Ly>fUHBX;yl/A~$n|Wj' );
define( 'AUTH_SALT',        'pQ2!Km}%ro-dMsgQAx}|F<Nq~#}&}Z(M iLA[]*WfL@67D+NEy,vB34$t8%%R ]G' );
define( 'SECURE_AUTH_SALT', '%;9 K]m-R=d_=%(@P|gfxF uLT4Sk}VvzfCOH3QOvp,b@aJA45b=tV;.IB$HCud_' );
define( 'LOGGED_IN_SALT',   'gq56?/`Ec~#HEG/_|VJtN1FI<t3JCnp(f`:i)HgG5C)-issO; V DQr[R5I(d?a`' );
define( 'NONCE_SALT',       ' cW<v?Ll$+ #mQga,8LieX>e|;c3kcBX%h!S+z?f<{TA7r%Yty!n V>2PSxI_0XN' );

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
