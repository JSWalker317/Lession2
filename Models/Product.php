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

    public function getAll($table){
    //    die($table);
        return $this->all($table);
    }

//     public function findById($id) {

//     }
}
