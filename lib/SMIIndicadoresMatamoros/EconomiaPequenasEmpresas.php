<?php
/**
 * TrcIMPLAN - SMI Indicadores Matamoros Economía Pequeñas Empresas (Creado por Central:SmiLanzadera)
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
 * Clase EconomiaPequenasEmpresas
 */
class EconomiaPequenasEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Pequeñas Empresas en Matamoros';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-pequenas-empresas';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Porcentaje del total de empresas que emplean entre 11 y 50 empleados.';
        $this->claves            = 'IMPLAN, Matamoros, Empresas';
        $this->categorias        = array('Empresas');
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
            <td>31/12/2013</td>
            <td>3.01 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>2.31 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Empresas.</p>
      <h3>Observaciones</h3>
<p>A nivel nacional el 5.5% de las empresas son pequeñas.</p>

<p>Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Pequeñas Empresas en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Pequeñas Empresas</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Pequeñas Empresas</h3>
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
            <td>2014-07-31</td>
            <td>7.65 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-07-31</td>
            <td>7.78 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-07-31</td>
            <td>5.62 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-07-31</td>
            <td>2.31 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-07-31</td>
            <td>7.54 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-07-31</td>
            <td>7.80 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-07-31</td>
            <td>6.24 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-07-31</td>
            <td>5.22 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
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
            <td><a href="../indicadores-gomez-palacio/sociedad-acceso-a-servicios-financieros.html">Acceso a Servicios Financieros en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de sucursales y corresponsales de banca múltiple en la ciudad por cada 10 mil adultos como proxy del acceso a servicios financieros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-acceso-a-servicios-financieros.html">Acceso a Servicios Financieros en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de sucursales y corresponsales de banca múltiple en la ciudad por cada 10 mil adultos como proxy del acceso a servicios financieros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-acceso-a-servicios-financieros.html">Acceso a Servicios Financieros en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de sucursales y corresponsales de banca múltiple en la ciudad por cada 10 mil adultos como proxy del acceso a servicios financieros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-acceso-a-servicios-financieros.html">Acceso a Servicios Financieros en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de sucursales y corresponsales de banca múltiple en la ciudad por cada 10 mil adultos como proxy del acceso a servicios financieros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-acceso-a-servicios-financieros.html">Acceso a Servicios Financieros en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de sucursales y corresponsales de banca múltiple en la ciudad por cada 10 mil adultos como proxy del acceso a servicios financieros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-licencia-para-negocio.html">Promedio de Horas para la Realización del Trámite de Licencia para Negocio en Torreón</a></td>
            <td>Determina el número de horas requeridas para la realización del trámite de licencia para negocios. Número de Horas Empleadas para el Trámite de Licencias para Negocios, entre Número de Licencias para Negocios Otorgadas.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa-neta.html">Inversión Extranjera Directa (Neta) en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el promedio móvil de tres años de la inversión extranjera directa neta que recibe cada ciudad. Este indicador se calcula a nivel municipal a partir de la cifra estatal, la cual se prorratea con el porcentaje que aporta cada municipio al PIB estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-inversion-extranjera-directa-neta.html">Inversión Extranjera Directa (Neta) en La Laguna</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el promedio móvil de tres años de la inversión extranjera directa neta que recibe cada ciudad. Este indicador se calcula a nivel municipal a partir de la cifra estatal, la cual se prorratea con el porcentaje que aporta cada municipio al PIB estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-inversion-extranjera-directa-neta.html">Inversión Extranjera Directa (Neta) en Lerdo</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el promedio móvil de tres años de la inversión extranjera directa neta que recibe cada ciudad. Este indicador se calcula a nivel municipal a partir de la cifra estatal, la cual se prorratea con el porcentaje que aporta cada municipio al PIB estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-inversion-extranjera-directa-neta.html">Inversión Extranjera Directa (Neta) en Matamoros</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el promedio móvil de tres años de la inversión extranjera directa neta que recibe cada ciudad. Este indicador se calcula a nivel municipal a partir de la cifra estatal, la cual se prorratea con el porcentaje que aporta cada municipio al PIB estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-inversion-extranjera-directa-neta.html">Inversión Extranjera Directa (Neta) en Torreón</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el promedio móvil de tres años de la inversión extranjera directa neta que recibe cada ciudad. Este indicador se calcula a nivel municipal a partir de la cifra estatal, la cual se prorratea con el porcentaje que aporta cada municipio al PIB estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-empresa-socialmente-responsable.html">Empresa Socialmente Responsable en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de empresas certificadas como Empresa Socialmente Responsable. Únicamente se consideró la ubicación geográfica de la matriz de la empresa.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-empresa-socialmente-responsable.html">Empresa Socialmente Responsable en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de empresas certificadas como Empresa Socialmente Responsable. Únicamente se consideró la ubicación geográfica de la matriz de la empresa.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-empresa-socialmente-responsable.html">Empresa Socialmente Responsable en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de empresas certificadas como Empresa Socialmente Responsable. Únicamente se consideró la ubicación geográfica de la matriz de la empresa.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-empresa-socialmente-responsable.html">Empresa Socialmente Responsable en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de empresas certificadas como Empresa Socialmente Responsable. Únicamente se consideró la ubicación geográfica de la matriz de la empresa.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-empresa-socialmente-responsable.html">Empresa Socialmente Responsable en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de empresas certificadas como Empresa Socialmente Responsable. Únicamente se consideró la ubicación geográfica de la matriz de la empresa.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.</td>
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
      data: [{ fecha: '2013-12-31', dato: 3.0100 },{ fecha: '2014-07-31', dato: 2.3100 }],
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
      data: [{ region: 'Torreón', dato: 7.6500 },{ region: 'Gómez Palacio', dato: 7.7800 },{ region: 'Lerdo', dato: 5.6200 },{ region: 'Matamoros', dato: 2.3100 },{ region: 'La Laguna', dato: 7.5400 },{ region: 'Coahuila', dato: 7.8000 },{ region: 'Durango', dato: 6.2400 },{ region: 'Nacional', dato: 5.2200 }],
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
<p>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</p>

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
            <td>3.01 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>2.31 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Empresas.</p>
      <h3>Observaciones</h3>
<p>A nivel nacional el 5.5% de las empresas son pequeñas.</p>

<p>Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaPequenasEmpresas

?>
