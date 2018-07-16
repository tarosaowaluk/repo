<?php 

$sc_ip = 'radio10.plathong.net'; 
$sc_port = '7208'; 
$sc_sid = 1; 

$xml = @simplexml_load_file('http://' . $sc_ip . ':' . $sc_port . '/stats?sid=' . $sc_sid); 

if ($xml === FALSE) { 
    $count_current = 'ดีเจออฟไลน์'; 
    $status = '0'; 
    $current_title = 'no title available'; 
    echo 'ขณะนี้' . $count_current; 

} else { 
    $count_current = $xml->CURRENTLISTENERS; # counting current listeners 
    $status = $xml->STREAMSTATUS; # stream status 
    $current_title = $xml->SONGTITLE; # current stream-title 
    echo 'ขณะนี้มีคนฟังจำนวน : ' . $count_current. ' คน'; 
} 

?>
