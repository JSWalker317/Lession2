<?php

class BaseModel extends Database
{
    protected $connect;
    public function __construct(){
        // echo __METHOD__;
        $this->connect = $this->connect();
    }

    public function all($table){

        $sql = "SELECT * FROM ${table}";
        // die($sql);

        $query = $this->_query($sql);
        // var_dump($query);
        $data = [];

        while($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function find($table, $id){
        if( $id != null ){

            $sql = "SELECT * FROM ${table} WHERE ${table}.id = $id";
            // die($sql);
   
           $query = $this->_query($sql);
           // var_dump($query);
           $data = [];
   
           while($row = mysqli_fetch_assoc($query)) {
               array_push($data, $row);
           }
   
           return $data;
        }
        return print('id not found');
    
        
    }
    public function create($table, $data = []){
        $columns = implode(', ', array_keys($data));
        // chuyen value thanh dang string de luu vao db
        $valueFinal = array_map(function($value) {
            return "'" . $value . "'";
        }, array_values($data));
        $valueFinal = implode(', ', $valueFinal);
        // print_r($valueFinal);
        $sql = "INSERT INTO ${table} (${columns}) VALUES (${valueFinal})";
        //  die($sql);

        $this->_query($sql);
        // var_dump($query);

        return print('Created');
    }

    public function update($table, $id, $data){
        if( $id != null ){
            // print_r($data);
            
            $dataset = [];
            foreach ($data as $key => $value) {
                array_push($dataset, "${key} = '".$value."'");
            }
            $dataString = implode(', ', $dataset);

            $sql = "UPDATE ${table} SET ${dataString} WHERE id=$id";
            //  die($sql);
   
            $this->_query($sql);
            // var_dump($query);
    
            return print('Updated');
        }
        return print('id not found');
    
    }

    public function delete($table, $id){
        if( $id != null ){
            $sql = "DELETE FROM ${table} WHERE ${table}.id = $id";
            // die($sql);
   
           $query = $this->_query($sql);
           // var_dump($query);
        
           return print("id ${id} in ${table} has been deleted");
        }
        return print('id not found');
    
    }

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }
}