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
define( 'DB_NAME', 'jadoo' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3?%KT{}Wyyd=Vn^hW~?sl.DkWhkMVxrygPgx%ov2jo3!peDd5N(lqTKR[J#9BhE}' );
define( 'SECURE_AUTH_KEY',  'CD0w[+47XZt^)n7d`Lh7G)*Q./158j}NKz?F5hIbT]-6P^^%JF{HlU,{8<XX#0aT' );
define( 'LOGGED_IN_KEY',    'hvL:6rJzcW<wX,LoBc,#N>fEN:o!V-5pLO)%>D=ihaT+:RV,|$|I:n$XQfuI7LQ`' );
define( 'NONCE_KEY',        ']~3w~B_hE_YZU{WN9^yi_PduQe(]%/n.!$r@3_c97R7Bw!d@BV-GNU_ZVn<H/uf$' );
define( 'AUTH_SALT',        'RT^x9y>t^_1?xn58z~5L^8S*PT&hG;t:3rY TUrqLBB3@Cr@#yo*CA+uU(>}ByV>' );
define( 'SECURE_AUTH_SALT', '2H3-nWBIguZO#veP>/6bdilPej9Fi*zNw%Xawp4HB-qL2RAvg>`AHR.=<UY_uphb' );
define( 'LOGGED_IN_SALT',   'tyGdK[CF#;Y~YDjX8(]`BeH4{<VO U2e-=);K/@;x.oj23u.Wt:wF[BWw< Ix3BL' );
define( 'NONCE_SALT',       '[fTn N(6~#i2LlgYFqJ^rh2G*D &l4;tB}%StyY8kd?&`3_5yb; wu$Iw^8)n%A*' );

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
