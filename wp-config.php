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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'DataBaseHome');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Simbit09&');

/** MySQL hostname */
define('DB_HOST', '45.55.93.186');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'pX>MaXP4ijo-x<6ET49]d.?b)s3@*A{Cabcgs1Atg7zqWBX-b{X: qjA%r#9ubF>');
define('SECURE_AUTH_KEY',  '/K$(O;k5~o7t[:NC)tfE5T()zGBoXQSV_.iN8wI:JzGU<Js8_LxBwyp<E_)FkEbH');
define('LOGGED_IN_KEY',    'SG=@ [o1@g}7Y/o{[OCg-albLl5idwBccGTVrlKGW-WdKn:78S%a5(ISOLbSJ^g ');
define('NONCE_KEY',        'KM#gfYtaa>wRn_&h|$$2Vf-6u%wW#2FQy;@!TV& `z!@(nOgKuWDz_jC0[mL14#J');
define('AUTH_SALT',        'e19ry%yM[7fAxENZ%reor?gu[I+z_S5ODAB ~TarQNb@gwPYyR4[]>D+}EZ^x.Z6');
define('SECURE_AUTH_SALT', '|@MU=G|RE},yqm$ZsiV$ 7IHdcGq.qRk%a,R2jLm$aTL9H&^pc~3]*$14+5 yk`&');
define('LOGGED_IN_SALT',   'An4%gmG<<.W<jlOQo0y2L{+j@%.7&d =lE4yD-3^$[Q?$m`tLcFPa/V9)hBe2K.l');
define('NONCE_SALT',       'IoAChJ*THE4 SWe &LL+k/Mw53dmw`PPIDt1W&#^p*aJM<G{+d(Q#CT>nA(.FC7l');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
