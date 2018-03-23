<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SustentabilidadProporcionDeViviendasConRecoleccionDeBasura
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase SustentabilidadProporcionDeViviendasConRecoleccionDeBasura
 */
class SustentabilidadProporcionDeViviendasConRecoleccionDeBasura extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Proporción de viviendas con recolección de basura en Matamoros';
        $this->fecha       = '2018-01-30T14:51:27';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-proporcion-de-viviendas-con-recoleccion-de-basura';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Proporción de viviendas con recolección de residuos (recolección domiciliaria, o con disposición en contenedor o basurero público) respecto al total de viviendas particulares habitadas.';
        $this->claves      = 'IMPLAN, Matamoros, Medio ambiente';
        // Para el Organizador
        $this->categorias  = array('Medio ambiente');
        $this->fuentes     = array('INEGI. Censos de Población y Vivienda');
        $this->regiones    = array('Matamoros');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('fecha' => '2010-12-31', 'valor' => '74.6700', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda')); // formateado 0, valor 2, crudo 1
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '98.8600', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '87.5500', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '90.5500', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '74.6700', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'));
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
Datos obtenidos de los censos del INEGI.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadProporcionDeViviendasConRecoleccionDeBasura

?>