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

define('DB_NAME', 'angelsdt_redes');



/** Tu nombre de usuario de MySQL */

define('DB_USER', 'angelsdt_redesu');



/** Tu contraseña de MySQL */

define('DB_PASSWORD', 'redes1');



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

define('AUTH_KEY', 'yxeXmektVa$p_EpH$#v]/!=^c|-K6$L1v$~lS7{PY-%|C+1oZfFsd5*DZQe*L!X4'); // Cambia esto por tu frase aleatoria.

define('SECURE_AUTH_KEY', ':-+ |n=z*cc~WpkVb<:P@jYAFQImdYakRszdYIDGgl[Mjs+d1^,mk=ymTj-GA{he'); // Cambia esto por tu frase aleatoria.

define('LOGGED_IN_KEY', '<)n#D,hXJDU[k^~2~M7mXt3H5ZR<H|K)/ }tc81@g;)@Wco+Qeo:kF1xVOBJ~ j+'); // Cambia esto por tu frase aleatoria.

define('NONCE_KEY', '~@2Qc)<Tgpn63/kak2N[Pnl#N&r+oyAaXUOYaa/LJ&f4Yr<P_,0y}tz|v/Ak+d-5'); // Cambia esto por tu frase aleatoria.

define('AUTH_SALT', '?`ayo2=EXPOX-UZW@|H:~3qix8X^Y>{hE:_X~=[4jhI9fjf4t`+`IFP*KS{_rIMa'); // Cambia esto por tu frase aleatoria.

define('SECURE_AUTH_SALT', '?tcxCq](D>j?7^$1Qp:[O-dMcSk|[#^/DVa<X|Y7G*~>x69|46i@9&K:8%Ig,Yw/'); // Cambia esto por tu frase aleatoria.

define('LOGGED_IN_SALT', '2AsZVY2^n>Ls;cF&9@%s_& ,&i~|2nGr%O?|U36Kx+y/U5zq~%cZ%M*uI)O8D]*n'); // Cambia esto por tu frase aleatoria.

define('NONCE_SALT', '(*rt] oN|2/.b4!N0pA2:O1?Jman: X#9cRh--|v&regsw1WC-_^w nqc|=_R|jp'); // Cambia esto por tu frase aleatoria.



/**#@-*/



/**

 * Prefijo de la base de datos de WordPress.

 *

 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.

 * Emplea solo números, letras y guión bajo.

 */

$table_prefix  = 'wp_';



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


