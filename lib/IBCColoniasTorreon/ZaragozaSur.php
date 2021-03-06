<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ZaragozaSur
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

namespace IBCColoniasTorreon;

/**
 * Clase ZaragozaSur
 */
class ZaragozaSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Zaragoza Sur';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'zaragoza-sur';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Zaragoza Sur en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Zaragoza Sur';
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 1487,
                    'Porcentaje de población masculina' => 51.31,
                    'Porcentaje de población femenina' => 48.69,
                    'Porcentaje de población de 0 a 14 años' => 38.26,
                    'Porcentaje de población de 15 a 64 años' => 58.71,
                    'Porcentaje de población de 65 y más años' => 2.96,
                    'Porcentaje de población no especificada' => 0.07,
                    'Fecundidad promedio' => 2.55,
                    'Porcentaje de población con discapacidad' => 5.58
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.19,
                    'Población Económicamente Activa masculina' => 70.30,
                    'Población Económicamente Activa femenina' => 29.70,
                    'Población Ocupada' => 89.62,
                    'Población Ocupada masculina' => 68.35,
                    'Población Ocupada femenina' => 31.65,
                    'Población Desocupada' => 10.38,
                    'Derechohabiencia' => 69.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 348,
                    'Ocupación por Vivienda' => 4.27,
                    'Viviendas con Electricidad' => 99.14,
                    'Viviendas con Agua' => 93.97,
                    'Viviendas con Drenaje' => 94.83,
                    'Viviendas con Televisión' => 95.69,
                    'Viviendas con Automóvil' => 34.44,
                    'Viviendas con Computadora' => 29.80
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 87,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.38,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.84,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.79,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 9.20,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.60
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.4948318389385,
            'Centro longitud' => -103.379979468348
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return '';
    } // resena

} // Clase ZaragozaSur

?>
