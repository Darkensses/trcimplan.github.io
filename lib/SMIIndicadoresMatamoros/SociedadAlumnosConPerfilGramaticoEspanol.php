<?php
/**
 * TrcIMPLAN - SMI Indicadores Matamoros Sociedad Alumnos con Perfil Gramático-Español (Creado por Central:SmiLanzadera)
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
 * Clase SociedadAlumnosConPerfilGramaticoEspanol
 */
class SociedadAlumnosConPerfilGramaticoEspanol extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Alumnos con Perfil Gramático-Español en Matamoros';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'sociedad-alumnos-con-perfil-gramatico-espanol';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Alumnos buenos y excelentes en Prueba Enlace nivel básico.';
        $this->claves            = 'IMPLAN, Matamoros, Educación';
        $this->categorias        = array('Educación');
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
            <td>32.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El criterio de "Alumnos buenos y excelentes" provienen de <a href="http://www.mejoratuescuela.org">mejoratuescuela.org</a>
Consulta la <a href="http://www.enlace.sep.gob.mx/content/ba/pages/base_de_datos_completa_2013/">Base de datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Alumnos con Perfil Gramático-Español</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Alumnos con Perfil Gramático-Español</h3>
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
            <td>44.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>37.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>37.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>32.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>40.00 %</td>
            <td>SEP</td>
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
            <td>15/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/alumnos-por-docente-parte-2.html">Alumnos por docente, indicador clave para la mejora de la educación (parte 2)</a></td>
            <td>Estudio sobre si debe considerarse la cantidad de alumnos por profesor como un factor en la mejora educativa.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en La Laguna</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Lerdo</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Matamoros</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Torreón</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-escuelas-de-calidad.html">Escuelas de Calidad en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de escuelas con calificación excelente dentro del municipio. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-escuelas-de-calidad.html">Escuelas de Calidad en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de escuelas con calificación excelente dentro del municipio. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-escuelas-de-calidad.html">Escuelas de Calidad en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de escuelas con calificación excelente dentro del municipio. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-escuelas-de-calidad.html">Escuelas de Calidad en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de escuelas con calificación excelente dentro del municipio. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-escuelas-de-calidad.html">Escuelas de Calidad en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de escuelas con calificación excelente dentro del municipio. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-rendimiento-academico.html">Rendimiento Académico en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de alumnos de educación básica y media superior que obtuvieron niveles bueno y excelente en el examen de matemáticas de la prueba ENLACE. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-rendimiento-academico.html">Rendimiento Académico en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de alumnos de educación básica y media superior que obtuvieron niveles bueno y excelente en el examen de matemáticas de la prueba ENLACE. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-rendimiento-academico.html">Rendimiento Académico en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de alumnos de educación básica y media superior que obtuvieron niveles bueno y excelente en el examen de matemáticas de la prueba ENLACE. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-rendimiento-academico.html">Rendimiento Académico en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de alumnos de educación básica y media superior que obtuvieron niveles bueno y excelente en el examen de matemáticas de la prueba ENLACE. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
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
      data: [{ region: 'Torreón', dato: 44.0000 },{ region: 'Gómez Palacio', dato: 37.0000 },{ region: 'Lerdo', dato: 37.0000 },{ region: 'Matamoros', dato: 32.0000 },{ region: 'La Laguna', dato: 40.0000 }],
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
<p>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</p>

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
            <td>32.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El criterio de "Alumnos buenos y excelentes" provienen de <a href="http://www.mejoratuescuela.org">mejoratuescuela.org</a>
Consulta la <a href="http://www.enlace.sep.gob.mx/content/ba/pages/base_de_datos_completa_2013/">Base de datos</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadAlumnosConPerfilGramaticoEspanol

?>
