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

    public function find($id){

    }
    public function store(){

    }

    public function update(){

    }

    public function delete(){

    }

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }
}