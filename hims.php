<?php
date_default_timezone_set("Asia/Bangkok");
$t = date("H");
if ($t < "13") {
    echo "อรุณสวัสดิ์ครับโผมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมม";
} 
elseif ($t < "19") {
    echo "เย็นแล้วนี่นะเพิ่งตื่นหรือไง !!!!";
} 
elseif ($t < "18") {
    echo "เวลาค่ำแล้วนี่นะเพิ่งตื่นหรือไง !!!!";
} 
else {
    echo "จะนอนแล้วมาตื่นอะไรตอนนี้ !!!";
}
?>
