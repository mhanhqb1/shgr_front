<?php
use Cake\Core\Configure;
use App\Lib\Api;

if ($slug == '') {
    $this->redirect($this->BASE_URL);
}

$param = $this->getParams(array(
    'cate_slug' => $slug,
    'limit' => 24,
    'page' => 1
));

$result = Api::call(Configure::read('API.url_products_all'), $param);
$data = !empty($result['data']) ? $result['data'] : array();
$total = !empty($result['total']) ? $result['total'] : 0;
$pageTitle = !empty($data) ? $data[0]['cate']['name'] : '';
$limit = $param['limit'];
$type = !empty($param['type']) ? $param['type'] : '';

$this->set(compact(
    'data',
    'total',
    'pageTitle',
    'limit',
    'type'
));
