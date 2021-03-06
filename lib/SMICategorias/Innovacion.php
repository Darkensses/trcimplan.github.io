<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Innovacion
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
 * Clase Innovacion
 */
class Innovacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Innovación';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'innovacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Innovación. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Innovación';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/innovacion.jpg';
        $this->imagen_previa = '../imagenes/categorias/innovacion.jpg';
        $this->imagen_id     = 'categorias-innovacion';
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
    <td class="indicador color1">Centros de Investigación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">1.3</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">9,130.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">3,044.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">756.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">357.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">21.68</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas Certificadas con ISO-9000 y 14000</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">10.6011</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">14.9306</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">61.3409</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">279.3651</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, IMCO">6.5751</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas (según CNN Expansión)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">6.02</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Patentes</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">49</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">49</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">16</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/12/2016, IMCO">54</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/12/2016, IMCO">19</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/12/2016, IMCO">19</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/12/2016, IMCO">54</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/12/2016, IMCO">20</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad (por cada 100mil de PEA)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Uso de Twitter como Proxy de Uso de Tecnologías de Información</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">8.2249</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.8366</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.1624</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">1.1490</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">5.4432</a></td>
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
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/12/2016, CONACYT">54</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/12/2016, CONACYT">19</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Usuarios de Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">44 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">34 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">40 %</a></td>
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

} // Clase Innovacion

?>
