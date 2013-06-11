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
define('DB_NAME', 'swferiadeflores');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'z1wnvq}Nj4:t!Uid(i2k^@XdaB9PMP|efrt0HgWQZqY?bo,[|C%2sZ:pY=9H V%N'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '%*mO:zFPv b9kxpBN[b;r`S)Nxv.}n83#~W+Y)>D>pMyp[%uuq>Xd[}4YZ&@5&Ck'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '!uj<o=i;Z98LYHpP/y*>OREbq4QzA@h]nn&vIoEWbnR<Q>3GRx3-S5Ahn}>eOTO+'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '}%Hc-yuqil2cspl*$T9;Hg|NV(wuCS{} ;?x]HBXNK~H7r_>o%H8<=#{3-ndX=bS'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'uiE+>[1gk?v:,{:,$<k?kUkEf80UXs<h,`OrI4L.^Li8|>~%>JA9~C#fJ.,,.b_F'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '`r7Y%yCD0,b``c!n:wD}UJHZVFKpm=[DigDTC)giLPZch[!I-&0u*Lm=}d8S1t9Y'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'M4#u{$fVHg7D2bn|-..HQd/UU4O<9[]_~5btr5*_5:G;NSrE9@K5Ko7-4AK*@@WX'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'g28eF/WgxEFA4Iq@><Y4Ix2zDfS&(Z,fo{tk:K@:aB3:57Q9=Sm*{Rd)xh_@_V7h'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'ff_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

