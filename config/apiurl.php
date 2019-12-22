<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'chotreolethuy');

Configure::write('API.url_settings_all', 'settings/all');
Configure::write('API.url_home_getdata', 'home/getdata');
Configure::write('API.url_products_all', 'products/all');
Configure::write('API.url_offers_all', 'offers/all');