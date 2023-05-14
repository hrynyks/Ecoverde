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
define( 'DB_NAME', 'ecoverde' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'jDXvl6qv,+zTJq2Izf={I)[.~b]694lXraRy#$`*}8-Rqf<y$RtByRF03U`CORI8' );
define( 'SECURE_AUTH_KEY',  '<9y00<!`L5ou99m-beyR!n5%</9|dkVUXuSmUCXynNIL5MPp8L|N$}:eUY9 C>^R' );
define( 'LOGGED_IN_KEY',    'zHIWFU}* Hs^kqLy;Oc6C3CRkP>AsujsC?m,N/i-jm^V6cA?@BtDaQax@Kn<)d7J' );
define( 'NONCE_KEY',        'oHgRv; `cR_*cpXaPB_2y)_1IBN>2S(Wa<2lD`};wzI,MS)+{0m507!Vq=+~nqC^' );
define( 'AUTH_SALT',        'e%U.kGUA-TOLPx)IF4qW:hyVCo[+Q=%>l=R[lm6y*K:oBdFrcmU)e*61FrOR:Yq*' );
define( 'SECURE_AUTH_SALT', '/Z@<0{4Y97%/&.w|y}9b?82Fo3em:Ek/U%aaC[YA#g46*9#=W_>/USk(`6I^}f!e' );
define( 'LOGGED_IN_SALT',   'R=l=%oI3LR6^$Md<~+7_NIL#g{b.MRE4_rZU]a;O l:u_Ea |F2b.ZrrZLbGb/;c' );
define( 'NONCE_SALT',       '+yy90(9E#+JU3Qi*CaX^OR:?VyCuX6UZM#@I9.Wc(niKIhaBZs2O<^W/~FBKbW3R' );

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
