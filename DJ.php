<?php 

$sc_ip = 'radio10.plathong.net'; 
$sc_port = '7208'; 
$sc_sid = 1; 

$xml = @simplexml_load_file('http://' . $sc_ip . ':' . $sc_port . '/stats?sid=' . $sc_sid); 
$check = $current_title = $xml->STREAMSTATUS;
if ($check == 0) { 
    $count_current = 'ดีเจออฟไลน์'; 
    $status = '0'; 
    $current_title = 'no title available'; 
        echo 'ขณะนี้' . $count_current;

} else { 
    $count_current = $xml->SERVERTITLE; # counting current listeners 
    echo $count_current. ' กำลังออนไลน์';
} 
?>
