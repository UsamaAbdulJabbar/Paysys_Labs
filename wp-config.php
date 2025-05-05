<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

//Using environment variables for DB connection information

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_") !== 0) {
        continue;
    }
    
    //$connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbhost = "localdb_new";
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $connectstr_dbname);

/** MySQL database username */
define('DB_USER', $connectstr_dbusername);

/** MySQL database password */
define('DB_PASSWORD', $connectstr_dbpassword);

/** MySQL hostname */
define('DB_HOST', $connectstr_dbhost);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



/** Enabling support for connecting external MYSQL over SSL*/
$mysql_sslconnect = (getenv('DB_SSL_CONNECTION')) ? getenv('DB_SSL_CONNECTION') : 'true';
if (strtolower($mysql_sslconnect) != 'false' && !is_numeric(strpos($connectstr_dbhost, "127.0.0.1")) && !is_numeric(strpos(strtolower($connectstr_dbhost), "localhost"))) {
	define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);
}

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
define( 'AUTH_KEY',          'ZEGou1fi,3}$]_!=s$-W1F<@g6jPVN)%u`zu[&%+B>u)lt_J4kG=)$p*)onWWrdI' );
define( 'SECURE_AUTH_KEY',   '[E7~@BY`!uI 9`F20wJGVc`;yiSw-6PH{oBi4~9TLW|tWJ_($j-eO=4$J-a`h(0D' );
define( 'LOGGED_IN_KEY',     '&/OS; `g0m:$,yknWC`-t30P#1sQqW_a2;qxmx3PG.;[})p~me)KvPj{5ige-7ex' );
define( 'NONCE_KEY',         'T8N+-pP/f @UNDX-#+m~zmVZ?TpxQ[i7T7qT/VM|j){(</i}OnVtu.1uYV !2{R4' );
define( 'AUTH_SALT',         ')+&K.!D28N-xO]s*3zDbodNLSxNHR;2K{M~W)kQC]Iv}ko+]>&5?Y3GNPf[eI5H_' );
define( 'SECURE_AUTH_SALT',  'H/<D-vVW*=yRMA7*y:1|`KbAh4pK( &<>  r[AN>m{l,gmj/s,tB<-<T*k@G!-qG' );
define( 'LOGGED_IN_SALT',    'zVwT}8^D,seECfH}yQ7Gl!$BeR;=![QVqM:<e9yGST| n?dXBhvuyx4r8_Io]?7K' );
define( 'NONCE_SALT',        'U;63~v /*okI_&?L q{<r<c)Vi9N#4<hzqUN5b^oi|j,rqEjdq-FBPeFOw?XN$SV' );
define( 'WP_CACHE_KEY_SALT', 'x6(EOPd4mUc#z5rYLXrAKEcm0]WO!M_ERe2lLR[u`)pW1F^)wb^x!AlwrqEU}QYn' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '75db83bc72a9f4262193207408c66c15' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
