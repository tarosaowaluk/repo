<?php
    $accessToken = "1AgSid8z2yrlfMfNGUr56PQGcQGrM6vE0qk8KFGvbFM/uaSj6zj+ZtUk2B8pk3+COzsx6HRE74DiNr1Wj8lmLXcXvOj2Lb8zagcllZKv0lFAOuBUXwry/DFG5dvowekgDNjs7fGgNHovdIkpU3MX4wdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    date_default_timezone_set("Asia/Bangkok");
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    $data = file_get_contents('https://www.soicode.online/api/gettitle.php');
    $data2 = file_get_contents('https://www.soicode.online/api/listen.php');
    $data3 = "ขณะนี้เวลา " . date("h:i:sa");
    $data4 = file_get_contents('https://www.soicode.online/api/DJ.php');
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
        if($message == "ดีเจ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "$data4";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "!command"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีครับ, เพลงไร,  ดีเจ,  คนฟัง,  เวลา,  ไปละ,  สวัสดีค่ะ,  สวัสดีครับ,  ลูแปง,  ทาโร่,  อิท,  จิม,  มะปวย,  โอม,  ควยไรบอท,  เอิ่ม,  โค้ดเพลง , ครบไหม,  ใช่ไหมบอท,  พ่อมึงตาย,  เก๋าแท้,  บอท,  ยูสเซอร์,  อุ่ย,  ฟังเพลง,  เปย์,  เปย์มะปวย,  เปย์จิม,  เปย์อิท, เปย์ทาโร่,  เปย์ลูแปง,  55,  แอดมิน,  ขอมือโอมหน่อย,   ฝันดี,  หี,  หน้าหี,  วิลเลี่ยม,  วิลเลี่ยม2,  วิลเลี่ยมจูบ,  !logo,  ลาก่อน";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "คนฟัง"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "$data2";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "!help"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "มีปัญหาการใช้งานติดต่อ @ทาโร่";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "เวลา"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "$data3";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ไปละ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ลาก่อนพบกันเมื่อชาติต้องการ";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "สวัสดีค่ะ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้า ยินดีต้อนรับเข้าสู่ HotRadio";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ลูแปง"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ฝันร้ายของรูปก๊อปมาแล้วววววววว";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "โอม"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อย่าเรียกชื่อคนอัปมงคลแบบนั้นสิ้";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ควยไรบอท"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ควยไรโยม";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "เอิ่ม"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "เอิ่มพ่อมึงสิ๊โอม";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "โค้ดเพลง"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/code/deco/code/deco/";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ครบไหม"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ครบแล้วห้ามเลิกนะ";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ใช่ไหมบอท"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ใช่จ้าาาาาาาาาาาาาา เห็นด้วยยยยยยยยยยยยยยยย";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ทาโร่"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "คุณพี่หมื่นของฉัน ใครอย่าเรียก !!!!";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "มะปวย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "คนนั้นเขาน่ารักนะ";
        replyMsg($arrayHeader,$arrayPostData);
    }

        if($message == "พ่อมึงตาย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "พ่อกูยังไม่ตายแต่พ่อไอ้โอมกำลังจะตาย";
        replyMsg($arrayHeader,$arrayPostData);
    }
                if($message == "เก๋าแท้"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ผมไม่เก๋าหรอกครับ ผมกระพง";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "บอท"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "เรียกทำควยไร ?";
        replyMsg($arrayHeader,$arrayPostData);
    }
            if($message == "อิท"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "คนนั้นเขาควยใหญ่นะ";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "จิม"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "คนนั้นที่ม่อสาวเก่งๆป่ะ";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ยูสเซอร์"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "น่ารักที่สุดในโลกแล้วยูสเซอร์ Hot RadiO";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "อุ่ย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "พ่อมึงชื่ออุ่ยหรออุทานจังเลย !";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ฟังเพลง"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/radio/";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "เปย์"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/pay/";
        replyMsg($arrayHeader,$arrayPostData);
    }
	    if($message == "เปย์จิม"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/pay/jimmy/";
        replyMsg($arrayHeader,$arrayPostData);
    }
		if($message == "เปย์ลูแปง"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/pay/lupang/";
        replyMsg($arrayHeader,$arrayPostData);
    }
		if($message == "เปย์มะปวย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/pay/maprang/";
        replyMsg($arrayHeader,$arrayPostData);
    }
		if($message == "เปย์ทาโร่"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/pay/taro/";
        replyMsg($arrayHeader,$arrayPostData);
    }
			if($message == "เปย์อิท"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://www.soicode.online/pay/williams/";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "55"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ขำหาพร่องมึงหรอ";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "แอดมิน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "พ่อมึงตายแอดมินไอสัส";
        replyMsg($arrayHeader,$arrayPostData);
    }
        if($message == "ขอมือโอมหน่อย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ฮ๊องๆๆๆๆๆ เอ๋งงงงๆๆ มาแล้วครับ บ๊อกๆๆๆๆ";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Image"
    else if($message == "รูปน้องแมว"){
        $image_url = "https://i.pinimg.com/originals/cc/22/d1/cc22d10d9096e70fe3dbe3be2630182b.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
        else if($message == "หี"){
        $image_url = "https://www.picz.in.th/images/2018/07/12/NbcONn.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
        else if($message == "หน้าหี"){
        $image_url = "https://www.picz.in.th/images/2018/07/12/NbcONn.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
        else if($message == "วิลเลี่ยม"){
        $image_url = "https://www.picz.in.th/images/2018/07/15/NAWLRS.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
        else if($message == "วิลเลี่ยม2"){
        $image_url = "https://www.picz.in.th/images/2018/07/15/NAWeun.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
        else if($message == "วิลเลี่ยมจูบ"){
        $image_url = "https://www.picz.in.th/images/2018/07/15/NAWmMg.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
         else if($message == "!logo"){
        $image_url = "https://www.picz.in.th/images/2018/07/15/NAWML1.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }

    #ตัวอย่าง Message Type "Text + Sticker ใน 1 ครั้ง"
    else if($message == "ลาก่อน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อย่าทิ้งกันไป";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "1";
        $arrayPostData['messages'][1]['stickerId'] = "131";
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
