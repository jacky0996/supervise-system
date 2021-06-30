<?
$headers = array(
    'Method:POST',
    'Content-Type:multipart/form-data',
    'Authorization:Bearer FIUY2xo1Rgoa0Lwj4p6DPdLM8Ozm2aafMbn4vfJ90wX'
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
