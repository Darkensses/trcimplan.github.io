<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadIndiceDeHacinamiento
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
 * Clase SociedadIndiceDeHacinamiento
 */
class SociedadIndiceDeHacinamiento extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Índice de Hacinamiento en Torreón';
        $this->fecha       = '2014-11-24T15:42:09';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-indice-de-hacinamiento';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.';
        $this->claves      = 'IMPLAN, Torreón, Bienestar, Vivienda';
        // Para el Organizador
        $this->categorias  = array('Bienestar', 'Vivienda');
        $this->fuentes     = array('INEGI. Censos de Población y Vivienda', 'INEGI');
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
            array('fecha' => '2010-06-25', 'valor' => '0.8800', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2015-12-31', 'valor' => '0.8000', 'fuente_nombre' => 'INEGI')); // formateado 0, valor 4, crudo 2
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '0.8000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-06-25', 'valor' => '0.9700', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-06-25', 'valor' => '1.0500', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-06-25', 'valor' => '1.0900', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2010-06-25', 'valor' => '1.0600', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'));
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
Utilizado internacionalmente como Índice de Hacinamiento equivale al indicador "Promedio de ocupantes por cuarto en viviendas particulares habitadas" de los Censos y Conteos de Población y Vivienda de INEGI.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadIndiceDeHacinamiento

?>
