<?
$headers = array(
    'Content-Type:multipart/form-data',
    'Authorization:S2qNfSIKVqDsoiI8IqChXdZw9OGnwDW6Hh97TwueCq0'
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
