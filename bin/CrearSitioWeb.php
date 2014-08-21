#!/usr/bin/env php
<?php
/*
 * SMIbeta - Crear Sitio Web
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Soy
$soy = '[Crear Sitio Web]';

// Valores de salida
$EXITO=0;
$E_FATAL=99;

// Cambiarse al directorio por debajo de donde se encuentra este programa
// chdir(realpath(dirname(__FILE__))."/..");

// Cargar funciones, éste conteniene el autocargador de clases
require_once('lib/Base/Funciones.php');

/**
 * Páginas Estáticas
 */
// Cargar el menu principal
$menu_principal = new \Base\MenuPrincipal();
// Cargar el mapa inferior
$mapa_inferior  = new \Base\MapaInferior();
// Cargar la plantilla completa
$plantilla                 = new \Base\PlantillaCompleta();
$plantilla->menu_principal = $menu_principal;
$plantilla->mapa_inferior  = $mapa_inferior;
// Cargar el impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla;
// Imprimir
try {
    $impresor->agregar_directorio_publicaciones('PaginasEstaticas');
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}
unset($menu_principal);
unset($mapa_inferior);
unset($plantilla);
unset($impresor);

/**
 * Página Inicial
 */
// Cargar el menu principal
$menu_principal          = new \Base\MenuPrincipal();
$menu_principal->en_raiz = true;
// Cargar el mapa inferior
$mapa_inferior          = new \Base\MapaInferior();
$mapa_inferior->en_raiz = true;
// Cargar la plantilla para la Página Inicial
$plantilla_inicial                 = new \Inicial\PlantillaInicial();
$plantilla_inicial->menu_principal = $menu_principal;
$plantilla_inicial->mapa_inferior  = $mapa_inferior;
// Cargar el impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla_inicial;
// Imprimir
try {
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}

// Mensaje de término
echo "$soy Programa terminado.\n";
exit($EXITO);

?>
