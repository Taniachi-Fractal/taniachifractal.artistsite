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
define( 'DB_NAME', 'taniachifractal' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'XnL^@owgcIE618=vJ4?NhO@%t+.!j6>M,5da@!sS$o!O<.k:AA|3kj&;`6u<%.X=' );
define( 'SECURE_AUTH_KEY',  'oQ9% RCZQbAQa|Xqsp)ZE7ulf}K.ngUN##D3M+$_c-uO^ULRz5|:_%%3S1_sP&*0' );
define( 'LOGGED_IN_KEY',    '4b7~Q{:lwJaR/mE$sWRk1dRHXn8uo@.nSZzg5H98MdNO--EH8Dvw=3zRqaa&b^m3' );
define( 'NONCE_KEY',        '6`0@s>r2eIafMrQsR67|_+v8SeK6#-{8/q/pUeD_[GcO|}=~O}!7b~!RX}hSm22&' );
define( 'AUTH_SALT',        '*IUWk,#%gT=V6z.|y*AfC:HbNV$.jn`#CK J0H.x5yGwbINH2d.|~gfcey$tgW4_' );
define( 'SECURE_AUTH_SALT', '4_>F<Vd&OmxO?;$pJhcKbuuSN17-x1C|fOoZVu^i29Gqgbb?gc3meefK%poSG<<o' );
define( 'LOGGED_IN_SALT',   'GA~`[Kf9C!vZJmjan^fZTZd`_K;<+,BgVdfnFO7Ew<Q}A.y;<srAP3vyS bHKiAc' );
define( 'NONCE_SALT',       'A[hu0yjY)*8F:)9sZ0bKo}]88~!CarJ)mX*Ku?aN!/rZzctJ^>zUY7r4IB=~{Gwm' );

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
