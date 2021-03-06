<?php
/**
 * TrcIMPLAN Sitio Web - UsuariosDeEspaciosCulturalesYBibliotecasEnTorreon
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
 * Clase UsuariosDeEspaciosCulturalesYBibliotecasEnTorreon
 */
class UsuariosDeEspaciosCulturalesYBibliotecasEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Usuarios de Espacios Culturales y Bibliotecas en Torreón';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2018-07-09T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'usuarios-de-espacios-culturales-y-bibliotecas-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el municipio la cifra de usuarios de las bibliotecas públicas para el primer trimestre de 2018, alcanza casi los 20 mil. La biblioteca con mayor cantidad de usuarios es José García de Letona (ubicada en La Alameda), tanto en 2017 como en 2018.';
        $this->claves                     = 'IMPLAN, Torreon, Cultura, Bibliotecas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UsuariosDeEspaciosCulturalesYBibliotecasEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Cultura');
        $this->fuentes                    = array('Instituto Municipal de Cultura y Educación de Torreon','INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase UsuariosDeEspaciosCulturalesYBibliotecasEnTorreon

?>
