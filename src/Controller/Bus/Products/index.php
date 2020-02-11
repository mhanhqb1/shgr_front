<?php
use Cake\Core\Configure;
use App\Lib\Api;

$param = $this->getParams(array(
    'limit' => 24,
    'page' => 1
));

$result = Api::call(Configure::read('API.url_products_all'), $param);
$data = !empty($result['data']) ? $result['data'] : array();
$total = !empty($result['total']) ? $result['total'] : 0;
$pageTitle = 'Danh sách sản phẩm';
$limit = $param['limit'];
$type = !empty($param['type']) ? $param['type'] : '';

$this->set(compact(
    'data',
    'total',
    'pageTitle',
    'limit',
    'type'
));
