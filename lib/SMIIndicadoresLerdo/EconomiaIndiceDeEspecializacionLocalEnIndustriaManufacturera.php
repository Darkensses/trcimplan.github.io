<?php
/**
 * EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera
 */
class EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Especialización Local en Industria Manufacturera en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-indice-de-especializacion-local-en-industria-manufacturera';
        $this->descripcion = 'Producción bruta total de la industria manufacturera entre la producción bruta total.';
        $this->claves      = 'Lerdo, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasormwcwju">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Producción bruta total de la industria manufacturera entre la producción bruta total.
<h4>Información recopilada</h4>
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
<td class="centrado">31/12/1998</td>
<td class="derecha">59.25 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">75.85 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">53.94 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
El índice de especialización en manufactura a nivel nacional es de:

- 2008 = 44.34%
- 2003 = 43.26%
- 1998 = 48.52%

Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisuykszbmn" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetblodduzs" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <h4>En otras regiones</h4>
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
<td>1998-12-31</td>
<td class="derecha">59.34 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">57.86 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">76.06 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1998-12-31</td>
<td class="derecha">75.60 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2003-12-31</td>
<td class="derecha">59.73 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">60.23 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>1998-12-31</td>
<td class="derecha">34.79 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">26.80 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">58.72 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1998-12-31</td>
<td class="derecha">64.92 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">58.83 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">71.10 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2008-12-31</td>
<td class="derecha">44.34 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasormwcwju a:first').tab('show')
});
// LENGUETA
$('#Lenguetasormwcwju a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisuykszbmn === 'undefined') {
    varMorrisuykszbmn = Morris.Line({
      element: 'Morrisuykszbmn',
      data: [{ fecha: '1998-12-31', dato: 59.2500 },{ fecha: '2003-12-31', dato: 75.8500 },{ fecha: '2008-12-31', dato: 53.9400 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA
$('#Lenguetasormwcwju a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapblodduzs;
  // DECLARAR LOS CIRCULOS DE COLORES PARA GEOPUNTOS
  var circuloParque = {
    "radius": 8,
    "fillColor": "#2BFF2B",
    "color": "#000",
    "weight": 1,
    "opacity": 1,
    "fillOpacity": 0.7
  };
  // Función para Pop-Ups
  function onEachFeature(feature, layer) {
    if (feature.properties && feature.properties.popupContent) {
      layer.bindPopup(feature.properties.popupContent);
    }
  };
  // Función para el mapa
  function initmapblodduzs() {
    // Nuevo Mapa
    mapblodduzs = new L.Map('LeafLetblodduzs');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapblodduzs.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapblodduzs.addLayer(osm);
    // ARREGLO CON LOS GEOPUNTOS
    var geoPuntos = {
      "type": "FeatureCollection",
      "features": [
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Plaza Mayor" },
          "geometry": {"type":"Point","coordinates":[-103.45387,25.54021]},
          "id": 1
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque V. Carranza" },
          "geometry": {"type":"Point","coordinates":[-103.43321,25.54132]},
          "id": 2
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque Urbano" },
          "geometry": {"type":"Point","coordinates":[-103.39061,25.55129]},
          "id": 3
        }
      ]
    };
    // CONMUTAR LOS GEOPUNTOS POR SUS CIRCULOS DE COLORES
    L.geoJson(geoPuntos, {
      onEachFeature: onEachFeature,
      pointToLayer: function (feature, latlng) {
        switch (feature.properties.name) {
          case 'Parque': return L.circleMarker(latlng, circuloParque);
        }
      }
    }).addTo(mapblodduzs);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapblodduzs === 'undefined') {
    varinitmapblodduzs = initmapblodduzs();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera

?>
