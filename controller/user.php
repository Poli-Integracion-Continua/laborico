<?php
// CONTROLADOR DE TIPO DE USUARIOS
session_start();

require '../../Model/class.crud.php';
$db = new crud();

$tblName = 'usuario';

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    
    //INSERTAR
    if($_REQUEST['action_type'] == 'add'){

        switch ($_REQUEST['user']) {
            case 'Contratante':
                $tipoUsuario    = 1;
            break;
            
            case 'Usuario':
                $tipoUsuario    = 2;
            break;
            
            default:
            break;
        }

    	//variables que recibe
        $nombres        =$_POST['nombresUsuario'];
        $apellidos      =$_POST['apellidosUsuario'];
        $documento      =$_POST['documentoUsuario'];
        $password       = password_hash($documento, PASSWORD_DEFAULT);
        $email          =$_POST['emailUsuario'];
    	
    	$usuarioData = array(
            'idTipoUsuario'       => $tipoUsuario,
            'nombresUsuario'      => $nombres,
            'apellidosUsuario'    => $apellidos,
            'documentoUsuario'    => $documento,
            'passwordUsuario'     => $password,
            'emailUsuario'	      => $email,
            'profesionAsignada'   => $asignatura
        );

        // OJO - reviso que el usuario no exista por tipo de documento
        $where      = array(    'documentoUsuario' => $documento );
        $conditions = array(    'select'        =>'documentoUsuario',
                                'where'         => $where,                                 
                                'order_by'      =>'idUsuario ASC',
                                'return_type'   => 'count');

        $consulta = $db->getRows($tblName, $conditions);
        
        if ($consulta > 0) {
            header("Location:../index.php?value=userexist");
        
        }else{
            
            if ($db->insert($tblName,$usuarioData)){
                
                //Insert exitoso
                header("Location:../index.php?value=usersuccess");
            }else{

                //Error en la solicitud
                header("Location:../index.php?value=userfailed");
            }
        }    
  
    //EDITAR
    }elseif($_REQUEST['action_type'] == 'edit'){
        
        // variables que recibe
        $nombres        = $_POST['nombresUsuario'];
        $apellidos      = $_POST['apellidosUsuario'];
        $documento      = $_POST['documentoUsuario'];
        $password       = $_POST['passwordUsuario'];
        $profesion      = $_POST['profesionAsignada'];
        $password       = password_hash($password, PASSWORD_DEFAULT);

       $condition  = array('documentoUsuario' => $documento);
        $userData = array(
            
            'idGradoAcademico'    => $curso,
            'nombresUsuario'      => $nombres,
            'apellidosUsuario'    => $apellidos,
            'documentoUsuario'    => $documento,
            'codigoUsuario'       => $codigo,
            'passwordUsuario'     => $password,
            'profesionAsignada'   => $asignatura
        );

                 
        if($db->update($tblName,$userData,$condition)){
            header("Location:../index.php?value=updatesuccess"); 
        }else{
           header("Location:../index.php?value=dontupdate"); 
        }               
        
    //ELIMINAR
    }elseif($_REQUEST['action_type'] == 'delete'){
        
        if(!empty($_POST['documentoUsuario'])){
            $condition  = array('documentoUsuario' => $_POST['documentoUsuario']);
            
            if($db->delete($tblName,$condition)){
                header("Location:../index.php?value=deleted"); 
            }else{
                header("Location:../index.php?value=dontdeleted"); 
            }   
        }
    }
}