<?php
/**
 * TrcIMPLAN Sitio Web - TorreonYSusAvancesHaciaLaMejoraRegulatoria
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase TorreonYSusAvancesHaciaLaMejoraRegulatoria
 */
class TorreonYSusAvancesHaciaLaMejoraRegulatoria extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón y sus Avances hacia la Mejora Regulatoria.';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2020-01-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-y-sus-avances-hacia-la-mejora-regulatoria-ene2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El municipio de Torreón basándose en las observaciones de organismos internacionales como la OCDE o el Banco Mundial, ha registrado hasta hoy avances importantes en cuanto a mejora regulatoria, sin embargo, persisten retos que requieren de mayor coordinación entre dependencias gubernamentales en todos los niveles, así como de la sociedad civil”.';
        $this->claves                     = 'IMPLAN, Torreon, mejora regulatoria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonYSusAvancesHaciaLaMejoraRegulatoria.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno','Gobierno Digital');
        $this->fuentes                    = array('Banco Mundial', 'OCDE');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonYSusAvancesHaciaLaMejoraRegulatoria

?>
