<?php
/**
 * SeguridadTasaDeHomicidios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SeguridadTasaDeHomicidios
 */
class SeguridadTasaDeHomicidios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Tasa de Homicidios en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'seguridad-tasa-de-homicidios';
        $this->descripcion  = 'Número de homicidios por cada 100 mil habitantes.';
        $this->claves       = 'Matamoros, Delincuencia, Seguridad';
        $this->categorias   = array('Delincuencia', 'Seguridad');
        $this->region_nivel = 131;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Número de homicidios por cada 100 mil habitantes.</p>

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
            <td>55.7000</td>
            <td>SNSP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Tasa de Homicidios</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Homicidios</h3>
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
            <td>45.7600</td>
            <td>SNSP</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>57.3800</td>
            <td>SNSP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>46.7500</td>
            <td>SNSP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>55.7000</td>
            <td>SNSP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>49.8800</td>
            <td>SNSP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Tasa de Homicidios</h3>
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
            <td>18/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delito-seguridad.html">La Prevención del Delito como elemento fundamental para la Seguridad</a></td>
            <td>La prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).</td>
          </tr>
          <tr>
            <td>25/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/comportamiento-tendencia-incidencia-delictiva.html">Comportamiento y tendencia de la incidencia delictiva. Una visión ampliada.</a></td>
            <td>Mostramos las tendencias de los delitos más recurrentes en la ciudad de Torreón; con datos del Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública.</td>
          </tr>
          <tr>
            <td>02/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/zml-sistema-derecho-confiable-objetivo.html">La Zona Metropolitana de La Laguna y sus municipios en Sistema de Derecho Confiable y Objetivo</a></td>
            <td>De acuerdo al ICU 2012, es el subíndice más débil de la región; algunos de sus subíndices ponderados con alto peso por el IMCO corresponden a rubros de seguridad pública.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-delitos.html">Delitos en Matamoros</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-homicidios.html">Homicidios en Matamoros</a></td>
            <td>Número de homicidios durante el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-presuntos-delincuentes-del-fuero-comun.html">Presuntos Delincuentes del Fuero Común en Matamoros</a></td>
            <td>Cantidad de presuntos delincuentes registrados en los juzgados de primera instancia del fuero común por año.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-presuntos-delincuentes-del-fuero-federal.html">Presuntos Delincuentes del Fuero Federal en Matamoros</a></td>
            <td>Presuntos delincuentes registrados en los juzgados de primera instancia en materia penal del fuero federal</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-presuntos-delincuentes-por-narcoticos.html">Presuntos Delincuentes por Narcóticos en Matamoros</a></td>
            <td>Presuntos delincuentes por delitos en materia de narcóticos registrados en los juzgados del fuero federal.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Matamoros</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-secuestros.html">Secuestros en Matamoros</a></td>
            <td>Cantidad de secuestros en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-sentenciados-registrados-del-fuero-comun.html">Sentenciados Registrados del Fuero Común en Matamoros</a></td>
            <td>Cantidad de sentenciados registrados en los juzgados de primera instancia del fuero común por año.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-sentenciados-registrados-del-fuero-federal.html">Sentenciados Registrados del Fuero Federal en Matamoros</a></td>
            <td>Sentenciados registrados en los juzgados de primera instancia en materia penal del fuero federal</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-sentenciados-en-materia-de-narcoticos-registrados-en-el-fuero-federal.html">Sentenciados en Materia de Narcóticos Registrados en el Fuero Federal en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-delitos.html">Tasa de Delitos en Matamoros</a></td>
            <td>Delitos por cada 100 mil habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en Matamoros</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en Matamoros</a></td>
            <td>Homicidios por habitantes por 100 mil</td>
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
      data: [{ region: 'Torreón', dato: 45.7600 },{ region: 'Gómez Palacio', dato: 57.3800 },{ region: 'Lerdo', dato: 46.7500 },{ region: 'Matamoros', dato: 55.7000 },{ region: 'La Laguna', dato: 49.8800 }],
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

} // Clase SeguridadTasaDeHomicidios

?>
