<?php

class Category extends BaseModel
{
    const TABLE = 'categories';

    public function getAll($table){
    //    die($table);
        return $this->all($table);
    }

    public function findById($table, $id) {
        return $this->find($table, $id);
    }

    public function deleteById($table, $id) {
        return $this->delete($table, $id);
    }
}
