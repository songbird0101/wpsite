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
define( 'DB_NAME', 'wp_site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?RasASa1&^@]@5DVm}v*ES$KJQl.(Z^Nj-w1uiO[be2BAdb85?*cVX)o]n+Bdv:a' );
define( 'SECURE_AUTH_KEY',  '1z,?7o6ufOkJIh-.x501.2OE`2~Xh!hIY?uQ7|yOG^0Yocy?y@Ry<PiH>_1Y&~n0' );
define( 'LOGGED_IN_KEY',    'O.*}[Y[@RM*s,32V_jy!^>G!I3&2]`#eL&v8?;Nw^Wl1p^B(3(9BicB0yv47Y5,!' );
define( 'NONCE_KEY',        'nmEs>?w}g05r_w+z82sD;]`s w^yu7l- -8C&|07eBFq~)C&H]$]-oAP++_hCP95' );
define( 'AUTH_SALT',        '$i*RK_k.jiV4uNA3Ya,L6U[bbcO,?0*mTy,3N5O!l6)#Jqw)Qp?/!?V~aPbf9!O!' );
define( 'SECURE_AUTH_SALT', '[ y:Q~EB[`5^;,pJ53t?1yOAX!DNju}$lTh0W@cThx46nOmWfhz`@_^@wl]@t$pl' );
define( 'LOGGED_IN_SALT',   '!C.>cHp!j<](k%l`GpWs`e~ZqR3jK%)P>4p<(1K>-d&klNUbC62TtQF0y:,|yP%O' );
define( 'NONCE_SALT',       '~>~{n{O6Hn`~lgb<L2yp{eC5]<xf7$zf!x{&E8-uZusU:%.8(pqBM~L (^,_cGKF' );

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
