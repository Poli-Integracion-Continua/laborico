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

    $prof2 = array(
        'id' => 2,
        'profesion' => 'Contador Publico',
        'imagen' => 'contador.jpg'
    );
    array_push($arrayProfesiones, $prof2);

	$prof3 = array(
        'id' => 3,
        'profesion' => 'Enfermeras(os)',
        'imagen' => 'Enfermeras.jpg'
    );
    array_push($arrayProfesiones, $prof3);
	
	$prof4 = array(
        'id' => 4,
        'profesion' => 'Construcción',
        'imagen' => 'Construccion.jpg'
    );
    array_push($arrayProfesiones, $prof4);

	$prof5 = array(
        'id' => 5,
        'profesion' => 'Diseñadores',
        'imagen' => 'disenador.jpg'
    );
    array_push($arrayProfesiones, $prof5);

	$prof6 = array(
        'id' => 6,
        'profesion' => 'Confección',
        'imagen' => 'Confeccion.jpg'
    );
    array_push($arrayProfesiones, $prof6);	
	
	$prof7 = array(
        'id' => 7,
        'profesion' => 'Asesores Comerciales',
        'imagen' => 'vendedor.jpg'
    );
    array_push($arrayProfesiones, $prof7);

    //Retornamos la lista
    return $arrayProfesiones;
}




?>