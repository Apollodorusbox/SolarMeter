 <?php
  

function send_LINE($msg){
 $access_token = 'eqJUIhKe5fG2JGVL20rC6QoPZpTF7kWbasKxKBpFBAA+xI3qs6JxrLx574kSa/VTage4z0mmTu6qokOt/bDlzm6ihIr3gSltvoI12E3pZrWO6jCjNoMHktKMQCRA8xiRu7cSb09C0W5oCV8pfmgDEwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U73de4991a95b9792e9785193741ace0c',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
