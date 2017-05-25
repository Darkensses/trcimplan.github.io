<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Constancia
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
 * Clase Constancia
 */
class Constancia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Constancia';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-25T10:47:01';
        // El nombre del archivo a crear
        $this->archivo                    = 'constancia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Constancia en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Constancia';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
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
                    'Población total' => 1110,
                    'Porcentaje de población masculina' => 48.91,
                    'Porcentaje de población femenina' => 51.09,
                    'Porcentaje de población de 0 a 14 años' => 24.64,
                    'Porcentaje de población de 15 a 64 años' => 64.76,
                    'Porcentaje de población de 65 y más años' => 10.60,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.64,
                    'Porcentaje de población con discapacidad' => 19.17
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.16,
                    'Población Económicamente Activa masculina' => 63.83,
                    'Población Económicamente Activa femenina' => 36.17,
                    'Población Ocupada' => 92.46,
                    'Población Ocupada masculina' => 62.45,
                    'Población Ocupada femenina' => 37.55,
                    'Población Desocupada' => 7.54,
                    'Derechohabiencia' => 59.33
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 308,
                    'Ocupación por Vivienda' => 3.60,
                    'Viviendas con Electricidad' => 99.89,
                    'Viviendas con Agua' => 99.90,
                    'Viviendas con Drenaje' => 99.90,
                    'Viviendas con Televisión' => 96.64,
                    'Viviendas con Automóvil' => 34.58,
                    'Viviendas con Computadora' => 21.78
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 49,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.82,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.41,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.20,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.20,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 6.12
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
            'Centro latitud'  => 25.5341708323324,
            'Centro longitud' => -103.472227640382
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

} // Clase Constancia

?>
