<?php

/* 
 * Home page
 */

namespace App\Controller;

class ProductsController extends AppController {
    /**
     * List cate
     */
    public function detail($name) {
        include ('Bus/Products/detail.php');
    }
    
    /**
     * List cate
     */
    public function index() {
        include ('Bus/Products/index.php');
    }
}