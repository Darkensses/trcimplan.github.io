<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresCoahuila SustentabilidadMotorizacion
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

namespace SMIIndicadoresCoahuila;

/**
 * Clase SustentabilidadMotorizacion
 */
class SustentabilidadMotorizacion extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Motorización en Coahuila';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-motorizacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Vehículos automotores registrados en circulación por cada mil habitantes.';
        $this->claves      = 'IMPLAN, Coahuila, Medio Ambiente, Movilidad, Recursos Naturales, Sector Automotriz, Vialidad';
        // Para el Organizador
        $this->categorias  = array('Medio Ambiente', 'Movilidad', 'Recursos Naturales', 'Sector Automotriz', 'Vialidad');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('Coahuila');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('fecha' => '2000-12-31', 'valor' => '145', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2001-12-31', 'valor' => '210', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2002-12-31', 'valor' => '262', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '244', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2004-12-31', 'valor' => '253', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2005-12-31', 'valor' => '250', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2006-12-31', 'valor' => '246', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2007-12-31', 'valor' => '249', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '266', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '252', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '257', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '237', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '247', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '251', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '253', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '257', 'fuente_nombre' => 'INEGI')); // formateado 0, valor 32, crudo 16
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '211', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-31', 'valor' => '405', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-31', 'valor' => '304', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-31', 'valor' => '170', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2015-12-31', 'valor' => '271', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2015-12-31', 'valor' => '257', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2015-12-31', 'valor' => '325', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2015-12-31', 'valor' => '245', 'fuente_nombre' => 'INEGI'));
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
Índice de motorización. Consulta la [Base de Datos](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/vehiculos.asp?s=est&c=13158&proy=vmrc_vehiculos)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadMotorizacion

?>
