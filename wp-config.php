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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'centr' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'salon_adminello' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'piqtzlkFZ30FIrWR' );

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
define( 'AUTH_KEY',         'e^]%:6kXeC:(NmG}KRt%S0?w]@g_}r;>:>xa=nh{CMn`%w+fw:VQ!}}5yz34D/XU' );
define( 'SECURE_AUTH_KEY',  'gmZN7nXYF{O7,iX51~;t_;JF3!MajnY<vv!0>A[nC=2$7);{rP9v#{YtY!!Kzer|' );
define( 'LOGGED_IN_KEY',    '$*qa?D O/ggrRo=g~;5F5;dg_9305v!vn6^61`F<g^)oML1JJ;VFhU>fp.:pcEDe' );
define( 'NONCE_KEY',        'O *G2o9e.KZ8|%G0&aA]LWznNe `v8F-`>whIKs>d)xtc<{S#}pm$3FxE+#0pR`h' );
define( 'AUTH_SALT',        'oLLwK<Vc4!7C5@@59?jexg2-4%v m3V:H#6l` oKT*B6<jX{+icV^9r96I06&>Nx' );
define( 'SECURE_AUTH_SALT', 'UJ*#52Y#~3n$ETRN `m#82~T_u6v,_v1M;dH.>O[{1pWRl]<{ICKtF6unSr7-Rqc' );
define( 'LOGGED_IN_SALT',   '3#ygWclQjKR[!@oDbrzIF@wV tX?sGFq|qmt1RPI`Yw~Z!%%$>zt3za.Q#kVE:*.' );
define( 'NONCE_SALT',       'Xi[aDij-*3WrMGbe;a)a$C|G@K[v5$LoBM_q}c%hm+yw.@]QJnb5KL]RL:,L:)2m' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
