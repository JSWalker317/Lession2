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
        $content = 'products.index';
        // $show = 'products.show';
        return $this->view('layouts.indexblade', [
            'product' => $products,
            'content' => $content,
            // 'show' => $show,
        ]);
    }

    public function show($id){
        // if(isset($_POST['checking_viewBtn'])){
        //      $pId = $_POST['product_id'];
            
        // }
    
        $products = $this->product->findById($id);
        $products_arr = [];
        foreach ($products as $key => $value)
        {
           
            array_push($products_arr, $value);
            header('Content-Type: application/json');
            echo json_encode($products_arr);
        }
      
    }

    
    public function store(){
        if(isset($_POST['save_product'])){
            $pName = $_POST['pName'];
            $pCategory = $_POST['pCategory'];
            $pImage = $_POST['pImage'];
        
            $data = [
                'product_name' => $pName,
                'category_id' =>  $pCategory,
                'product_image' =>  $pImage
            ];   
        }

        $this->product->store($data);
        header("Location: http://localhost/?controller=product&action=index");
        // return $this->view('products.store');
    }

    public function update(){
        if(isset($_POST['update_product'])){
            $pName = $_POST['pName'];
            $pCategory = $_POST['pCategory'];
            $pImage = $_POST['pImage'];
            $pId = $_POST['pId'];

            $data = [
                'product_name' => $pName,
                'category_id' =>  $pCategory,
                'product_image' =>  $pImage
            ];   
        }

        $this->product->updateById($pId, $data);
        header("Location: http://localhost/?controller=product&action=index");

        // return $this->view('products.update');
    }

    public function destroy(){
        if(isset($_POST['delete_product'])){
            $pId = $_POST['product_id'];
        }
        $this->product->deleteById($pId);
        header("Location: http://localhost/?controller=product&action=index");

        // return $this->view('products.destroy', [
        //     'id' => $id,
        // ]);
    }
}