<?php
/**
 * TrcIMPLAN - SMI Indicadores Matamoros Seguridad Robos a Casa Habitación (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresMatamoros;

/**
 * Clase SeguridadRobosACasaHabitacion
 */
class SeguridadRobosACasaHabitacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Robos a Casa Habitación en Matamoros';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'seguridad-robos-a-casa-habitacion';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Robos totales por mes a casa habitación.';
        $this->claves            = 'IMPLAN, Matamoros, Seguridad, Delincuencia';
        $this->categorias        = array('Seguridad', 'Delincuencia');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-matamoros';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Matamoros';
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
            <td>31/01/2014</td>
            <td>2</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>6</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>10</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>7</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>12</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>6</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>4</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>4</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>3</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Robos a Casa Habitación en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Robos a Casa Habitación</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Robos a Casa Habitación</h3>
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
            <td>2015-06-30</td>
            <td>52</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-06-30</td>
            <td>32</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-06-30</td>
            <td>16</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-05-31</td>
            <td>3</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-06-30</td>
            <td>106</td>
            <td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
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
            <td><a href="../indicadores-torreon/gobierno-policias-operativos-de-seguridad-publica.html">Policías Operativos de Seguridad Pública en Torreón</a></td>
            <td>Determina el número de policías operativos por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Gómez Palacio</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en La Laguna</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Lerdo</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Matamoros</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Torreón</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-percepcion-de-inseguridad.html">Percepción de Inseguridad en Gómez Palacio</a></td>
            <td>Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-percepcion-de-inseguridad.html">Percepción de Inseguridad en La Laguna</a></td>
            <td>Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-percepcion-de-inseguridad.html">Percepción de Inseguridad en Lerdo</a></td>
            <td>Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-percepcion-de-inseguridad.html">Percepción de Inseguridad en Matamoros</a></td>
            <td>Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-percepcion-de-inseguridad.html">Percepción de Inseguridad en Torreón</a></td>
            <td>Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-monto-reportado-en-robo-de-mercancias.html">Monto Reportado en Robo de Mercancías en Gómez Palacio</a></td>
            <td>Pesos 2012 por cada millón de pesos de PIB. Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el monto reportado en robo de transporte de mercancías.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-monto-reportado-en-robo-de-mercancias.html">Monto Reportado en Robo de Mercancías en La Laguna</a></td>
            <td>Pesos 2012 por cada millón de pesos de PIB. Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el monto reportado en robo de transporte de mercancías.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-monto-reportado-en-robo-de-mercancias.html">Monto Reportado en Robo de Mercancías en Lerdo</a></td>
            <td>Pesos 2012 por cada millón de pesos de PIB. Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el monto reportado en robo de transporte de mercancías.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-monto-reportado-en-robo-de-mercancias.html">Monto Reportado en Robo de Mercancías en Matamoros</a></td>
            <td>Pesos 2012 por cada millón de pesos de PIB. Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el monto reportado en robo de transporte de mercancías.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-monto-reportado-en-robo-de-mercancias.html">Monto Reportado en Robo de Mercancías en Torreón</a></td>
            <td>Pesos 2012 por cada millón de pesos de PIB. Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el monto reportado en robo de transporte de mercancías.</td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/la-otra-violencia-contra-los-ninos.html">La Otra Violencia Contra los Niños</a></td>
            <td>El Comité de los Derechos del Niño de la ONU ha señalado que el Gobierno Mexicano debe entregar información sobre las víctimas infantiles.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en Gómez Palacio</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en La Laguna</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en Lerdo</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
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
      data: [{ fecha: '2014-01-31', dato: 2 },{ fecha: '2014-02-28', dato: 8 },{ fecha: '2014-03-31', dato: 6 },{ fecha: '2014-04-30', dato: 5 },{ fecha: '2014-05-31', dato: 10 },{ fecha: '2014-06-30', dato: 5 },{ fecha: '2014-07-31', dato: 7 },{ fecha: '2014-08-31', dato: 8 },{ fecha: '2014-09-30', dato: 5 },{ fecha: '2014-10-31', dato: 8 },{ fecha: '2014-11-30', dato: 12 },{ fecha: '2014-12-31', dato: 6 },{ fecha: '2015-01-31', dato: 4 },{ fecha: '2015-02-28', dato: 8 },{ fecha: '2015-03-31', dato: 8 },{ fecha: '2015-04-30', dato: 4 },{ fecha: '2015-05-31', dato: 3 }],
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
      data: [{ region: 'Torreón', dato: 52 },{ region: 'Gómez Palacio', dato: 32 },{ region: 'Lerdo', dato: 16 },{ region: 'Matamoros', dato: 3 },{ region: 'La Laguna', dato: 106 }],
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
<p>Robos totales por mes a casa habitación.</p>

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
            <td>31/01/2014</td>
            <td>2</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>6</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>10</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>7</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>12</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>6</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>4</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>4</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>3</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SeguridadRobosACasaHabitacion

?>
