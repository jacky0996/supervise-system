<?

$headers = array(
    'Method:POST',
    'Content-Type:multipart/form-data',
    'Authorization:Bearer rpQtPThuTGkzSUUTgWKGW33G4ZRINzF6tWZC8yf5QOE'
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
