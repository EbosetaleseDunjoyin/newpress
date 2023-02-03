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
define( 'DB_NAME', 'newpress' );

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
define( 'AUTH_KEY',         ':~vEUtLJ6fk *=q|`E)=Jj72$`5D&Py=-s7b|` Zx3~VhNyC#A&@Ih2H?}JoPc-j' );
define( 'SECURE_AUTH_KEY',  'G772N.E/7J(*3(9~]w=L]Q@>NJ<o`A$V:6|O[>mWX0l(^o=WGN/pG=Os4(_V@3/+' );
define( 'LOGGED_IN_KEY',    'LwA|G#&fratw?I/;m6gv0hUc4(!<4?Y@kB+MkX<J6I~(s k[%b2f=,<J::lmTt`R' );
define( 'NONCE_KEY',        'ixew}ns#i>)O)pBkmb0FMD;[qAO_$TceReFmIoQT@*8 )KZ1|z`XV%0-8 #7U3.W' );
define( 'AUTH_SALT',        '_K& H~E87c2I:YH^`Y{jw$x-Pc3Y4nGB8_V<-H0*2).C$WmI?_5_-2m4b~1{m6lF' );
define( 'SECURE_AUTH_SALT', 'uu$^/[U?u;/u(,e5rxMmM4@9EMs6Fr*GC!uRiHFIojCe}ImxcRgWUAPRcI.M~w3v' );
define( 'LOGGED_IN_SALT',   '},QWtmR[&xC;)%M2QT7Z8M?tv&5&Dh@iId9+jfqnlTG@q:@(j9wU>Z|#ad?GhS^J' );
define( 'NONCE_SALT',       'evaw~rw,=(SBjNbj$WO*|tX4jHe#;ZET0*zr!eN7pvPUElJWf|_iR0$h36QLZp>7' );

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
