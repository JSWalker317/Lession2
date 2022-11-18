<?php

class CategoryController extends BaseController
{
    private $category;
    public function __construct(){
        $this->loadModel('Category');
        $this->category = new Category();
    }

    public function index(){
        $categories = $this->category->getAll(Category::TABLE);
        $content = 'categories.index';
        return $this->view('pages.categoryblade', [
            'category' => $categories,
            'content' => $content,
            // 'productName' => $productName,
        ]);
    }

    public function show($id){
        
        $categories = $this->category->findById(Category::TABLE, $id);

        return $this->view('categories.show', [
            'category' => $categories,
        ]);
      
    }
}