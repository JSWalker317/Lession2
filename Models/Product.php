<?php

class Product extends BaseModel
{
    const TABLE = 'products';

    // public function getProductName($id){
    //     $productName = '';
    //     $data = [
    //         [
    //             '1' => 'Iphone'
    //         ],
    //         [
    //             '2' => 'Ipad'
    //         ]
    //     ];

    //     foreach ($data as $key => $value){
    //         if($key == $id) {
    //             $productName = $value;
    //         }
    //     }
    //     return $productName;
    // }

    public function getAll(){
    //    die($table);
        return $this->all(self::TABLE);
    }

    public function findById($id) {
        return $this->find(self::TABLE, $id);
    }

    public function store($data){
        $this->create(self::TABLE, $data);
    }

    public function updateById($id, $data){
        $this->update(self::TABLE, $id, $data);
    }

    public function deleteById($id) {
        return $this->delete(self::TABLE, $id);
    }


}
