<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20191129OnceavaYDoceavaSesionConsejo
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
 * Clase ComunicadoPrensa20191129OnceavaYDoceavaSesionConsejo
 */
class ComunicadoPrensa20191129OnceavaYDoceavaSesionConsejo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El IMPLAN Torreón aprueba el Convenio con INFONAVIT y presenta su Informe Anual 2019';
        $this->autor                      = 'Lic. Macarena Garcia Aguilar';
        $this->fecha                      = '2019-11-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-11-29-onceava-y-doceava-sesion-consejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En las 11ª. y 12ª. Sesiones Ordinarias del Consejo Directivo del Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN), se aprobó la celebración del Convenio, entre el Instituto del Fondo Nacional de la Vivienda para los Trabajadores (INFONAVIT) y el IMPLAN; con el objetivo de fortalecer y crear mecanismos de gobernanza entre los Institutos.';
        $this->claves                     = 'IMPLAN, Torreon, sesion consejo, infonavit, informe anual';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20191129OnceavaYDoceavaSesionConsejo.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20191129OnceavaYDoceavaSesionConsejo

?>
