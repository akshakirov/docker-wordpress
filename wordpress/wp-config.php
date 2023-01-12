<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'N8cj2d0c1' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'mysql' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c=bPp<K)[>^KPc.)GK+N0V_Y)#Fj=sAS*G|Q)}czr9Er$vdqovE]]RYXk4V)nwh^' );
define( 'SECURE_AUTH_KEY',  'wnBC0e]jrIm-a5==OLSf]%xG)*;Kuxb>V9[+4-^_?B)iG{SQR{k]j }(~HXR4HBk' );
define( 'LOGGED_IN_KEY',    '4CY~H$JSa9Fv(R5U;:W~sE=Xm$+|(-qK~JbY?#i#n1<LSha@Z+b?Jhz5/oM!y;xx' );
define( 'NONCE_KEY',        'i|3`l8_gu@;3yZ7r_5-Nc]Vg_^l@J8?PJ?-:+-?=FUvdLBI|v?ya)DCZXW%M{Cgc' );
define( 'AUTH_SALT',        'NcFoCYx3)Io(6K;)i2t[PX9:y!A42CJ}n+0RY_i)KDk9bDDL}&n/< JuO ^me`Rc' );
define( 'SECURE_AUTH_SALT', 'Bo!j+r7m }Zntd= }koBFDy$_$Ve3:|7s|T?3[=$}x3#U@b*64mS}SkGf#pRhm7R' );
define( 'LOGGED_IN_SALT',   '>:<A!C$>_qjfGL2jRf[,q?{F@eC$#3]Y:cu&pCpkk?Sk+r>#%FVe<2/:?J|*?@{%' );
define( 'NONCE_SALT',       'bsz0]0zu[7>h l t6PD|Y~Of-S7<XA*`IF3W{ uS:SX0^PHYy8~;ioWdze hH~7T' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

