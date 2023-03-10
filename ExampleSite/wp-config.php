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
define( 'DB_NAME', 'ExampleSite' );

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
define( 'AUTH_KEY',         'ODr.t/Pg%&(ovu_hG[:W:n%.^/l07]zB0`7[n2d:xf[%2#ebp9ds}4Dnq0O;}[?@' );
define( 'SECURE_AUTH_KEY',  'q 6.^swOGk^Lpn2. fPj{e)GH[> hxuOFef(?5<WwKPI!Nl>rL/,k_=C?A[Z)0I3' );
define( 'LOGGED_IN_KEY',    'ZcakL9^j$m^K~RUN/LB&c,BLJ[+7b^_wK]<2v!vO:]@e4N}f;}W_#!|1g@f&6jy[' );
define( 'NONCE_KEY',        'erR?%A,p9B{ZTto]$]HZe_MKUMZ.zWj_iE%9wHr0oP|g9ioi]sKg5]RXn2;k|W`o' );
define( 'AUTH_SALT',        'B>mwTK,[)7qB?xAwmD @9%<iX%-e$_Igxr]RHl=aW?NnB%]L,spwd...FY7;MvKU' );
define( 'SECURE_AUTH_SALT', 'sC[S:.wCf&7y%s+-sOVUm.M:|y;9iS%$_^b>7^RV^sbOf51;PT77x6.ed.Vn-Pgc' );
define( 'LOGGED_IN_SALT',   '6F;@U;%2eURckLZ-kTn6bwC|FZ7i2*?0p6xlB[M#{IYfi#NX7C`vt;ec$m5*QJLk' );
define( 'NONCE_SALT',       '<@P<S)]w8>G.5 SI^T0KgMx`}LbV92O;w{LT@pe()}Pb<TbIujPy)4[jcSOeoe1]' );

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
