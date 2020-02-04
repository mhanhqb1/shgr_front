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
}