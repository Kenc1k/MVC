<?php

namespace App\Controllers;

class CategoryController{
    public function index(){
        include realpath(__DIR__ . "/../Views/categories/index.php");
    }
    public function test(){
        include realpath(__DIR__ . "/../Views/categories/index.php");
    }
}
?>