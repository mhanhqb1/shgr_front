<?php

/* 
 * Home page
 */

namespace App\Controller;

class CatesController extends AppController {
    /**
     * List cate
     */
    public function index($slug = '') {
        include ('Bus/Cates/index.php');
    }
}