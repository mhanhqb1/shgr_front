<?php
use Cake\Core\Configure;
use App\Lib\Api;

if ($slug == '') {
    $this->redirect($this->BASE_URL);
}

$param = array(
    'cate_slug' => $slug,
    'page' => 1,
    'limit' => 20
);

$result = Api::call(Configure::read('API.url_products_all'), $param);
$data = !empty($result['data']) ? $result['data'] : array();
$total = !empty($result['total']) ? $result['total'] : 0;
$pageTitle = !empty($data) ? $data[0]['cate']['name'] : '';

$this->set(compact(
    'data',
    'total',
    'pageTitle'
));
