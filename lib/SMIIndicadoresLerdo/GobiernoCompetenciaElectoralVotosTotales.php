<?php
/**
 * GobiernoCompetenciaElectoralVotosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase GobiernoCompetenciaElectoralVotosTotales
 */
class GobiernoCompetenciaElectoralVotosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Competencia Electoral Votos Totales en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'gobierno-competencia-electoral-votos-totales';
        $this->descripcion  = '';
        $this->claves       = 'Lerdo, Participación Ciudadana';
        $this->categorias   = array('Participación Ciudadana');
        $this->region_nivel = 121;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
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
            <td>01/07/2012</td>
            <td>56,517</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Competencia Electoral Votos Totales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Competencia Electoral Votos Totales</h3>
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
            <td>2012-07-01</td>
            <td>246,044</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-07-01</td>
            <td>120,131</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-07-01</td>
            <td>56,517</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-07-01</td>
            <td>48,093</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-07-01</td>
            <td>479,785</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Competencia Electoral Votos Totales</h3>
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
            <td>10/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sistema-politico-estable-funcional.html">Sistema Político Estable y Funcional</a></td>
            <td>El Sistema Político Estable y Funcional es el subíndice mejor calificado de la zona metropolitana, ya que IMCO nos sitúa en el lugar 11 del ranking.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-competencia-electoral-diferencia-de-votos.html">Competencia Electoral Diferencia de Votos en Lerdo</a></td>
            <td>Diferencia de votos entre primer y segundo lugar en la elección federal.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-competencia-electoral.html">Competencia Electoral en Lerdo</a></td>
            <td>Diferencia entre los dos candidatos con más votación entre el total de votos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html">Organizaciones de la Sociedad Civil en Lerdo</a></td>
            <td>Organizaciones de la sociedad civil por cada cien mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-participacion-electoral.html">Participación Electoral en Lerdo</a></td>
            <td>Porcentaje de personas que emitieron su voto.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 246044 },{ region: 'Gómez Palacio', dato: 120131 },{ region: 'Lerdo', dato: 56517 },{ region: 'Matamoros', dato: 48093 },{ region: 'La Laguna', dato: 479785 }],
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
    } // constructor

} // Clase GobiernoCompetenciaElectoralVotosTotales

?>
