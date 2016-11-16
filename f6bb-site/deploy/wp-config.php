<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define('DISALLOW_FILE_EDIT', true); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * Environment specific variables.
 */

//default to production
$server = strtolower($_SERVER['SERVER_NAME']);
$environment = 'production';

//check for development
$result = preg_match('/foundation-6-bones-bootstrap.dev/', $server , $matches);
if($result > 0) $environment = 'development';

//check for staging
$result = preg_match('/staging-domain/', $server , $matches);
if($result > 0) $environment = 'staging';

//check for production
$result = preg_match('/production-domain.com/', $server , $matches);
if($result > 0) $environment = 'production';

//declare constant
define('ENVIRONMENT', $environment);
// echo 'ENV: ' . ENVIRONMENT;

//define database connection settings
if(defined('ENVIRONMENT')){
    switch(ENVIRONMENT){
    case 'development':
        define('WP_CONTENT_DIR', '/public_html/f6bb-content');
        define('WP_CONTENT_URL', 'http://foundation-6-bones-bootstrap.dev/f6bb-content');
        define('DB_HOST', 'f6bb-db');
        define('WP_DEBUG', true);
        define('WP_DEBUG_LOG', true);
        define('WP_DEBUG_DISPLAY', true);
        @ini_set('display_errors', true);
        break;
    case 'staging':
        define('WP_CONTENT_DIR', '/public_html/f6bb-content');
        define('WP_CONTENT_URL', '');
        define('WP_DEBUG', true);
        define('WP_DEBUG_LOG', true);
        define('WP_DEBUG_DISPLAY', true);
        @ini_set('display_errors', true);
        break;
    case 'production':
        define('WP_CONTENT_DIR', '/public_html/f6bb-content');
        define('WP_CONTENT_URL', '');
        define('WP_DEBUG', false);
        define('WP_DEBUG_LOG', false);
        define('WP_DEBUG_DISPLAY', false);
        @ini_set('display_errors', false);
        break;
    }
}

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

// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', 'f6bb_website');
define('DB_USER', 'f6bb');
define('DB_PASSWORD', 'N#skj&98SR%Jje');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LE9xGuB4,g(DNCKx6>XF(d5A<TJx:`mqQ1^~HC-bqV?t<6FfWpbTb=!3IO3c&^5K');
define('SECURE_AUTH_KEY',  'ti*n^$4Yqnh_+.;3@P_c&55jG|C I.xcELuprLeYXI[^]X%(iUhs84*V~%y|f+|_');
define('LOGGED_IN_KEY',    ',M*E%d3D_U}pt2L231@|HqZ/,PWF7mv@Jj2.^Vn5|X}]}iBGJ0jKDeafw>_nhaOf');
define('NONCE_KEY',        'v13L[&-|j4bPiX+)Ne`Q4~{5H|r4S:r(-G529bKO]|wVs+io593a`]qI<Jb4tz i');
define('AUTH_SALT',        'l|>O>g]+jYQZIw ,Z!1ST6!#Spr,;+<r+8|<^UN?b;!4Wi&{9oYZ[:$%8zO+6jl,');
define('SECURE_AUTH_SALT', 'Orw&Tp;G`Un`eVW[`0sJzyhzS&Jc0w!S-v2Df_a O[9Dw.Q$+]qAV!iXr<;PE,Bl');
define('LOGGED_IN_SALT',   ':2ufQ ?B/;S%EK9zdoTyA^alz%o-;Bi.7|K0^y6XP<M=imT|+##V8q0aT[+w7{}U');
define('NONCE_SALT',       'cd8A21 3Hiq-LdG93Wed8,*i&_~p+Br,dY!5/lQ$:IK/|Ctsd*#}P.&5Y_lg.LVc');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'om21qxlqh_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
