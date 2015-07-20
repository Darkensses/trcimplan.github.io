<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Economía Trabajadores Asegurados (Región) (Creado por Central:SmiLanzadera)
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
 * Clase EconomiaTrabajadoresAseguradosRegion
 */
class EconomiaTrabajadoresAseguradosRegion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Trabajadores Asegurados (Región) en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-trabajadores-asegurados-region';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Evolución del empleo medida en trabajadores asegurados por el IMSS.';
        $this->claves            = 'IMPLAN, Torreón, Empleo';
        $this->categorias        = array('Empleo');
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
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
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
            <td>31/12/2007</td>
            <td>171,936</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>164,258</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>157,898</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>168,723</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>176,045</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>184,407</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>187,050</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>El dato incluye a los trabajadores asegurados de los municipios de la región abarcados por la subdelegación Torreón.</p>

<p>Datos obtenidos de <a href="http://201.144.108.20/imssdigital/conoce/estadisticas/pages/memoria2012.aspx">IMSS</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Trabajadores Asegurados (Región) en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
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
            <td><a href="../indicadores-gomez-palacio/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en La Laguna</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Lerdo</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Matamoros</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Torreón</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-demandantes-de-conflicto-laboral.html">Demandantes de Conflicto Laboral en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el número de trabajadores involucrados en pugnas de carácter laboral, las cuales surgen entre los trabajadores y el patrón con motivo de omisiones, faltas o incumplimiento de alguna de las partes a las condiciones de trabajo que fueron pactadas por éstos, o de aquellas normas que están estipuladas en la ley.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-demandantes-de-conflicto-laboral.html">Demandantes de Conflicto Laboral en La Laguna</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el número de trabajadores involucrados en pugnas de carácter laboral, las cuales surgen entre los trabajadores y el patrón con motivo de omisiones, faltas o incumplimiento de alguna de las partes a las condiciones de trabajo que fueron pactadas por éstos, o de aquellas normas que están estipuladas en la ley.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-demandantes-de-conflicto-laboral.html">Demandantes de Conflicto Laboral en Lerdo</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el número de trabajadores involucrados en pugnas de carácter laboral, las cuales surgen entre los trabajadores y el patrón con motivo de omisiones, faltas o incumplimiento de alguna de las partes a las condiciones de trabajo que fueron pactadas por éstos, o de aquellas normas que están estipuladas en la ley.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-demandantes-de-conflicto-laboral.html">Demandantes de Conflicto Laboral en Matamoros</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el número de trabajadores involucrados en pugnas de carácter laboral, las cuales surgen entre los trabajadores y el patrón con motivo de omisiones, faltas o incumplimiento de alguna de las partes a las condiciones de trabajo que fueron pactadas por éstos, o de aquellas normas que están estipuladas en la ley.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-demandantes-de-conflicto-laboral.html">Demandantes de Conflicto Laboral en Torreón</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el número de trabajadores involucrados en pugnas de carácter laboral, las cuales surgen entre los trabajadores y el patrón con motivo de omisiones, faltas o incumplimiento de alguna de las partes a las condiciones de trabajo que fueron pactadas por éstos, o de aquellas normas que están estipuladas en la ley.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html">Crecimiento de la Población Ocupada sin Ingresos en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el crecimiento de la población ocupada sin ingresos entre 2008-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html">Crecimiento de la Población Ocupada sin Ingresos en La Laguna</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el crecimiento de la población ocupada sin ingresos entre 2008-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html">Crecimiento de la Población Ocupada sin Ingresos en Lerdo</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el crecimiento de la población ocupada sin ingresos entre 2008-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html">Crecimiento de la Población Ocupada sin Ingresos en Matamoros</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el crecimiento de la población ocupada sin ingresos entre 2008-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html">Crecimiento de la Población Ocupada sin Ingresos en Torreón</a></td>
            <td>Incluido en el subíndice de "Mercado Laboral". Mide el crecimiento de la población ocupada sin ingresos entre 2008-2012.</td>
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
      data: [{ fecha: '2007-12-31', dato: 171936 },{ fecha: '2008-12-31', dato: 164258 },{ fecha: '2009-12-31', dato: 157898 },{ fecha: '2010-12-31', dato: 168723 },{ fecha: '2011-12-31', dato: 176045 },{ fecha: '2012-12-31', dato: 184407 },{ fecha: '2013-12-31', dato: 187050 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
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
<p>Evolución del empleo medida en trabajadores asegurados por el IMSS.</p>

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
            <td>31/12/2007</td>
            <td>171,936</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>164,258</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>157,898</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>168,723</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>176,045</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>184,407</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>187,050</td>
            <td>IMSS Subdelegación Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>El dato incluye a los trabajadores asegurados de los municipios de la región abarcados por la subdelegación Torreón.</p>

<p>Datos obtenidos de <a href="http://201.144.108.20/imssdigital/conoce/estadisticas/pages/memoria2012.aspx">IMSS</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaTrabajadoresAseguradosRegion

?>
