<?php
/**
 * TrcIMPLAN Sitio Web - Torreón 4to lugar en Costo Beneficio de inversión en Ranking del Financial Times 'American Cities of the Future 2015-2016'
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
 * Clase FinancialTimesAmericanCitiesFuture20152016
 */
class FinancialTimesAmericanCitiesFuture20152016 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón 4to lugar en Costo Beneficio de inversión en Ranking del Financial Times - American Cities of the Future 2015-2016';
        $this->fecha                      = '2015-05-14T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-05-13-financial-times-american-cities-future-2015-2016';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón es la cuarta ciudad de América y la primera de México en mejor costo-beneficio al invertir.';
        $this->claves                     = 'IMPLAN, Torreon, Costo, Beneficio, Ranking, Finalcial, Times, American, Cities, Future';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/FinancialTimesAmericanCitiesFuture20152016.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Empleo', 'Sector Automotriz');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase FinancialTimesAmericanCitiesFuture20152016

?>
