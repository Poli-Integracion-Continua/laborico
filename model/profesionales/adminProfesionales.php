<?php
/**
 * Carga la informacion de la la vista de profesionales
 * @author Andres Verjan
 */
function getListProfesionales(){
    return getProfesionales();
}

/**
 * Devuelve arreglo de profesionales
 * @author Andres Verjan
 * @return array Profesionales
 */
function getProfesionales(){    
    $arrayProfesionales = [];

    $prof1 = array(
        'id' => 1,
        'nombres' => 'Laura Pinzon',
        'profesion' => 'Desarrolladora de software',
        'perfil' => 'Soy una persona organizada, apasionado por la tecnologia',
        'foto' => 'profesional1.jpg'
    );
    array_push($arrayProfesionales, $prof1);

    $prof2 = array(
        'id' => 2,
        'nombres' => 'David Vargas',
        'profesion' => 'Administrador de empresas',
        'perfil' => 'Soy una persona organizada, apasionado por la tecnologia',
        'foto' => 'profesional2.jpg'
    );
    array_push($arrayProfesionales, $prof2);

    $prof3 = array(
        'id' => 3,
        'nombres' => 'Daniela Garavito',
        'profesion' => 'Diseñadora Grafica',
        'perfil' => 'Soy una persona organizada, apasionado por la tecnologia',
        'foto' => 'profesional3.jpg'
    );
    array_push($arrayProfesionales, $prof3);    

    //retornamos el arreglo de profesionales
    return $arrayProfesionales;
}




