<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadFlujoDePasajerosAereos
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
 * Clase SustentabilidadFlujoDePasajerosAereos
 */
class SustentabilidadFlujoDePasajerosAereos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Flujo de Pasajeros Aéreos en Torreón';
        $this->fecha       = '2015-07-14T16:09:37';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-flujo-de-pasajeros-aereos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Precursores". Qué mide: El número de pasajeros en vuelos que salen o llegan a las ciudades con aeropuerto cada año ajustado por cada mil habitantes.';
        $this->claves      = 'IMPLAN, Torreón, Índice de Competitividad Urbana, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Movilidad');
        $this->fuentes     = array('IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('fecha' => '2008-12-31', 'valor' => '370.3688', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '297.0495', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '250.1342', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '274.2926', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '301.7549', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '317472', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Pasajeros en vuelos')); // formateado 0, valor 12, crudo 7
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return array(
            'region_nombre' => array('enca' => 'Región', 'formato' => 'texto'),
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '317472', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Pasajeros en vuelos'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '239.1000', 'fuente_nombre' => 'IMCO'));
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
Fuente: SCT, 2008-2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadFlujoDePasajerosAereos

?>
