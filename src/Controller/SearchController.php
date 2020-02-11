<?php

/* 
 * Home page
 */

namespace App\Controller;

class SearchController extends AppController {
    /**
     * List cate
     */
    public function index() {
        include ('Bus/Search/index.php');
    }
}