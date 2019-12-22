<?php
use Cake\Core\Configure;
use App\Lib\Api;

$param = $this->getParams(array(
    'limit' => 10,
    'page' => 1
));

$result = Api::call(Configure::read('API.url_offers_all'), $param);
$data = !empty($result['data']) ? $result['data'] : array();
$total = !empty($result['total']) ? $result['total'] : 0;
$pageTitle = 'Khuyến mãi';
$limit = $param['limit'];

$this->set(compact(
    'data',
    'total',
    'pageTitle',
    'limit'
));
