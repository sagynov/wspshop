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
define( 'DB_NAME', 'wspshop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '10121956wsp' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'c`)SB@4QPN^yG]}Y$@i12Vfp}FSr|&1Ir`)0pB!R9d>1$&e;@=wuUocO>;QW0/~j' );
define( 'SECURE_AUTH_KEY',  'N,U[FA/WQn?H[TfQv4(WLu<f-!cQ1>kTI_5d;)2|2IWRW?<t7ZMF`H1d:u|hxn}!' );
define( 'LOGGED_IN_KEY',    '<@g+F8GT|i=$UayWhb}G}Luf[J)X58UHPex6~6s(hM~Dkf2pbBis~l6%v/v:$[=}' );
define( 'NONCE_KEY',        ';Bc8JapDy2m5^7~]FfYM2ai}Lrpf&+d=>0pKsGn2hE8](8>V/zH- Eox5M/=q|I%' );
define( 'AUTH_SALT',        'Y(+_9@Q,O7:snc<Rk rlCd6~]W,(&}K|E4lhq:6-CFA%-[H)?0U](u5mQ8~aQ7am' );
define( 'SECURE_AUTH_SALT', '7*>JAajbyL2hTRZv(iTy@$-7LlmyzHc zTxMs$s7|A,tnMg$lw7lR^FdI^vc3<F<' );
define( 'LOGGED_IN_SALT',   '&(`dZWr_Ofc0tU({V|43Q)ry||6=&^O2X%HRG<(A)yHHA_U{.Zg>VpElz#}_`Hh1' );
define( 'NONCE_SALT',       '@N>L)B5!To}Z%B46Udo1Mxygt:y*h88V.+=^9Ef,zVM]-JhLB5dTGfZ[vKxJc~s-' );

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
