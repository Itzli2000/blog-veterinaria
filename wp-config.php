<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'veterinaria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '%VGpL$C1-K[:R(fnv.VshZQ-O&6E3AUog]^QQ}*`MF32WbtaX.a=I>sEVxtw#>(V');
define('SECURE_AUTH_KEY', 'AN=$e!zeIho;GpSs%=t)>fgtPpu@Ed%)Uj&9ZJG]kHdi?ZjH@}flp0ZjmQia10OX');
define('LOGGED_IN_KEY', '7(77pu#?n9g-pWhP}mqfIcL3^!q%4yjfu^Oitms1,Z~; q[(.b(nT+LzdPy007vr');
define('NONCE_KEY', 'Kl!n;WO^6N2c D#B_NN4jdzD>)W|y0x4<gF`Zh{&SNjn#.7f::`ElZf]>XG7$9!{');
define('AUTH_SALT', 'yiy]c53kd:}WN5k[>JBO{9w9$p|>P-uTQs(:{ONFYGYRmHrt2$H]le*q[6oeY}F@');
define('SECURE_AUTH_SALT', 'AI|{Z7Kf_Z,&~DJMe)byV7pl07q.5H4~+:$)QeX&!Rg0uM9V,Pc9YL}^90Hg_:CK');
define('LOGGED_IN_SALT', 'VienKZLe)%ZeL0.8/xNAJQU4T{,3MtDG*siY`!5h%S8o)_.vyp +n#xB8(YU[)!2');
define('NONCE_SALT', '=5)HLq0f^;j#Wk}4S8q}xUOPUz%.w)aOHL-.gqix8u+FgE6[,W8EdOfh?2o2=KY6');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

