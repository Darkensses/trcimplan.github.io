<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoConferenciaImeplan20200206
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

namespace SalaPrensa;

/**
 * Clase ComunicadoConferenciaImeplan20200206
 */
class ComunicadoConferenciaImeplan20200206 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Postura sobre la creación de un Instituto Metropolitano de Planeación.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-02-06T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-02-06-comunicado-conferencia-imeplan';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Postura sobre la creación de un Instituto Metropolitano de Planeación.';
        $this->claves                     = 'IMPLAN, Torreon, imeplan';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoConferenciaImeplan20200206.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoConferenciaImeplan20200206

?>
