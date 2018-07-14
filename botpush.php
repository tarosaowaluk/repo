<?php
    $accessToken = "1AgSid8z2yrlfMfNGUr56PQGcQGrM6vE0qk8KFGvbFM/uaSj6zj+ZtUk2B8pk3+COzsx6HRE74DiNr1Wj8lmLXcXvOj2Lb8zagcllZKv0lFAOuBUXwry/DFG5dvowekgDNjs7fGgNHovdIkpU3MX4wdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    date_default_timezone_set("Asia/Bangkok");
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    $data = file_get_contents('https://taro2.herokuapp.com/gettitle.php');
    $data2 = file_get_contents('https://taro2.herokuapp.com/listen.php');
    $data3 = "ขณะนี้เวลา " . date("h:i:sa");
    $data4 = file_get_contents('https://taro2.herokuapp.com/DJ.php');
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดีครับ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้า ยินดีต้อนรับเข้าสู่ HotRadio";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "เพลงไร"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "กำลังเล่นเพลง : $data";
        replyMsg($arrayHeader,$arrayPostData);
    }

    
function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   exit;
?>
