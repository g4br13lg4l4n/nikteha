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
define('DB_NAME', 'shop');

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
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '|5wIqhL/x[1!PdCl&wa+JRHa#}k6W>JCKnun.t+DtVKuXeyk(j6IFW23QvVr;sr<');
define('SECURE_AUTH_KEY', 'og&LHTV}fo$F4Y2.o@kWMyN3=_=sNhN2H* P#=Qp]hG!!@BMb0ad(cY,gGahYFR5');
define('LOGGED_IN_KEY', 'ace]VceG!$2v/XJgVXIvA/V0?WN`M7.UONe1#/a(n:&ohM_o}iO=9@J{9jD>la9p');
define('NONCE_KEY', '$89(iJ+/nu0f}-9OS.EvUe`7_.A.DGbhthP~J!`CMHwUQmKb!:id+AY%/-R}$g{p');
define('AUTH_SALT', '4IV775ft859NF.zlRUJ0WEXz p.MX&qsRy9co:vZzPs aO|:%5EC/8VJ)1iU{}bP');
define('SECURE_AUTH_SALT', 'SN9z dpP}y%O><ejD u3wvT@hvb1d/;)`4KHyAYf9f>GKln8)=oA[0iEnWm<C)26');
define('LOGGED_IN_SALT', '{rZKY$=LBmwjR{b$FJ,/aZ2a.E5v8)D2AtQ^_.-Y=hO{g=*P_l4R*XrUPVxLMN_m');
define('NONCE_SALT', '!)TRz!%,)m6&l<A0wXpj1_~*nJLX-7Et*2gkpD%j<M_z`9eHbko|-9^VK~mC3NY^');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wpsa_';

define('FS_METHOD', 'direct');
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



