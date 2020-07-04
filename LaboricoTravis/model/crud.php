<?php
date_default_timezone_set('America/Bogota');
require_once 'dbconfig.php';

class Crud
{
    private $conn; 
    
    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    } 

    // Insertar registros 
    public function insert($table,$data)
    {
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;
            
            $columnString   = implode(',', array_keys($data));
            $valueString    = ":".implode(',:', array_keys($data));
            $sql            = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";
            $query          = $this->conn->prepare($sql);
            
            foreach($data as $key=>$val){
                $query->bindValue(':'.$key, $val);
            }
            
            $insert = $query->execute();
            
            GLOBAL $lastId; 
            $lastId = $this->conn->lastInsertId();
        
            return  $insert?$lastId:false;

        }else{
            return false;
        }
    }

    // Leer data
    public function getRows($table,$conditions = array())
    {
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;
        
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i    = 0;
            
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }

        if(array_key_exists("order_by",$conditions)){
            $sql .= ' ORDER BY '.$conditions['order_by']; 
        }
        
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
        
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['limit']; 
        }
        
        $query = $this->conn->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }
    
    // Actualizar data
    public function update($table, $data, $conditions)
    {
        if(!empty($data) && is_array($data)){
            $colvalSet = '';
            $whereSql = '';
            $i = 0;
            
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $colvalSet .= $pre.$key."='".$val."'";
                $i++;
            }
            
            if(!empty($conditions)&& is_array($conditions)){
                $whereSql .= ' WHERE ';
                $i = 0;
                
                foreach($conditions as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = '".$value."'";
                    $i++;
                }
            }
            
            $sql    = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
            $query  = $this->conn->prepare($sql);
            $update = $query->execute();
            
            return $update?$query->rowCount():false;
        }else{
            return false;
        }
    }
     
    // Eliminar registros
    public function delete($table,$conditions)
    {
        $whereSql = '';
        if(!empty($conditions)&& is_array($conditions)){
            $whereSql .= ' WHERE ';
            $i = 0;
            
            foreach($conditions as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $whereSql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        $sql    = "DELETE FROM ".$table.$whereSql;
        $delete = $this->conn->exec($sql);
        
        return $delete?$delete:false;
    }
}