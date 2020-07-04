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
        'perfil' => 'Soy una persona apasionado por la tecnologia,  con conocimiento en la implementación y desarrollo rápido de aplicaciones software enfocado a entornos web en: JAVA, .NET, Python, HTML, JAVASCRIPT y PHP',
        'foto' => 'https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png'
    );
    array_push($arrayProfesionales, $prof1);

    $prof2 = array(
        'id' => 2,
        'nombres' => 'David Vargas',
        'profesion' => 'Administrador de empresas',
        'perfil' =>  'Profesional con una solida vision humanistica, cientifica y tecnologica, habil en el campo de la planeación, organización, direccion y control para el logro de los objetivos',
        'foto' => 'https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png'
    );
    array_push($arrayProfesionales, $prof2);

    $prof3 = array(
        'id' => 3,
        'nombres' => 'Daniela Garavito',
        'profesion' => 'Diseñadora Grafica',
        'perfil' => 'Soy una diseñadora que enfoca su labor hacia la creacion de identidad grafica desde la imagen global, la ilustracion, el ambito editorial y la gerencia de marca',
        'foto' => 'https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png'
    );
    array_push($arrayProfesionales, $prof3);    

    $prof4 = array(
        'id' => 4,
        'nombres' => 'Juan Carlos Opsina',
        'profesion' => 'Arquitecto',
        'perfil' => 'Soy un profesional con capacidad de liderazgo ,encaminando mis actos hacia la innovación, sostenibilidad económica, social y ambiental',
        'foto' => 'https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg'
    );
    array_push($arrayProfesionales, $prof4); 
    
    $prof5 = array(
        'id' => 5,
        'nombres' => 'Leonardo Mejia',
        'profesion' => 'Plomero',
        'perfil' => 'Plomero calificado acostumbrado a trabajar en grandes equipos y con complejos sistemas de tuberias, extensos conocimientos en regulaciones legales de seguridad',
        'foto' => 'https://lh3.googleusercontent.com/proxy/dbq8rb4tC3XFIvhtPdzwxjsNsMACxnyLscpDUm8KBKsyKIVA_lPcL95SJ9_eMob2xmabRNSTFmWZkjnGLQ2oiVZtjyFXX4Yq_2A6Mu1QlZyrwToPgLY67grRQmXiuZsfL6W5fohxwU02M7CIfUip4caeHeLqkO8'
    );
    array_push($arrayProfesionales, $prof5); 

    $prof6 = array(
        'id' => 6,
        'nombres' => 'Jose Serpa',
        'profesion' => 'Carpintero ebanista',
        'perfil' => 'Carpintero hábil y apasionado con más de 10 años de experiencia en construcción residencial y comercial. Reputación positiva por la calidad del trabajo, la puntualidad en la construcción y ajustados a su presupuesto',
        'foto' => 'https://lh3.googleusercontent.com/proxy/13Oqq7K1Srh0kS01_gzO2W_J1vW9DWVtteGnHW57PeHzcPHcG4BzoRefGpasAshvo_m4qmFEXyTt2JSUcwdb4C9_FOJUvvd6vESGh-axeIUo4wzTRn9dtnc91Twtdw4'
    );
    array_push($arrayProfesionales, $prof6); 

    //retornamos el arreglo de profesionales
    return $arrayProfesionales;
}




