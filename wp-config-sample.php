<?php
	/**
	 * Configuración básica de WordPress.
	 *
	 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
	 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
	 * visita la página del Codex{@link http://codex.TechnicalTest.org/Editing_wp-config.php Editing
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
	define('DB_NAME', 'TechnicalTest');

	/** Tu nombre de usuario de MySQL */
	define('DB_USER', 'root');

	/** Tu contraseña de MySQL */
	define('DB_PASSWORD', '');

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
	 * Puedes generarlas usando el {@link https://api.TechnicalTest.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
	 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
	 *
	 * @since 2.6.0
	 */
	define('AUTH_KEY', '.XhkADqEGUxYEfQOU%rh;+^]gxRq4e|s}^pkMi44VYM<+H9|?BYe=Le:j:=yG5#=');
	define('SECURE_AUTH_KEY', ']GIw;tZO[<+4EC;/I!Gv(TO1vt[6{/shg$6!:yd@Z1pAofyD=AdQI?IBojr!>l%G');
	define('LOGGED_IN_KEY', 'I/!?N+yp6/eZW%ImsK^<]oS!lG1coE 8]*,I<Iei&1-xi ?p9s6xG_b16{eK!!iX');
	define('NONCE_KEY', ')];Y0q J,UCC1{8&`_-|PxYK58}i|M|ij!l]sqSU[oioe=y[WQ}onX:n=E~|#=3_');
	define('AUTH_SALT', 'z05tbL`l3w~@yb)AL42yoz|{Xh0]X26$g9HaL=Bskq0#5]5uR}#^=]lT:lZ2m},u');
	define('SECURE_AUTH_SALT', 'd1{`)qj4kI]ba9}VJCR}~QFNTlW#h=}U]_}8=7[s &ecw6=VG^uyB$ZJ=k=0FpUK');
	define('LOGGED_IN_SALT', '1;/~U`Ch#sA]I%P~VrcoJB` Pz*)/F+bRLlah9&P9qhwL~%axC?)ObX`Pz2sb,]W');
	define('NONCE_SALT', 'mL;0=|LnFMy2er_+=D!AbOCz{OksMKHu`09/@+$&0cJwyA)hBecJdVsB`?$0{6`A');

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

