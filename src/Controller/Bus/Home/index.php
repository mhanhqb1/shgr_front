<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();//Api::call(Configure::read('API.url_settings_gethomedata'), array());
$this->set(compact(
    'data'
));
