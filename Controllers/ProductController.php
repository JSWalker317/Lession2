<?php


class ProductController extends BaseController
{
    private $product;
    public function __construct(){
        $this->loadModel('Product');
        $this->product = new Product();
    }
    // getAll, findbyid, them, sua,xoa, phan trang, tim kiem theo ten san pham, phan muc
    public function index(){
        $products = $this->product->getAll();

        return $this->view('products.index', [
            'product' => $products,
            // 'productName' => $productName,
        ]);
    }

    public function show($id){
        
        $products = $this->product->findById($id);

        return $this->view('products.show', [
            'product' => $products,
        ]);
      
    }

    
    public function store(){
        $data = [
            'product_name' => 'iPhone 13',
            'category_id' => '1',
            'product_image' => 'image13'
        ];

        $this->product->store($data);
        // return $this->view('products.store');
    }

    public function update($id){
        $data = [
            'product_name' => 'iPhone 14',
            'category_id' => '1',
            'product_image' => 'image14'
        ];

        $this->product->updateById($id, $data);
        // return $this->view('products.update');
    }

    public function destroy($id){
         
        $this->product->deleteById($id);

        // return $this->view('products.destroy', [
        //     'id' => $id,
        // ]);
    }
}