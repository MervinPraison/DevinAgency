<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'praison_wp_db');

/** MySQL database username */
define('DB_USER', 'praison_wp_user');

/** MySQL database password */
define('DB_PASSWORD', '********'); // Sensitive data redacted

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
define('AUTH_KEY',         'tb;-`-ZM$Fch^C|Fxx@e{-LO.gR,Tmi3TIY&A3mdEqdr:?f[1&]r}1,mo&$;>^6m');
define('SECURE_AUTH_KEY',  '%G,PJQ1=|93~Pn8.{m[xAb).@Mk7]Pi[/?!/6>`Lx6*urrW+4q<NrsY;a05~bAtu');
define('LOGGED_IN_KEY',    '0>*9gIlE%]Xc?>WrPNPf5H8.{]l9K:+1fs)^^(a|9X1wBEa;QGn+K![3&^P1q4,P');
define('NONCE_KEY',        'Jt.BxF6~o/LhiNHnF ^i8=>ni8O$vZHm:}ZYf}`XRr=;-15k=)BW*^.JnEtg}0qb');
define('AUTH_SALT',        'd^OkR>[|mT}r8/rj]XpfMAv9/1L8!4)Mr-L&R/AbmN>BTnm(W(UZTlA4+~0WOpzN');
define('SECURE_AUTH_SALT', 'OzNJ#hS-tyt4P:2Yb|nqYScg)<,eN-79K?F-@#,iQ6;Fsu>h:r%A/2BEEnA;(Tct');
define('LOGGED_IN_SALT',   'bO${]wnsc0k|4v8A_JkTg|f9y$>UppkAshG<N$_|~^WtxNL%%^SZX}3)EA&pHsc9');
define('NONCE_SALT',       '>JF/H)qOC,<Z_)e%|?fOM$~*C-0sP0Z-RYk[;19pt|kbgz$FuDMVMt!1=6haeXk.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
