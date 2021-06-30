<?
var_dump($_POST,$SESSION);
exit();
$headers = array(
    'Method:POST',
    'Content-Type:multipart/form-data',
    'Authorization:Bearer o32BbX7YBvbRYQecmQUr1G2R0b0326lRoI4j5L9yKSB'
);
$message = array(
    'message'=>'Hello,Shane'
);
$ch = curl_init();
curl_setopt($ch , CURLOPT_URL , "https://notify-api.line.me/api/notify");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
$result = curl_exec($ch);
curl_close($ch);
?>
