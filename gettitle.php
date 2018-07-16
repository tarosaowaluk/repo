<?php 

$sc_ip = 'radio10.plathong.net'; 
$sc_port = '7208'; 
$sc_sid = 1; 

$xml = @simplexml_load_file('http://' . $sc_ip . ':' . $sc_port . '/stats?sid=' . $sc_sid); 
$check = $status = $xml->STREAMSTATUS;
if ($check == 0) { 
    $current_title = 'ดีเจออฟไลน์'; 
    echo 'ขณะนี้' . $current_title; 

} else { 
    $current_title = $xml->SONGTITLE; # current stream-title 
    echo 'กำลังเล่นเพลง : ' . $current_title; 
} 

?>
