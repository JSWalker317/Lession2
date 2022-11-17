<?php


class ProductController extends BaseController
{
    private $product;
    public function __construct(){
        $this->loadModel('Product');
        $this->product = new Product();
    }
    public function index(){
        $products = $this->product->getAll(Product::TABLE);

        return $this->view('products.index', [
            'product' => $products,
            // 'productName' => $productName,
        ]);
    }

    public function show(){
        return $this->view('products.show');

    }

    public function create(){
        return $this->view('products.create');
    }
    
    public function store(){
        return $this->view('products.store');
    }

    public function edit(){
        return $this->view('products.edit');
    }

    public function update(){
        return $this->view('products.update');
    }

    public function destroy(){
        return $this->view('products.destroy');
    }
}