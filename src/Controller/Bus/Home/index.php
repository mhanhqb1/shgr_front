<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = Api::call(Configure::read('API.url_home_getdata'), array());
$this->set(compact(
    'data'
));
