<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Empleo
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

namespace SMICategorias;

/**
 * Clase Empleo
 */
class Empleo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Empleo';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'empleo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Empleo. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Empleo';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/empleo.jpg';
        $this->imagen_previa = '../imagenes/categorias/empleo.jpg';
        $this->imagen_id     = 'categorias-empleo';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Iniciar el contenido que será un SchemaArticle
        $this->contenido = new \Base\SchemaArticle();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir propiedades del contenido que es un SchemaArticle
        $this->contenido->big_heading   = TRUE;
        $this->contenido->headline      = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->datePublished = $this->fecha;
        $this->contenido->image         = $this->imagen;
        $this->contenido->image_show    = $this->poner_imagen_en_contenido;
        $this->contenido->articleBody   = <<<FINAL
<h3>Zona Metropolitana de La Laguna</h3>
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento de la Población Ocupada sin Ingresos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-1.05 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-9.69 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-55.49 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-2.39 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-4.34 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del Salario Promedio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-5.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-0.18 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-9.90 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">1.81 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-3.67 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en Jornadas Laborales Muy Largas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">1.86 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">0.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-10.04 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">6.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">0.15 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en los Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-5.66 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-9.77 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-14.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-4.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-7.46 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Demandantes de Conflicto Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">10.7936</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">12.3553</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">0.1432</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">9.0768</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.8560 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">56.3498 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">34.1412 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">46.0290 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.7339 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Jornadas Laborales Muy Largas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">23.33 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">27.45 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.63 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">25.54 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">26.9458 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">29.4578 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">24.1890 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">35.3180 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">27.6995 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">25.1459 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">32.3272 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">46.1564 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">37.4666 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">28.7366 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">39.0245 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">28.5100 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">20.3095 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">24.1582 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">34.9078 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Población Ocupada Sin Ingresos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">11.63 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">7.52 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">7.93 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">9.17 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 530,143.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 462,597.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 51,284.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 45,744.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 421,204.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Media Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 729.82</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 1,771.11</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 4,094.59</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 4,496.77</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 416.42</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Salario Promedio Mensual para Trabajadores de Tiempo Completo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">7,324.55</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,254.41</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,603.44</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 4,705.54</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,495.63</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Condiciones Críticas de Ocupación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">12.60 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">14.59 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">11.82 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">14.29 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">10.57 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Desempleo Abierto</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">5.20 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">5.97 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">2.65 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">5.67 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">4.40 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Informalidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">40.30 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">41.65 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">41.82 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">39.10 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">41.27 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">198976</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">81483</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">13336</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">8655</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">302450</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados (Región)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados-region.html" data-toggle="tooltip" title="Personas, 31/12/2013, IMSS Subdelegación Torreón">187050</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Ingreso Promedio de la Mujer</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">1.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.8</a></td>
  </tr>
</tbody>
</table>
<h3>Otras regiones</h3>
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Coahuila</th>
    <th>Durango</th>
    <th>Nacional</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">22.8278 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">30.6424 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">29.6141 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">40.7077 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">27.4596 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">23.5138 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">28.6520 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">28.1982 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">36.4504 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Salario Promedio Mensual para Trabajadores de Tiempo Completo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 7,225.63</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,217.26</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,543.52</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Condiciones Críticas de Ocupación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">8.28 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">14.99 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">13.37 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Desempleo Abierto</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">4.25 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">3.83 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">3.55 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Informalidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">37.69 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">56.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 30/09/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">57.19 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">775008</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">246076</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2018, Instituto Mexicano del Seguro Social (IMSS)">4483891</a></td>
  </tr>
</tbody>
</table>
FINAL;
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript
        $this->javascript = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Empleo

?>
