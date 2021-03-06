<?php
/**
 * TrcIMPLAN Sitio Web - La Otra Violencia Contra los Niños
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase LaOtraViolenciaContraLosNinos
 */
class LaOtraViolenciaContraLosNinos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Otra Violencia Contra los Niños';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2015-06-30T14:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-otra-violencia-contra-los-ninos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Comité de los Derechos del Niño de la ONU ha señalado que el Gobierno Mexicano debe entregar información sobre las víctimas infantiles.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaOtraViolenciaContraLosNinos.md';
        // Para el Organizador
        $this->categorias                 = array('Delincuencia', 'Grupos Vulnerables', 'Seguridad');
        $this->fuentes                    = array('Gobierno de la República');
        $this->regiones                   = array();
    } // constructor

} // Clase LaOtraViolenciaContraLosNinos

?>
