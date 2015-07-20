<?php
/**
 * TrcIMPLAN - SMI Indicadores Gómez Palacio Sustentabilidad Red Carretera Troncal Federal (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SustentabilidadRedCarreteraTroncalFederal
 */
class SustentabilidadRedCarreteraTroncalFederal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Red Carretera Troncal Federal en Gómez Palacio';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'sustentabilidad-red-carretera-troncal-federal';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = '';
        $this->claves            = 'IMPLAN, Gómez Palacio, Infraestructura';
        $this->categorias        = array('Infraestructura');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-gomez-palacio';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Durango';
        $region->addressLocality = 'Gómez Palacio';
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
            <td>31/12/2012</td>
            <td>71</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Kilómetros.</p>
      <h3>Observaciones</h3>
<p>No aplica a nivel metropolitano.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Red Carretera Troncal Federal</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Red Carretera Troncal Federal</h3>
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
            <td>226</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>71</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>160</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>266</td>
            <td>INEGI</td>
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
            <td><a href="../indicadores-gomez-palacio/sociedad-red-carretera-avanzada.html">Red Carretera Avanzada en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-red-carretera-avanzada.html">Red Carretera Avanzada en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-red-carretera-avanzada.html">Red Carretera Avanzada en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-red-carretera-avanzada.html">Red Carretera Avanzada en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-red-carretera-avanzada.html">Red Carretera Avanzada en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-crecimiento-de-la-mancha-urbana.html">Crecimiento de la Mancha Urbana en Gómez Palacio</a></td>
            <td>Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-crecimiento-de-la-mancha-urbana.html">Crecimiento de la Mancha Urbana en La Laguna</a></td>
            <td>Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-crecimiento-de-la-mancha-urbana.html">Crecimiento de la Mancha Urbana en Lerdo</a></td>
            <td>Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-crecimiento-de-la-mancha-urbana.html">Crecimiento de la Mancha Urbana en Matamoros</a></td>
            <td>Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-crecimiento-de-la-mancha-urbana.html">Crecimiento de la Mancha Urbana en Torreón</a></td>
            <td>Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.</td>
          </tr>
          <tr>
            <td>07/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/hacia-ciudades-que-construyen-humanos-en-convivencia.html">Hacia Ciudades que Construyen Humanos en Convivencia</a></td>
            <td>El espacio público es donde se tejen las relaciones sociales, por lo tanto su conformación debe contribuir a desarrollar las capacidades humanas.</td>
          </tr>
          <tr>
            <td>01/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/la-ciudad-compacta-vive-mejor.html">La Ciudad Compacta (como la familia pequeña) Vive Mejor</a></td>
            <td>La política pública a adoptar como estrategia debe ser la de crecimiento interno: densificar la ciudad implotando su crecimiento hacia adentro y hacia arriba.</td>
          </tr>
          <tr>
            <td>27/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/reflexion-crecimiento-urbano-torreon.html">Reflexión del Crecimiento Urbano en Torreón</a></td>
            <td>La ciudad de Torreón nace a partir de la visión de Sr. Andrés Guillermo Eppen con trazos ordenados, calles anchas, manzanas cuadradas y alineadas con la vía de ferrocarril.</td>
          </tr>
          <tr>
            <td>28/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-urbana-competitividad.html">Movilidad Urbana y Competitividad</a></td>
            <td>La movilidad es eje fundamental del desarrollo; al no considerar el transporte como parte de la planeación urbana, se generan graves deficiencias, como dispersión, distanciamiento y desconexión urbana.</td>
          </tr>
          <tr>
            <td>15/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudadano-agente-cambio.html">Ciudadano como agente de cambio</a></td>
            <td>La participación de la sociedad en proyectos urbanos crea una cultura de co-creación. Destaca Medellín, Colombia donde se aplica en la coordinación, participación y construcción de obra pública.</td>
          </tr>
          <tr>
            <td>20/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/espacio-publico-urbano.html">Espacio Público Urbano</a></td>
            <td>Las calles son la forma más importante de espacio público. Requieren algunos cambios urbanos para que sean más seguras y amistosas para los niños y niñas; que lleguen a ser de alta calidad.</td>
          </tr>
          <tr>
            <td>03/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/reciclaje-urbano.html">Reciclaje Urbano</a></td>
            <td>Con en el reciclaje urbano, se han logrado grandes resultados al convertir zonas degradadas en nuevos barrios con gran potencial y desarrollo que se resulta un nuevo punto de interés para los habitantes y visitantes de la ciudad.</td>
          </tr>
          <tr>
            <td>24/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudad-abierta-ciudad-fraccionada.html">Ciudad abierta y ciudad fraccionada</a></td>
            <td>La fragmentación social y urbana provocada por desarrollos habitacionales “seguros” tiene efectos que agravan la percepción de la inseguridad en la ciudad.</td>
          </tr>
          <tr>
            <td>11/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/direccionando-hacia-innovacion-urbana.html">Direccionando hacia la innovación urbana</a></td>
            <td>Actualmente el concepto de ciudad inteligente o digital se maneja a nivel global. Muchas ciudades de este tipo se están desarrollando en diferentes lugares del mundo, cada una con su propio sistema, diseño, estructura y organización.</td>
          </tr>
          <tr>
            <td>10/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/nueva-infraestructura-base-tecnologia-led-torreon.html">Nueva infraestructura a base de tecnología LED en Torreón</a></td>
            <td>La luz blanca de calidad puede transformar el paisaje nocturno, realzando la arquitectura urbana y creando ambientes acogedores que inviten a las personas a pasar más tiempo en ellos.</td>
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
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 226 },{ region: 'Gómez Palacio', dato: 71 },{ region: 'Lerdo', dato: 160 },{ region: 'Matamoros', dato: 266 }],
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
            <td>31/12/2012</td>
            <td>71</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Kilómetros.</p>
      <h3>Observaciones</h3>
<p>No aplica a nivel metropolitano.</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SustentabilidadRedCarreteraTroncalFederal

?>
