<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Economía Empresas (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaEmpresas
 */
class EconomiaEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Empresas en La Laguna';
     // $this->autor             = '';
        $this->fecha             = '2015-07-14T15:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-empresas';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de registros patronales en cada ciudad con respecto a la población económica activa (PEA).';
        $this->claves            = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Innovación';
        $this->categorias        = array('Índice de Competitividad Urbana', 'Innovación');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-la-laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = '';
        $region->addressLocality = '';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el HTML de las lengüetas
        $this->contenido->articleBody = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/12/2008</td>
            <td>25.1818</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>26.2824</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>25.3898</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>22.4684</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>23.1127</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Empresas por cada mil de PEA.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Empresas en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Empresas</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Empresas</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>2012-12-31</td>
            <td>27.5685</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>23.2116</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>13.0615</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>6.4458</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>23.1127</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        // Cargar en el Schema el HTML con los artículos relacionados
        $this->contenido->extra = <<<FINAL
      <h3>Publicaciones relacionadas</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-ingreso-promedio-de-la-mujer.html">Ingreso Promedio de la Mujer en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Sociedad Preparada, Incluyente y Sana". Qué mide: El ingreso promedio de las mujeres como proporción del ingreso promedio de los hombres. Entre más se acerca esta relación a 1, más parecidos son los salarios.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-ingreso-promedio-de-la-mujer.html">Ingreso Promedio de la Mujer en La Laguna</a></td>
            <td>Incluido en el subíndice de "Sociedad Preparada, Incluyente y Sana". Qué mide: El ingreso promedio de las mujeres como proporción del ingreso promedio de los hombres. Entre más se acerca esta relación a 1, más parecidos son los salarios.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-ingreso-promedio-de-la-mujer.html">Ingreso Promedio de la Mujer en Lerdo</a></td>
            <td>Incluido en el subíndice de "Sociedad Preparada, Incluyente y Sana". Qué mide: El ingreso promedio de las mujeres como proporción del ingreso promedio de los hombres. Entre más se acerca esta relación a 1, más parecidos son los salarios.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-ingreso-promedio-de-la-mujer.html">Ingreso Promedio de la Mujer en Matamoros</a></td>
            <td>Incluido en el subíndice de "Sociedad Preparada, Incluyente y Sana". Qué mide: El ingreso promedio de las mujeres como proporción del ingreso promedio de los hombres. Entre más se acerca esta relación a 1, más parecidos son los salarios.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-ingreso-promedio-de-la-mujer.html">Ingreso Promedio de la Mujer en Torreón</a></td>
            <td>Incluido en el subíndice de "Sociedad Preparada, Incluyente y Sana". Qué mide: El ingreso promedio de las mujeres como proporción del ingreso promedio de los hombres. Entre más se acerca esta relación a 1, más parecidos son los salarios.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-patentes.html">Patentes en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Innovación de los sectores económicos". Mide el número de patentes solicitadas por entidad de residencia del inventor. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-patentes.html">Patentes en La Laguna</a></td>
            <td>Incluido en el subíndice "Innovación de los sectores económicos". Mide el número de patentes solicitadas por entidad de residencia del inventor. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-patentes.html">Patentes en Lerdo</a></td>
            <td>Incluido en el subíndice "Innovación de los sectores económicos". Mide el número de patentes solicitadas por entidad de residencia del inventor. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-patentes.html">Patentes en Matamoros</a></td>
            <td>Incluido en el subíndice "Innovación de los sectores económicos". Mide el número de patentes solicitadas por entidad de residencia del inventor. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-patentes.html">Patentes en Torreón</a></td>
            <td>Incluido en el subíndice "Innovación de los sectores económicos". Mide el número de patentes solicitadas por entidad de residencia del inventor. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-diversificacion-economica.html">Diversificación Económica en Gómez Palacio</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-diversificacion-economica.html">Diversificación Económica en La Laguna</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-diversificacion-economica.html">Diversificación Económica en Lerdo</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-diversificacion-economica.html">Diversificación Económica en Matamoros</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-diversificacion-economica.html">Diversificación Económica en Torreón</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // JavaScript
        $this->javascript[] = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2008-12-31', dato: 25.1818 },{ fecha: '2009-12-31', dato: 26.2824 },{ fecha: '2010-12-31', dato: 25.3898 },{ fecha: '2011-12-31', dato: 22.4684 },{ fecha: '2012-12-31', dato: 23.1127 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 27.5685 },{ region: 'Gómez Palacio', dato: 23.2116 },{ region: 'Lerdo', dato: 13.0615 },{ region: 'Matamoros', dato: 6.4458 },{ region: 'La Laguna', dato: 23.1127 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
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
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion = <<<FINAL
      <h3>Descripción</h3>
<p>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de registros patronales en cada ciudad con respecto a la población económica activa (PEA).</p>

      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/12/2008</td>
            <td>25.1818</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>26.2824</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>25.3898</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>22.4684</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>23.1127</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Empresas por cada mil de PEA.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaEmpresas

?>