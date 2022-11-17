<?php

class Product
{
    const TABLE = 'products';

    public function getProductName($id){
        $productName = '';
        $data = [
            [
                '1' => 'Iphone'
            ],
            [
                '2' => 'Ipad'
            ]
        ];

        foreach ($data as $key => $value){
            if($key == $id) {
                $productName = $value;
            }
        }
        return $productName;
    }

    public function findById($id) {

    }
}
