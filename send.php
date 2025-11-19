<?php
$token = "8458097036:AAEs2MG6s5ZJM1SbZG9UE1qhFCd06y7RmmA";
$chat_id = "5335234629";

$name = $_POST['name'];
$phone = $_POST['phone'];
$msg  = $_POST['message'];

$text = "
📩 New Website Message

👤 Name: $name
📞 Phone: $phone
💬 Message: $msg
";

file_get_contents("https://api.telegram.org/bot8458097036:AAEs2MG6s5ZJM1SbZG9UE1qhFCd06y7RmmA/sendMessage?chat_id=5335234629&text=".urlencode($text));

header("Location: Thanks.html");
exit;
?>