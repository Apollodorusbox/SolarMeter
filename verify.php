<?php
$access_token = 'eqJUIhKe5fG2JGVL20rC6QoPZpTF7kWbasKxKBpFBAA+xI3qs6JxrLx574kSa/VTage4z0mmTu6qokOt/bDlzm6ihIr3gSltvoI12E3pZrWO6jCjNoMHktKMQCRA8xiRu7cSb09C0W5oCV8pfmgDEwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
