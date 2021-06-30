<?
$headers = array(
    'Content-Type:multipart/form-data',
    'Authorization:D2SoFITQ30GNTzmRzacyd3uqkZocPFpMUBkvVAsbpfh'
);
$message = array(
    'message'=>'Hello,Shane'
);
$ch = curl_init();
curl_setopt($ch , CURLOPT_URL , "https://supervise-system.herokuapp.com/test.php");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
var_dump($ch);
exit();
$result = curl_exec($ch);
curl_close($ch);
?>
