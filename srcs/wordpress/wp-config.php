<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '21server' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'qcraghas' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '21school' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rp989c^|f1j|<!0h#j/p/gjamJP+=4rd{`Jy7,Z]b|/nekL?25~WH9._c+I#!h[^');
define('SECURE_AUTH_KEY',  '?uV6d-QC4qq>V!mj)j4&m*I7Mz6},Xbd>5~OCQuEmliT1X1_a=)nF8W;q> =p!!Q');
define('LOGGED_IN_KEY',    '7Be:x90Vw,p>vS-bryro/pt3zmgvo&LYwO>i1:ejV.z3O=*wPkv.7vvCA`2PTTk[');
define('NONCE_KEY',        '@iu)kV5?%cp*(>O}ALGIPPLIA!`{i74A )vtXa4T{os?^M~dJ~*nZ{~MH+0hNyde');
define('AUTH_SALT',        '`FTz|BCcXTNRJ5)oz~Y]I_}] ]B/_]j<i`lSmpq bY=<d|4v&ILF5!<RX3O;beT.');
define('SECURE_AUTH_SALT', ']+kEbmoxt)u);Gb9 ?D%[bTUoa_4r9O]FCi;@4`0lc3[|!lYZV^07JnV]|W/1C<u');
define('LOGGED_IN_SALT',   '3+>S, +Cn6ZG}%UfJPKa},SQ`g^->#*)S6(nX1u+-9xuTjpR[fl3-bgr=SaT4;C-');
define('NONCE_SALT',       'Iln5Q+IWcR}`GW]ek-.rxVFuKU7iT^in2i)Tt|dW:1*bit8U +ITY?^EZ0Bh-W]b');
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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
