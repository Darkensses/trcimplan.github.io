<?php
/*
 * SMIbeta - DESCRIPCION
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace Blog;

/**
 * Clase SuenosPosibles
 */
class SuenosPosibles extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-08';
        $this->autor         = 'Lic. Eduardo Holguín Zehfuss';
        $this->nombre        = 'Sueños Posibles';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'suenos-posibles';
        $this->descripcion   = 'La ordenanza del alcalde Miguel Riquelme al IMPLAN Torreón es: integrar los sueños urbanos, las aspiraciones más sentidas de los torreonenses en un modelo de competitividad urbano.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'suenos-posibles/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="suenos-posibles/imagen.jpg"></span>

<p>Estamos en el Siglo XXI y en el Siglo XXI vamos a poner a Torreón. El "vamos" nos incluye a todos.  Desde siempre he escuchado el sueño de metrópoli que tiene cada lagunero que conozco. Sueños urbanos tan diversos como diversos son los sectores, los estratos socio económicos, las profesiones y las aspiraciones personales de mis interlocutores.</p>

<p>Hay quienes sueñan con una urbe convertida en una ciudad del conocimiento, otros con un hábitat sustentable, muchos con un centro histórico recuperado que preserve el acervo arquitectónico y que al mismo tiempo catapulte el futuro cultural de la región. Los industriales sueñan con un digno hospedaje fabril, los exportadores con una pertinente infraestructura logística, los prestadores de servicios turísticos con un centro de convenciones, los promotores de la bicicleta con ciclo pistas que permitan el uso eficiente de un medio de transporte amigable con el medio ambiente, los doctores con los suficientes hospitales para atender la problemática pública de salud, los jóvenes con un sistema universitario vinculado a la empresa.</p>

<p>Sueños todos, pero sueños que no se contradicen entre sí. Sueños todos, pero también posibles si se hace lo que hasta ahora no se ha hecho: ordenarlos en un modelo aspiracional, organizarlos en planes, programas, proyectos que determinen las rutas críticas, las acciones, los recursos, los apoyos gubernamentales, los quehaceres de los liderazgos –políticos, empresariales, sociales, académicos– requeridos para que se materialicen (los sueños) en un periodo no mayor a los 20 años.</p>

<p>Es en ese sentido que la ordenanza del alcalde Miguel Riquelme al IMPLAN Torreón es: integrar los sueños urbanos, las aspiraciones más sentidas de los torreonenses en un modelo de competitividad urbano. En un modelo de competitividad que sea políticamente posible porque en su construcción y ejecución participen los sectores políticos, sociales, universitarios y empresariales de la ciudad. Que sea viable porque sus metas y acciones sean planeadas, proyectadas y sustentadas financieramente, fiscalmente y jurídicamente en estadios de corto, mediano y largo plazo. No cuestionemos nuestras capacidades para materializar el sueño por un Torreón del Siglo XXI, mejor trabajemos en el cómo, cuándo y con qué.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase SuenosPosibles

?>