<?php
/**
 * EconomiaTasaDeDesempleoAbierto.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaTasaDeDesempleoAbierto
 */
class EconomiaTasaDeDesempleoAbierto extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tasa de Desempleo Abierto en Lerdo';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-tasa-de-desempleo-abierto';
        $this->descripcion = 'Número total de desempleados entre la Población económicamente activa.';
        $this->claves      = 'Lerdo, Empleo';
        $this->categorias  = array('Empleo');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Número total de desempleados entre la Población económicamente activa.</p>

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
            <td class="centrado">12/03/1990</td>
            <td class="derecha">2.99 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">14/02/2000</td>
            <td class="derecha">0.94 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">25/06/2010</td>
            <td class="derecha">7.41 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/03/2014</td>
            <td class="derecha">2.80 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">1.67 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/09/2014</td>
            <td class="derecha">9.23 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Tasa de Desempleo Abierto en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Tasa de Desempleo Abierto</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Desempleo Abierto</h3>
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
            <td>2014-09-30</td>
            <td class="derecha">4.57 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-09-30</td>
            <td class="derecha">7.04 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-09-30</td>
            <td class="derecha">9.23 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-09-30</td>
            <td class="derecha">5.31 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-09-30</td>
            <td class="derecha">5.74 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1990-03-12', dato: 2.9900 },{ fecha: '2000-02-14', dato: 0.9400 },{ fecha: '2010-06-25', dato: 7.4100 },{ fecha: '2014-03-31', dato: 2.8000 },{ fecha: '2014-06-30', dato: 1.6700 },{ fecha: '2014-09-30', dato: 9.2300 }],
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
      data: [{ region: 'Torreón', dato: 4.5700 },{ region: 'Gómez Palacio', dato: 7.0400 },{ region: 'Lerdo', dato: 9.2300 },{ region: 'Matamoros', dato: 5.3100 },{ region: 'La Laguna', dato: 5.7400 }],
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

} // Clase EconomiaTasaDeDesempleoAbierto

?>