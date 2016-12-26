<?php
// Attempt to load a localized ENV file (.env.php), which
// will contain the server connection string.
$path = dirname(__FILE__);
if (file_exists($path.'/.env.php')) {
  include_once($path.'/.env.php');
}
// Gets MySQL url
$db = parse_url(getenv('MYSQL_DATABASE_URL'));
if (!empty($db['port'])) {
  $db['host'] = $db['host'].':'.$db['port'];
}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));
/** MySQL database username */
define('DB_USER', $db["user"]);
/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);
/** MySQL hostname */
define('DB_HOST', $db["host"]);
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
  $_SERVER['HTTPS'] = 'on';
}
define('AUTH_KEY',         's@j0[@i!H@L!d2ol{wVu0.N OIIuVH,aECPn-NGLwt=|BbaCMH=9|<--#^&8TM|>');
define('SECURE_AUTH_KEY',  'sZr)&#mIy4g;&$-_.{1=W33~+et&+6Q|#=W@=:GMkK{,<x*:(gtpl+-3M?FVoK1D');
define('LOGGED_IN_KEY',    'm~/`;.+t)mx|Hco9KQyYB6h|?G@f 1+UB]xQLmv{A$4Q:-^}M# D/|`rrTP(z$I=');
define('NONCE_KEY',        '4ul.fr,G6p,d*e8*sKuz=ViBO844JgbM<Scn8C1UAU|6/+I|u_^6H;)y_CF&bK0|');
define('AUTH_SALT',        'vjNuD4Q~h:QxGo.2d+D|Z_i/&RrVK_bN(;$ %q1C-+=9,[_Z6-F%Zr9wJlde|WQ+');
define('SECURE_AUTH_SALT', 'ZPQjaf:<Rc[N<|yLNz@l${TILd4x}Kb3SZP[3a@xg-B):X@YI9N_+)?>{b`AFqg?');
define('LOGGED_IN_SALT',   '?6:7E5ix+_|D!s%te_tO=0r!<U`V5K:^-Xw|?82vx2eN1i(hz{sz-xmwh`R/zphw');
define('NONCE_SALT',       '7xd.|HTR ,d8vavAYfWcn|o6HF,4|rz1wX#+7+|_]xMaM1YI%]6-Pb[Iih//V~%k');
define('WP_SITEURL', getenv('WP_URL'));
define('WP_HOME', getenv('WP_URL'));

$table_prefix = 'wp_';

define('WP_SITEURL', getenv('WP_URL'));
define('WP_HOME', getenv('WP_URL'));

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');