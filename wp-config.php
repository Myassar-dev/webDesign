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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'Be1)dtI|NISr1rEd|4Evpp5h%]_@yBTG4A#h=WA(,;BC:<A7|/y$)i=av@8Q[HDk' );
define( 'SECURE_AUTH_KEY',  'ILM1eTL`-|4;E~.M3B(:(7Sypnimo%(p!)vNN#erc(MqpR9UJvLqA{f5#I~:C|?c' );
define( 'LOGGED_IN_KEY',    '7z;MU?9xsp3d`N438 <S@I4GG;r`{B?DA%p&|Z^wKC29a{z/~wng59@w1.co%0/i' );
define( 'NONCE_KEY',        'FIuR$n]+ffL86;)D*gkS?N-* /I+K;7vyHb]kJ&+d9tw<Ig9z%L/0^JR!*:nMEP<' );
define( 'AUTH_SALT',        'IC`Tp0;oeRgi[T~B9A6H!h9#)rRF snp1yC^59,d~U;+f2 -}7XZ5]!$TS8OqO.0' );
define( 'SECURE_AUTH_SALT', '6wbY6nQ34:F:AJ@5u[L1$H75<f0@8c6rq>[X@k2Am7M%KeRClo9&e:0UI>a47%M`' );
define( 'LOGGED_IN_SALT',   'HA7}f@7 c,IH68gxCF=]QYNIAR0~r;Ouk+;A=g.]qPZ+[2>+CbR6xZ9ata<)]wff' );
define( 'NONCE_SALT',       '|prfB:31Rt)=@xiJZ$sjO(ltT,VLUh5r.K+@Px2?>LgHse}aM5d|SPtoHp}hQ$~e' );

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
