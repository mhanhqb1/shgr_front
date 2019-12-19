<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = Api::call(Configure::read('API.url_home_getdata'), array());
$data['reviews'] = array(
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Tuyết Mai',
        'note' => 'Vợ của Admin',
        'message' => 'Mình không biết nói gì hơn, các bạn nên dùng website này khi mua sắm online, rất hữu ích và tiết kiệm chi phí.'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Hoàng Quân',
        'note' => 'Con trai của Admin',
        'message' => 'Từ ngày dùng website này, không cần phải canh sale nữa, chỉ ngồi chờ mail là đủ rồi.'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Hoàng Yến',
        'note' => 'Con gái của Admin',
        'message' => 'Bây giờ mình không còn sợ bị mua hớ nữa, cảm ơn Đảng và Nhà nước, các ban ngành đã tạo điều kiện cho website hoạt động.'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Hoàng Anh',
        'note' => 'Admin',
        'message' => 'Không biết nói thêm gì nữa, vợ con tôi đã nói hết rồi.'
    )
);
$this->set(compact(
    'data'
));
