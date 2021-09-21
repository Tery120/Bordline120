 <?php
  

function send_LINE($msg){
 $access_token = '0cw2tfGa9zreengMvJMRNF72u/iTbrrwpGCwwlvD3uW46Pmof/thnYc1DFJ3s8zbVX5o8NzVK+cSwQXTwcTQB9WgU0Re7IXxeXU6qIWMAj5ElI1HApKUGXTvPMwuH62x0sJKlSvKkmSZh5y+OnEQBwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U5944e0697d5f136946c52c192c672b9a',
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
