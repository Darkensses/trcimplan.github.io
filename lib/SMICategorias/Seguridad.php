<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Seguridad
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
 * Clase Seguridad
 */
class Seguridad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Seguridad';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'seguridad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Seguridad. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Seguridad';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/seguridad.jpg';
        $this->imagen_previa = '../imagenes/categorias/seguridad.jpg';
        $this->imagen_id     = 'categorias-seguridad';
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
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Periodistas Muertos o Desaparecidos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">5</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">6</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Policías Operativos de Seguridad Pública</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-policias-operativos-de-seguridad-publica.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, Ayuntamiento de Torreón">0.97</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">5110</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">1691</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">342</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">132</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">7013</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">20</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">23</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, INEGI">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">99</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Cantidad de Policías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-cantidad-de-policias.html" data-toggle="tooltip" title="Cantidad, 30/09/2017, Ayuntamiento de Torreón, Portal de Transparencia">No disponible</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">838</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">470</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">166</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">89</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1563</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos Patrimoniales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">94</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">71</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">35</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">215</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">16</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Monto Reportado en Robo de Mercancías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.07</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.16</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.03</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.01</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.09</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Percepción de Inseguridad</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">71.71 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">65.97 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">65.97 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">71.71 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">68.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Común</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">31455</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">2561</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Federal</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">11</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">78</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">0.4022 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, INEGI">1.3010 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, INEGI">2.3391 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, INEGI">1.5151 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">0.7187 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">1873</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">0</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">289</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">29</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">0</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">4</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Negocios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">33</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">24</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 30/09/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">100</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Transeuntes</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">56</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">63</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Motocicleta</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-de-motocicleta.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">43</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-de-motocicleta.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">36</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-de-motocicleta.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">19</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-de-motocicleta.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-de-motocicleta.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">106</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Vehículos de 4 Ruedas</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-de-vehiculos-de-4-ruedas.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">24</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-de-vehiculos-de-4-ruedas.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-de-vehiculos-de-4-ruedas.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-de-vehiculos-de-4-ruedas.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-de-vehiculos-de-4-ruedas.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">40</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">41</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">51</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">17</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">111</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos Totales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">235</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">139</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">61</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">14</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">449</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">109.7160</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">43.7146</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">41.8962</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">36.2831</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">77.5463</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de VehÍculos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">23.1372</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">7.5040</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">40.1776</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">8.3992</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">19.0018</a></td>
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
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">14641</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">5379</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, INEGI">0.701 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/07/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">86</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Extorsión</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0.40 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1.89 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Homicidio Doloso</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4.22 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6.28 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Robo de Vehículo con Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2.54 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6.56 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Robo de Vehículo Sin Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13.30 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">32.73 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0.20 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0.61 %</a></td>
    <td class="nd">ND</td>
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

} // Clase Seguridad

?>
