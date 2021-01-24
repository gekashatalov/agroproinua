<?php
define('WP_CACHE', false);
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'agroproinua');

/** MySQL database username */
define('DB_USER', 'mysql');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         '(M}w%12JP+$+{HoblQK?PEDtPH@&2:&#DSW5:~3GFj?4$WSqa345M @;MKJ0LmiK');
define('SECURE_AUTH_KEY',  '.sgHthn)-w--3p9+,V45}4$pl1_%a`HT4Ic`0]yCLj_$p+RN^~9xNk84|MBPnyO*');
define('LOGGED_IN_KEY',    '(q-Z!kl0qu3vN+BK.l$ zoY[pP+|Q[a|^DZ%9!&P~iFN~w~B}y7.zH~o`oQv;8lQ');
define('NONCE_KEY',        ' }f-w@0R4o,(}Rd9n{J$yS0op3RSRmx/z<QIY*j[Y`J08U2.hi2h-j8|:!t_%>v-');
define('AUTH_SALT',        '+=.4#awJOoEUq-jCkW9z|2eeC=+|-90x5K=Fqe>kv$]<NrbJ?A)vb}T^c(wq2#P`');
define('SECURE_AUTH_SALT', '(uf^yKc!.+:~ ?UP[.v|D3vVKMPFqMmJ*2k|Y}cC>@G:Ih>O,9;mx[4C~hO9*~E=');
define('LOGGED_IN_SALT',   'brAMq-IP;od)kPzguE$Adw)Zg<o[xkaTVBy[},HUsmI#i.suG-*`T@GZD$[`U3v-');
define('NONCE_SALT',       ',~BP>gP0GfI6 HETR703&14}b:(W>LC)KYgA_skNOC+E2jE8 G^B>.@-1;T} W:j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
