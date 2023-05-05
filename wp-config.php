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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'saf_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'X+wI`QHIzuHk}pp7!?9;n GiC!9[_rIS9=-/C+xS9JUV|1`A;HKmFvg)W|=#]+HB' );
define( 'SECURE_AUTH_KEY',  'Y2N5j{5)so`/^#(}uj3G`7PJsCJ,:9o0:yMZnh-4x`kV~|GN2}x(6CdS#A4Q{5Lv' );
define( 'LOGGED_IN_KEY',    '% Rs-<Lu> EeuTD53a XPTvja1WF6_!!vL]x8dWy65<o=,pS?Z6OQ)>0&<S4N~a4' );
define( 'NONCE_KEY',        '+F`E%r^&,=Ba)G:N[uu?=k$A+7QrRsj+L02Hi8>PwB0Qb1RSy$Irx,kn%z)|%8:a' );
define( 'AUTH_SALT',        'qIVtg3-,Jr9w.=p,$#PJ#9}DKL)N_1h}#su$(app]GVX2]/SA@yJHn0Y04`09V^4' );
define( 'SECURE_AUTH_SALT', 'A<8,vilrFSDE!*zUYWam-TW)lvcc7Bf|M2^YJ&X1{KSEydnw1)g%2$2kFW~)!)Ju' );
define( 'LOGGED_IN_SALT',   'drg?f;o%LOPK:omN g<fg]=rQ5sGx(Va7`(.TjoN_?CsC2n6g-Z~Vw5}oKSYIR{=' );
define( 'NONCE_SALT',       '?37Eaw,{trK@uD3s&y$q{}hfn_c`Nmf WQ*0~`8rE6UM3uJ]65X;`[tT,*>kDGRq' );

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
