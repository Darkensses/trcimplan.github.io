<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Sociedad Mortalidad por VIH-SIDA (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadMortalidadPorVihSida
 */
class SociedadMortalidadPorVihSida extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Mortalidad por VIH-SIDA en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2015-01-13T10:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'sociedad-mortalidad-por-vih-sida';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Defunciones a causa de VIH/SIDA por cada 100,000 habitantes';
        $this->claves            = 'IMPLAN, Torreón, Salud, Bienestar, Grupos Vulnerables, Objetivos del Milenio';
        $this->categorias        = array('Salud', 'Bienestar', 'Grupos Vulnerables', 'Objetivos del Milenio');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-torreon';
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
        $region->addressLocality = 'Torreón';
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
            <td>31/12/2013</td>
            <td>4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Mortalidad por VIH-SIDA</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Mortalidad por VIH-SIDA</h3>
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
            <td>2013-12-31</td>
            <td>4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>2.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>3.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>1.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>3.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td>3.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td>2.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td>4.2000</td>
            <td>SINAIS (SSA)</td>
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
            <td><a href="../indicadores-gomez-palacio/gobierno-muertes-por-infecciones-instestinales.html">Muertes por Infecciones Instestinales en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el número de muertes ocasionadas por infecciones intestinales por cada 100 mil habitantes. A falta de mediciones adecuadas de calidad del agua, este indicador capta los impactos de que una ciudad consuma agua relativamente sucia como resultado de un mal funcionamiento del organismo operador de agua local. El indicador asume una relación directa entre calidad del agua y enfermedades intestinales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-muertes-por-infecciones-instestinales.html">Muertes por Infecciones Instestinales en La Laguna</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el número de muertes ocasionadas por infecciones intestinales por cada 100 mil habitantes. A falta de mediciones adecuadas de calidad del agua, este indicador capta los impactos de que una ciudad consuma agua relativamente sucia como resultado de un mal funcionamiento del organismo operador de agua local. El indicador asume una relación directa entre calidad del agua y enfermedades intestinales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-muertes-por-infecciones-instestinales.html">Muertes por Infecciones Instestinales en Lerdo</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el número de muertes ocasionadas por infecciones intestinales por cada 100 mil habitantes. A falta de mediciones adecuadas de calidad del agua, este indicador capta los impactos de que una ciudad consuma agua relativamente sucia como resultado de un mal funcionamiento del organismo operador de agua local. El indicador asume una relación directa entre calidad del agua y enfermedades intestinales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-muertes-por-infecciones-instestinales.html">Muertes por Infecciones Instestinales en Matamoros</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el número de muertes ocasionadas por infecciones intestinales por cada 100 mil habitantes. A falta de mediciones adecuadas de calidad del agua, este indicador capta los impactos de que una ciudad consuma agua relativamente sucia como resultado de un mal funcionamiento del organismo operador de agua local. El indicador asume una relación directa entre calidad del agua y enfermedades intestinales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-muertes-por-infecciones-instestinales.html">Muertes por Infecciones Instestinales en Torreón</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el número de muertes ocasionadas por infecciones intestinales por cada 100 mil habitantes. A falta de mediciones adecuadas de calidad del agua, este indicador capta los impactos de que una ciudad consuma agua relativamente sucia como resultado de un mal funcionamiento del organismo operador de agua local. El indicador asume una relación directa entre calidad del agua y enfermedades intestinales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-desigualdad-en-las-ciudades.html">Desigualdad en las Ciudades en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Este indicador es un coeficiente de Gini salarial para cuantificar la desigualdad en los salarios de una población. El coeficiente adopta valores entre 0 y 1, donde 0 representa una distribución completamente igual (todos tienen los mismos ingresos) y 1 una distribución completamente desigual (1 persona tiene todos los ingresos y los demás ninguno).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-desigualdad-en-las-ciudades.html">Desigualdad en las Ciudades en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Este indicador es un coeficiente de Gini salarial para cuantificar la desigualdad en los salarios de una población. El coeficiente adopta valores entre 0 y 1, donde 0 representa una distribución completamente igual (todos tienen los mismos ingresos) y 1 una distribución completamente desigual (1 persona tiene todos los ingresos y los demás ninguno).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-desigualdad-en-las-ciudades.html">Desigualdad en las Ciudades en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Este indicador es un coeficiente de Gini salarial para cuantificar la desigualdad en los salarios de una población. El coeficiente adopta valores entre 0 y 1, donde 0 representa una distribución completamente igual (todos tienen los mismos ingresos) y 1 una distribución completamente desigual (1 persona tiene todos los ingresos y los demás ninguno).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-desigualdad-en-las-ciudades.html">Desigualdad en las Ciudades en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Este indicador es un coeficiente de Gini salarial para cuantificar la desigualdad en los salarios de una población. El coeficiente adopta valores entre 0 y 1, donde 0 representa una distribución completamente igual (todos tienen los mismos ingresos) y 1 una distribución completamente desigual (1 persona tiene todos los ingresos y los demás ninguno).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-desigualdad-en-las-ciudades.html">Desigualdad en las Ciudades en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Este indicador es un coeficiente de Gini salarial para cuantificar la desigualdad en los salarios de una población. El coeficiente adopta valores entre 0 y 1, donde 0 representa una distribución completamente igual (todos tienen los mismos ingresos) y 1 una distribución completamente desigual (1 persona tiene todos los ingresos y los demás ninguno).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html">Personas por Debajo de la Línea de Bienestar en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la proporción de la PEA ocupada con ingresos menores a la línea de bienestar mínimo que marca CONEVAL. En diciembre 2012, esta línea se ubicó en $2,388 pesos. Incluye tanto la canasta básica alimentaria como la no alimentaria.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html">Personas por Debajo de la Línea de Bienestar en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la proporción de la PEA ocupada con ingresos menores a la línea de bienestar mínimo que marca CONEVAL. En diciembre 2012, esta línea se ubicó en $2,388 pesos. Incluye tanto la canasta básica alimentaria como la no alimentaria.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html">Personas por Debajo de la Línea de Bienestar en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la proporción de la PEA ocupada con ingresos menores a la línea de bienestar mínimo que marca CONEVAL. En diciembre 2012, esta línea se ubicó en $2,388 pesos. Incluye tanto la canasta básica alimentaria como la no alimentaria.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html">Personas por Debajo de la Línea de Bienestar en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la proporción de la PEA ocupada con ingresos menores a la línea de bienestar mínimo que marca CONEVAL. En diciembre 2012, esta línea se ubicó en $2,388 pesos. Incluye tanto la canasta básica alimentaria como la no alimentaria.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html">Personas por Debajo de la Línea de Bienestar en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la proporción de la PEA ocupada con ingresos menores a la línea de bienestar mínimo que marca CONEVAL. En diciembre 2012, esta línea se ubicó en $2,388 pesos. Incluye tanto la canasta básica alimentaria como la no alimentaria.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html">Crecimiento en Acceso a Servicios de Salud en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que tiene acceso a instituciones de salud.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html">Crecimiento en Acceso a Servicios de Salud en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que tiene acceso a instituciones de salud.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html">Crecimiento en Acceso a Servicios de Salud en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que tiene acceso a instituciones de salud.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html">Crecimiento en Acceso a Servicios de Salud en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que tiene acceso a instituciones de salud.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html">Crecimiento en Acceso a Servicios de Salud en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que tiene acceso a instituciones de salud.</td>
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
      data: [{ region: 'Torreón', dato: 4.0000 },{ region: 'Gómez Palacio', dato: 2.9000 },{ region: 'Lerdo', dato: 3.3000 },{ region: 'Matamoros', dato: 1.8000 },{ region: 'La Laguna', dato: 3.4000 },{ region: 'Coahuila', dato: 3.7000 },{ region: 'Durango', dato: 2.5000 },{ region: 'Nacional', dato: 4.2000 }],
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
<p>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</p>

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
            <td>31/12/2013</td>
            <td>4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadMortalidadPorVihSida

?>
