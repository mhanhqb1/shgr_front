<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = Api::call(Configure::read('API.url_home_getdata'), array());
$data['reviews'] = array(
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Tuyết Mai',
        'note' => 'Vợ Admin',
        'message' => 'Mình không biết nói gì hơn, các bạn nên dùng website này khi mua sắm online, rất hữu ích và tiết kiệm chi phí.'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Hoàng Quân',
        'note' => 'Con trai Admin',
        'message' => 'Từ ngày dùng website này, không cần phải canh sale nữa, chỉ ngồi chờ mail là đủ rồi.'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Hoàng Yến',
        'note' => 'Con gái Admin',
        'message' => 'Bây giờ mình không còn sợ bị mua hớ nữa, cảm ơn Đảng và Nhà nước, các ban ngành đã tạo điều kiện cho website hoạt động.'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Hoàng Anh',
        'note' => 'Admin',
        'message' => 'Không biết nói thêm gì nữa, vợ con tôi đã nói hết rồi.'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Người ấy',
        'note' => 'Trịnh Thăng Bình',
        'message' => 'Người ấy có tốt với em, yêu em như anh đã từng yêu?'
        . '<br/>Người ấy có biết tính em hay trách móc, thích nuông chiều?'
        . '<br/>Anh nhớ em nhiều... Anh nhớ em nhiều....'
        . '<br/><b>Ai đó đọc được tin nhắn này thì nhớ nhắc người yêu dùng ChoTreo.Com để tiết kiệm chi phí khi mua sắm online nhé.</b>'
    ),
    array(
        'image' => $this->BASE_URL.'/images/tthumb1.jpg',
        'name' => 'Người đi ngang đời tôi',
        'note' => 'Ưng Hoàng Phúc',
        'message' => 'Nếu có ai đã làm tôi yêu thêm một người.'
        . '<br/>Đó là em đã làm tôi chia đôi cuộc tình.'
        . '<br/><b>Từ ngày quen ChoTreo.Com, tôi đã chấm dứt cuộc tình với em Mua Giá Hớ.</b>'
    )
);
$this->set(compact(
    'data'
));
