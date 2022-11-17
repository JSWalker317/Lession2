<?php

class BaseController
{
    const VIEW_PATH ='Views';
    const MODEL_PATH ='Models';

    /**
     * Description: 
     * folder.fileName
     * Lay tu sau thu muc view
     */
    protected function view($viewPath, array $data = []) {
        // Bien key cua mang thanh bien de truyen ra view
        foreach ($data as $key => $value) {
            $$key = $value;
            // nghia $product = value
        }

        // echo '<pre>';
        // print_r($product);
        // die;


        $viewPath = self::VIEW_PATH
            . '/'
            . str_replace('.', '/', $viewPath)
            .'.php';
        return require ($viewPath);
    }

    protected function loadModel($modelPath){
        $modelPath = self::MODEL_PATH
        . '/'
        . $modelPath
        .'.php';
        return require ($modelPath);
    }
}