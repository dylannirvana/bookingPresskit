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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'connolly' );

/** MySQL database username */
define( 'DB_USER', 'dylan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'olorin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#=21#[c0yt2K81];`. BCV[=!.]T2]$Aoi76,%Q4?;PwzHU,U$+Sy;J$dqv~Dx>U' );
define( 'SECURE_AUTH_KEY',  '>o8`G24r/#-d$?rg|)%Kv{JhaecVy#dg}P9dm{&*{fj(l(?22m1&_kvgz(bFe-<+' );
define( 'LOGGED_IN_KEY',    '}hOXsn.d{f8uh{66OGm$OU8B0^!e~Srbpn!R^iDdxV*z/by]E;Wht}dob;NPjqJ%' );
define( 'NONCE_KEY',        'y~,XFCXBum[W^6+zwFoizW#c3ky=R+Ay+h7prZXNtc[MLa+8at-&Ty2YP~k91*CT' );
define( 'AUTH_SALT',        '0{n8BBul:HHBwxNa1 84D.$-^m*^=!.bbEVQXCa_azXp{&Y>F V1b%SlwNOYTM#u' );
define( 'SECURE_AUTH_SALT', 'vE=.~vd3#hSoi#1@6tPBr|28_n8i!!?-H@p =pu/`LVe3%hc4!KT%*.?Mj7gt^ G' );
define( 'LOGGED_IN_SALT',   '08a7<1^q;RZ,55$a?k,>+=q;2vA,[zRT%/R|!hl;p5}x]8a:HE7N)uQ/!LjL9d6)' );
define( 'NONCE_SALT',       'X:f6_Y5?:-V04J|Lbu)z=[b=^)~uo-(>x9okdW<2~wSt`hpmpb<|KDIPe:@S1<<s' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
