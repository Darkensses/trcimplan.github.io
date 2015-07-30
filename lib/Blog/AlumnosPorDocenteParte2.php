<?php
/**
 * TrcIMPLAN - Alumnos por docente, indicador clave para la mejora de la educación (parte 2)
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
 * @package TrcIMPLAN
 */

namespace Blog;

/**
 * Clase AlumnosPorDocenteParte2
 */
class AlumnosPorDocenteParte2 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Alumnos por docente, indicador clave para la mejora de la educación (parte 2)';
        $this->autor            = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha            = '2015-07-15T16:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'alumnos-por-docente-parte-2';
        $this->imagen           = 'alumnos-por-docente-parte-2/imagen.jpg';
        $this->imagen_previa    = 'alumnos-por-docente-parte-2/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Estudio sobre si debe considerarse la cantidad de alumnos por profesor como un factor en la mejora educativa.';
        $this->claves           = 'IMPLAN, Torreon, Alumnos, Docente, Educacion';
        $this->categorias       = array('Competitividad', 'Educación');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
     // $schema->image_show     = true; // Por defecto la imagen se agrega al principio del contenido
        $schema->author         = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el contenido desde archivo markdown
        $this->contenido->articleBody = $this->cargar_archivo_markdown_extra('lib/Blog/AlumnosPorDocenteParte2.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Convertir markdown a HTML
        $markdown = $this->cargar_archivo_markdown_extra('lib/Blog/AlumnosPorDocenteParte2.md');
        // Para redifusión, si tiene la imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion = "<img src=\"{$this->imagen}\"><br>\n\n{$markdown}";
        } else {
            $this->redifusion = $markdown;
        }
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase AlumnosPorDocenteParte2

?>