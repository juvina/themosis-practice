<?php

/*----------------------------------------------------*/
// Database
/*----------------------------------------------------*/
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'wp_';

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/**
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service 
 */
define('AUTH_KEY',         'GY0&R=0#}k`0uT}H_N@;D7?_F|WvbVKSdhYC){g<&bP]SJT,@a*Z0fvsFp/y:)a&');
define('SECURE_AUTH_KEY',  '=7|gV<`gj0vGUwykB00qTJ<{#.4tl3)BbNT&eP`#M3K1~4+]TdgHPf]A<&oX8h$q');
define('LOGGED_IN_KEY',    'kc7sJ&FVUC=ljnvo?FC|9-RW v^4|GjT)7jFf:r#4$[72k1BobCS,m*!BRp%z<-~');
define('NONCE_KEY',        '5<mlvM32CF2/hKTp&D|+f}A-B 6<5`GU6`mg:)x4S++yKR0(2q*fmpDS^|d--Wp<');
define('AUTH_SALT',        '}vLG?:Lj%k|cd%9oPg$tS6nzvY6E1N{o:~Qc5~)%29y2O75z Y<,9/ii,l&wqrT.');
define('SECURE_AUTH_SALT', '@]+*|j|QyOm9*EJD~ j)$i_YSzV<SJ?!4#|nP6;k.?tna/ZP~F-<rBMzrYDSiw<8');
define('LOGGED_IN_SALT',   '_4?_J(V`$.urYX^dl*xq]ZB4_7X=LI;,8hBH35*1&Iw{jVC$qEl3D_JHJqX-A1QH');
define('NONCE_SALT',       'ASazL;fG7=>9dqYH+v/q}NEYf&]Hx9|8,_[PN8l>6kNx;:}{l3MZLvxS,8u~Rs`J');

/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */
