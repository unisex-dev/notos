<?php
// Todo metido en archivos individuales en la carpeta funciones para no tocar nada sin querer...
// ep=Entradas personalizadas
// mx=Metabox

// Funciones Generales
require_once( get_template_directory() . '/funciones/cabeza.php' );// lo que tiene el header
require_once( get_template_directory() . '/funciones/autores-funk.php' );// funciones pagina autor
require_once( get_template_directory() . '/funciones/gtmb.php' );// Compatible con gutemberg
require_once( get_template_directory() . '/funciones/personalizacion.php' );// personalizacion del sitio
require_once( get_template_directory() . '/funciones/migasdepan.php' );// breadcrumbs
require_once( get_template_directory() . '/funciones/logo-login.php' );// el logo del wp-admin
require_once( get_template_directory() . '/funciones/updater.php' );// Actualizador
require_once( get_template_directory() . '/funciones/woocomercio.php' );// Compatible con Woocomerce
require_once( get_template_directory() . '/funciones/cargador.php' );// Carga de estilo y Javascript
require_once( get_template_directory() . '/funciones/compresor.php' );// Comprime estilo y Javascript
require_once( get_template_directory() . '/funciones/walker.php' );// Menu del Sitio en Bootstrap
require_once( get_template_directory() . '/funciones/miselaneo.php' );// Elementos que sirven para diferentes funciones generales
require_once( get_template_directory() . '/funciones/categorias-funk.php' );// Link Categorias

// Funciones de post
require_once( get_template_directory() . '/funciones/extracto.php' );// Personalizacion de comentarios
require_once( get_template_directory() . '/funciones/paginacion.php' );// Paginacion... si se requiere
require_once( get_template_directory() . '/funciones/barralateral.php' );// sidebar
require_once( get_template_directory() . '/funciones/cuantosvieronpost.php' );// cuantos vieron los post
require_once( get_template_directory() . '/funciones/buscador.php' );// Buscador
require_once( get_template_directory() . '/funciones/ep-eventos.php' );// Entradas eventos
require_once( get_template_directory() . '/funciones/mx-inicio.php' );// Metabox para inicio
require_once( get_template_directory() . '/funciones/mx-galerias.php' );// Metabox para galerias
require_once( get_template_directory() . '/funciones/mx-fechas.php' );// Metabox para fechas
?>
