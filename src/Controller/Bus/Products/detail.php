<?php
use Cake\Core\Configure;
use App\Lib\Api;

$param = array();
$id = explode('-.i.', $name);
$param['id'] = $id[1];

$data = Api::call(Configure::read('API.url_products_detail'), $param);
//echo '<pre>';
//print_r($data);
//die();
$pageTitle = $data['name'];

$this->set(compact(
    'data',
    'pageTitle'
));
