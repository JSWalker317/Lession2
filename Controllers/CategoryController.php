<?php

class CategoryController extends BaseController
{
    public function index(){
        return $this->view('categories.index');
    }

    public function show(){
        echo __METHOD__;

    }
}