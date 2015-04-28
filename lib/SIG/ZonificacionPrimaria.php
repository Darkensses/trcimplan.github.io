<?php
/*
 * TrcIMPLAN Sitio Web - Zonificacion Primaria
 *
 * Copyright (C) 2014 IMPLAN Torreón
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

// Namespace
namespace SIG;

/**
 * Clase ZonificacionPrimaria
 */
class ZonificacionPrimaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Zonificación Primaria';
     // $this->autor            = '';
        $this->fecha            = '2014-11-18T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios
        $this->archivo          = 'zonificacion-primaria';
     // $this->imagen_previa    = 'zonificacion-primaria/imagen-previa.jpg';
        $this->encabezado_color = '#008000';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Mapa con la Zonificación Primaria';
        $this->claves           = 'IMPLAN, Torreon, SIG';
        $this->categorias       = array('SIG', 'Zonificación');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML
        $this->directorio       = 'sig';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Información Geográfica > Zonificación Primaria';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // Instancia de SchemaPostalAddress
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Torreón';
        // Instancia de SchemaMapa
        $mapa                    = new \Base\SchemaMap();
        $mapa->mapType           = 'VenueMap';
        $mapa->url               = 'http://implantorreon.cartodb.com/u/sigimplan/viz/4dea92fe-70da-11e4-9a09-0e018d66dc29/embed_map';
        $mapa->url_label         = 'Ver a pantalla completa';
        $mapa->extra             = "<iframe width='100%' height='520' frameborder='0' src='http://implantorreon.cartodb.com/u/sigimplan/viz/4dea92fe-70da-11e4-9a09-0e018d66dc29/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>";
        // Instancia de SchemaPlace
        $lugar                   = new \Base\SchemaPlace();
        $lugar->big_heading      = true;
        $lugar->name             = $this->nombre;
        $lugar->description      = $this->descripcion;
        $lugar->address          = $region;
        $lugar->hasMap           = $mapa;
        // El contenido es una instancia
        $this->contenido         = $lugar;
        // Sin JavaScript
        $this->javascript        = '';
    } // constructor

} // Clase ZonificacionPrimaria

?>
