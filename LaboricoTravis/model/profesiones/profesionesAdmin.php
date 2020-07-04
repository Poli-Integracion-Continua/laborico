<?php


//Declaramos variables y arreglos globales al archivo


/**
 * Consulta lista de profesiones
 * @author Andres Verjan
 */
function getListProfesiones(){
    return getProsiones();
}

/**
 * Función que devuelve un listado de profesionales
 * @author Andres Verjan
 * @return array Arreglo de profesiones
 */
function getProsiones(){
    $arrayProfesiones = array();

    $prof1 = array(
        'id' => 1,
        'profesion' => 'Desarrollador de software',
        'imagen' => 'desarrollador.jpg'
    );
    array_push($arrayProfesiones, $prof1);

    //Retornamos la lista
    return $arrayProfesiones;
}




?>