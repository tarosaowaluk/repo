<?php
date_default_timezone_set("Asia/Bangkok");
$t = date("H");
if ($t < "10") {
    echo "อรุณสวัสดิ์ครับโผมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมมม";
} 
elseif ($t < "14") {
    echo "เพิ่งจะตื่นหรือไงสายแล้วนะครับโผมมมมมม !!!";
} 
elseif ($t < "19") {
    echo "เย็นแล้วนี่นะเพิ่งตื่นหรือไงครับโผมมมมมม !!!!";
} 
else {
    echo "จะนอนแล้วมาตื่นอะไรตอนนี้ครับโผมมมมมม !!!";
}
?>
