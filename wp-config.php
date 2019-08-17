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
define( 'DB_NAME', 'wp7' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9BEQcn4GUlNev]~qjX_cfFMTK;=.{*QN04}O*RPUx;r_ Y.~@tvnr5[*g7?^31_)' );
define( 'SECURE_AUTH_KEY',  '}*w<o<BK_G{H||&h^Q>UFAVifK[3&f)._( 1F38wYk/-quAttDDNoP%ku?WBfSv7' );
define( 'LOGGED_IN_KEY',    'uu$u}fmo?Tn1##YG{,slJuTtQre-N;ut8x[9n[Xj0H$sI0+AipT DI!|n!r%>vjq' );
define( 'NONCE_KEY',        'luDQRQ:WB$+T)iW>N^>G.Ro_Y-TgAb0?}t=/^)l7Ic)InoZek{Hf-[tu^oG6{^Vl' );
define( 'AUTH_SALT',        'DRIINX?fMEBT(f{Px:Y~! 9<scC6</>#MAGmCa`->zwQ[]L;L#jwF5g$CVE^{N0#' );
define( 'SECURE_AUTH_SALT', 'QG_4GYP5{sF-Up_C>}0q5cv{*Nco-v_r{Z3Q.4E?C&Vk<^rRGfJj/~:Vl,:=ADcz' );
define( 'LOGGED_IN_SALT',   '@c}~okJ#,QcAiFb4c|cmTmaSN^]0E+T`P70W:B^1&wI(P(4ztDO;/g&a,flU-R@=' );
define( 'NONCE_SALT',       'Nx8y#$9#50`Z[3!LsuM}~vqBIk)>U6{],i;Ux_(oCq[<a>{tS2Ei)hJO#aFu!@J}' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'secure1_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);