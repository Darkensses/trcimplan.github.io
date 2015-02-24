<?php
/**
 * EconomiaCarteraHipotecaria.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Cartera Hipotecaria en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'economia-cartera-hipotecaria';
        $this->descripcion  = 'Monto total de créditos otorgados hasta la fecha indicada.';
        $this->claves       = 'Lerdo, Mercados';
        $this->categorias   = array('Mercados');
        $this->region_nivel = 121;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Monto total de créditos otorgados hasta la fecha indicada.</p>

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
            <td>31/12/2010</td>
            <td>$ 231,743,194.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 240,598,550.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 261,966,994.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 319,887,703.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>$ 334,888,287.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Cartera Hipotecaria en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Cartera Hipotecaria</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Cartera Hipotecaria</h3>
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
            <td>2014-03-31</td>
            <td>$ 4,664,619,926.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td>$ 614,765,352.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td>$ 334,888,287.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td>$ 57,702,472.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td>$ 5,671,976,037.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Cartera Hipotecaria</h3>
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
            <td>03/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/tasa-inflacion-precios-torreon-2014.html">Tasa de inflación y precios en Torreón 2014</a></td>
            <td>Un incremento en la inflación como el que sufrió Torreón en 2014 no es necesariamente una señal negativa pues puede ser causada por exceso de dinero en la economía.</td>
          </tr>
          <tr>
            <td>01/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/productividad-zml.html">Productividad en la Zona Metropolitana de La Laguna</a></td>
            <td>Análisis de la productividad laboral, industria manufacturera y eficiencia del trabajo en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>25/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/estabilidad-de-precios-en-torreon.html">Estabilidad de Precios en Torreón</a></td>
            <td>En términos generales la inflación de Torreón se encuentra estable, lo cual genera certidumbre tanto a planta productiva local como extranjera.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en Lerdo</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en Lerdo</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en Lerdo</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html">Sectores que Han Frenado el Crecimiento (2008-2012) en Lerdo</a></td>
            <td>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html">Sectores que Han Presentado Alto Crecimiento (2008-2012) en Lerdo</a></td>
            <td>% de la producción en sectores con tasa promedio de crecimiento superior al promedio nacional en los últimos 5 años.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-tamano-del-mercado-hipotecario.html">Tamaño del Mercado Hipotecario en Lerdo</a></td>
            <td>Créditos dispuestos marginalmente durante el año indicado.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Lerdo</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Lerdo</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Lerdo</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-comercio.html">Índice de Especialización Local en Comercio en Lerdo</a></td>
            <td>Producción bruta total del comercio al por mayor y al por menor entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-industria-manufacturera.html">Índice de Especialización Local en Industria Manufacturera en Lerdo</a></td>
            <td>Producción bruta total de la industria manufacturera entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-servicios.html">Índice de Especialización Local en Servicios en Lerdo</a></td>
            <td>Producción bruta total de los servicios entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-construccion.html">Índice de Especialización Local en la Construcción en Lerdo</a></td>
            <td>Producción bruta total de la actividad económica de construcción entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-mineria.html">Índice de Especialización Local en la Minería en Lerdo</a></td>
            <td>Producción bruta total de la actividad económica de minería entre la producción bruta total.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2010-12-31', dato: 231743194.00 },{ fecha: '2011-12-31', dato: 240598550.00 },{ fecha: '2012-12-31', dato: 261966994.00 },{ fecha: '2013-12-31', dato: 319887703.00 },{ fecha: '2014-03-31', dato: 334888287.00 }],
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
      data: [{ region: 'Torreón', dato: 4664619926.00 },{ region: 'Gómez Palacio', dato: 614765352.00 },{ region: 'Lerdo', dato: 334888287.00 },{ region: 'Matamoros', dato: 57702472.00 },{ region: 'La Laguna', dato: 5671976037.00 }],
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

} // Clase EconomiaCarteraHipotecaria

?>
