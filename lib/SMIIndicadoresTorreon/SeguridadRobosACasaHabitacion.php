<?php
/**
 * SeguridadRobosACasaHabitacion.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadRobosACasaHabitacion
 */
class SeguridadRobosACasaHabitacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Robos a Casa Habitación en Torreón';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'seguridad-robos-a-casa-habitacion';
        $this->descripcion = 'Robos totales por mes a casa habitación.';
        $this->claves      = 'Torreón';
        $this->categorias  = array();
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
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
            <td class="centrado">31/01/2014</td>
            <td class="derecha">70</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">28/02/2014</td>
            <td class="derecha">65</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/03/2014</td>
            <td class="derecha">73</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/04/2014</td>
            <td class="derecha">67</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/05/2014</td>
            <td class="derecha">108</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">54</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/07/2014</td>
            <td class="derecha">58</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/08/2014</td>
            <td class="derecha">76</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/09/2014</td>
            <td class="derecha">81</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Robos a Casa Habitación en Torreón</h3>
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
            <td>2014-09-30</td>
            <td class="derecha">81</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-09-30</td>
            <td class="derecha">28</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-09-30</td>
            <td class="derecha">14</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-09-30</td>
            <td class="derecha">5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-09-30</td>
            <td class="derecha">128</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
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
      data: [{ fecha: '2014-01-31', dato: 70 },{ fecha: '2014-02-28', dato: 65 },{ fecha: '2014-03-31', dato: 73 },{ fecha: '2014-04-30', dato: 67 },{ fecha: '2014-05-31', dato: 108 },{ fecha: '2014-06-30', dato: 54 },{ fecha: '2014-07-31', dato: 58 },{ fecha: '2014-08-31', dato: 76 },{ fecha: '2014-09-30', dato: 81 }],
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
      data: [{ region: 'Torreón', dato: 81 },{ region: 'Gómez Palacio', dato: 28 },{ region: 'Lerdo', dato: 14 },{ region: 'Matamoros', dato: 5 },{ region: 'La Laguna', dato: 128 }],
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

} // Clase SeguridadRobosACasaHabitacion

?>
