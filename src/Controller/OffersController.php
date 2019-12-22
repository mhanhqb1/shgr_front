<?php

/* 
 * Home page
 */

namespace App\Controller;

class OffersController extends AppController {
    /**
     * List cate
     */
    public function index() {
        include ('Bus/Offers/index.php');
    }
}