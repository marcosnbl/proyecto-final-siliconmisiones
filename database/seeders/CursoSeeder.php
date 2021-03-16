<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso -> nombre= 'React Js';
        $curso -> imagen= '/reactjs.png';
        $curso -> descripcion_corta= 'React es una de las librerías más utilizadas hoy para crear aplicaciones web. Aprende desde la creación y diseño de componentes hasta traer datos de un API. Desarrolla aplicaciones web de muy alta calidad en tiempo record con React.js';
        $curso -> descripcion_larga= 'En este curso aprenderás a pensar y programar en ReactJS. Podrás diseñar componentes eficientes y experiencias de navegabilidad escalables, aprovechando los últimos patrones y sintaxis de ES6 y JSX a tu favor. Utilizarás la suite de Firebase para poder almacenar y consultar información dinámica, cambiante y reactiva. Al finalizar el curso contarás con habilidades infaltables para desarrollar tus propias aplicaciones SPA, realizar prototipos rápidos, iterativos y ordenados para poder concentrarte en lo más importante que es el usuario final.';
        $curso -> save();

        $curso2 = new Curso();
        $curso2 -> nombre= 'Javascript';
        $curso2 -> imagen= '/java-script1.JPG';
        $curso2 -> descripcion_corta= 'JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, ​ basado en prototipos, imperativo, débilmente tipado y dinámico.';
        $curso2 -> descripcion_larga= 'En este curso aprenderás los fundamentos del lenguaje de programación más usado en la actualidad, con el cual es posible crear aplicaciones de todo tipo. Explorarás inicialmente herramientas propias del lenguaje, indagando casos prácticos de aplicación. Reconocerás la utilidad de las librerías estudiando jQuery, y cómo aplicar técnicas de desarrollo para apps modernas con AJAX. Al finalizar el curso estarás en condiciones de crear soluciones web interactivas y trasladar los conocimientos del curso en cualquier framework JavaScript.';
        $curso2 -> save();

        $curso3 = new Curso();
        $curso3 -> nombre= 'Python';
        $curso3 -> imagen= '/python.jpg';
        $curso3 -> descripcion_corta= 'Python es un lenguaje de programación interpretado cuya filosofía hace hincapié en la legibilidad de su código. Se trata de un lenguaje de programación multiparadigma, ya que soporta parcialmente la orientación a objetos, programación imperativa y, en menor medida, programación funcional. Es un lenguaje interpretado, dinámico y multiplataforma.';
        $curso3 -> descripcion_larga= 'El curso de Python está dirigido a personas que deseen aprender este lenguaje de programación desde cero hasta nivel avanzado, a través de la realización de ejercicios prácticos, así como su conceptualización teórica.
        Al finalizar el curso de Python tendrás la capacidad de prestar tus servicios a empresas que requieran analistas de datos, programadores de IA y desarrolladores web.';
        $curso3 -> save();



    }
}
