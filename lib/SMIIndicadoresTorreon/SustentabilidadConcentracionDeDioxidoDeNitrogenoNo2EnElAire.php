<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadConcentracionDeDioxidoDeNitrogenoNo2EnElAire
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

namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadConcentracionDeDioxidoDeNitrogenoNo2EnElAire
 */
class SustentabilidadConcentracionDeDioxidoDeNitrogenoNo2EnElAire extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Concentración de Dióxido de Nitrógeno (NO2) en el Aire en Torreón';
        $this->fecha       = '2018-01-30T15:32:13';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-concentracion-de-dioxido-de-nitrogeno-no2-en-el-aire';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Suma de las concentraciones diarias de NO2 de todo el año, dividida entre los 365 días del año. Se expresa en microgramos sobre metro cúbico estándar.';
        $this->claves      = 'IMPLAN, Torreón, Medio Ambiente';
        // Para el Organizador
        $this->categorias  = array('Medio Ambiente');
        $this->fuentes     = array('SEMA');
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // datos_estructura

    /**
     * Datos
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos() {
        return array(
            array('fecha' => '2013-12-31', 'valor' => '26.3418', 'fuente_nombre' => 'SEMA')); // formateado 0, valor 2, crudo 1
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return NULL;
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return NULL;
    } // otras_regiones

    /**
     * Mapas
     *
     * @return string Código HTML con el iframe de Carto
     */
    public function mapas() {
        return NULL;
    } // mapas

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
Fuente: SEMA
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadConcentracionDeDioxidoDeNitrogenoNo2EnElAire

?>