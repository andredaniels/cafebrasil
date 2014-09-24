<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'trickdog_wor5184');

/** MySQL database username */
define('DB_USER', 'trickdog_wor5184');

/** MySQL database password */
define('DB_PASSWORD', 'kiEQM9eEklRt');

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
define('AUTH_KEY', '-M-?%-I[jENJhLF{{T|CCNBy$bZdo$!|yUF?-*u!RWj{L^FR}iN)TV$Hc^<)=$+lgL=fAb@kBFzu!|rQfS&%]bgmUg!NhQmT)ouqsA(StThRiL?Fk}dyy@IvPW*@aa[K');
define('SECURE_AUTH_KEY', 'qEDjbhni&Uu;&k%^w/_X!kfp*PXDFVGZcjg{>tRo{YtgDkzbD}d;}saGf)b{B[Hmtq{$w;xVpgKX{V_}-r?wuyyYuJ(B-UVy[-)[QZ(>tbU/h^iVDuEHY{u[HzTt<|uE');
define('LOGGED_IN_KEY', 'sTe-_/p?@dTv]FJ}&uUV*eqUCpt(=a}/o}{rSjE}j[ZK-(>Xkw^$omD/iscgJIkr=I@PkHVOAkb]YCejRXpB!jcp;lLQjzX>F--bz$dS!>Exvq-LfnfCjtFO%%sYeBw?');
define('NONCE_KEY', '+@Nt{f^[ULxdJQP<KoFN^yXl-Z!N$kC/W<C/frMSxjmDSR=C=;Hl)Bz]wwL[E(]aJn]CHm=-COtyKPc};s^s=u%hx!GABffB%og=}PpN!|W>J%P*|SUsje@vK$}](MV;');
define('AUTH_SALT', 'c!f?Y])JT[^d]gKpllhJYbtAWdxH!sP$]SClWMha/FWF|&<Xl@XcJ%T|yosdlwSj^{Jbm$(S]CEPuJ<cTplqTPfs{!CIlS?RxJM{@tu[|h+yQb+esf(_Zh>>B;Qj{XI-');
define('SECURE_AUTH_SALT', ')OO]W%@{g$)kIT?Td}UvxZrowt;MbEvGlB@GxqMAegu*PSLNUEM_Kx|Rn_=!bohyuJDIt?MvX/H;k[jReL@T]];D=HdOUxsXW}qEqfK{Q$L*QkxVP+C=QSZ=;c@C*||=');
define('LOGGED_IN_SALT', 'vxnZd&*<{JaF%sbF%mxvSr!*+ulwmUYv!rzvN-{H=!cR}=ZW/O_!BVd$PgaQ<;!>(mfl%MKaKOV&A({CG-UU[/l}k|?Sw?nVst|Bm!YkPVG$|bZM$|}YCPLrPCthi}{]');
define('NONCE_SALT', 'vfh*/SY((AkpH;_zW)Qs=cICk>@i*csj/LRSav;VsNNJWj+bJ]]xfi%G!KK((*<(EaLS(Ij(Kd}$+zB/gq{Euf]yIb{&odedgkfA@z[OiwnnFTfjH!)rQ|S-xoyMIQ|q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_gtxl_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
