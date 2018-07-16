<!DOCTYPE html>
<html>
    <head>
        <title id="songtitle3">ขณะนี้ดีเจออฟไลน์อยู่</title>
        <meta name=”description” content=”คลื่นวิทยุแห่งความสุขของคนในซอย” />
<meta http-equiv=”content-language” content=”th” />
<meta http-equiv=”content-type” content=”text/html; charset=UTF-8″ />
<meta name=”keywords” content=”Radio,Song thai,วิทยุออนไลน์, ซอยแชท” />
        <link href="https://fonts.googleapis.com/css?family=Lato|Maitree|Pridi|Roboto" rel="stylesheet">
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=sunburst"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="shortcut icon" href="https://www.soicode.online/favicon.ico" />
        <script src="https://www.soicode.online/testradio/jquery.shoutcast.min.js"></script>
                <script src="https://www.soicode.online/java/rradio.js?version=75"></script>
        		<link rel="stylesheet" type="text/css" href="https://www.soicode.online/css/index.css?version=14.55556">
        		<link rel="stylesheet" type="text/css" href="https://www.soicode.online/css/firefox.css?version=76">
        <script src="https://www.soicode.online/java/index.js?version=84"></script>

        		<link rel="stylesheet" type="text/css" href="https://www.soicode.online/radio/styles.css?version=98">
        		<script>
        		</script>
        <style>
        #onesignal-bell-launcher-button {
            z-index:11111;
        }
        #djprofile {
            display:inline;
        }
                #hotradioimg {
                width:0px;
                display:block;
                height:0px;
                }
                #target {
                    color:white;
                }
        </style>
    </head>
<body>
    <div id="allday" style="overflow-y: auto; high:auto;">
<div id="crop">
    <div id="crop2">
<div class="barradio">
<div style="position: absolute;width: 170px;height: 120px;left: -30px;top: -120px;/* background-color: black; */background: url(https://www.picz.in.th/images/2018/07/14/NoMmLy.png) center center no-repeat;background-size: auto;/* z-index:9; */pointer-events: none;transform: rotate(-18deg);"></div>       </div>
<div id="copyclick" style="text-align: center;">
    <center><img id="hotradioimg" src="https://www.picz.in.th/images/2018/07/14/NoMmLy.png" title="HotRadiO" alt="faceRadio" height="50" width="128"></center>
    <center><marquee id="servertitlescoll" direction="left" scrollamount="1" width="2%">~ ♩ ♪ ♬ ♫</marquee>&nbsp;&nbsp;&nbsp;<b><span id="servertitle">กำลังโหลด . . </span></b>&nbsp;&nbsp;&nbsp;<marquee id="servertitlescoll" direction="right" scrollamount="1" width="2%">♫ ♬ ♪ ♩ ~</marquee></center>
    <center><b><span id="songT">กำลังเล่นเพลง : </span><span id="songtitle">กำลังโหลด . . </span><br></b></center>
    <center><b><span id="songT1">คนฟังจำนวน : </span><span id="currentlisteners">กำลังโหลด . . </span><span id="songT1">&nbsp;คน</span><br></b></center>
    <center><b><span id="getlink1">สามารถรับฟังได้ที่ => <a href="https://www.soicode.online/radio/" target="_blank">https://www.soicode.online</a></span></b></center>
    </div>
        <center><b><span id="getlink1">ลิ้งค์เปย์ของขวัญดีเจ => <a href="https://www.soicode.online/pay/" target="_blank">https://www.soicode.online/pay/</a></span></b></center> <br>
    <center>
    <button id="testbutton" onclick="copy('copyclick')">COPY MUSIC</button><br>
    </center>
        <center><button id="buttoncopy">SHOW CODE</button></center>
<div id='contentcode' style="display:none;">
<pre id="codei" class="prettyprint"><center>&lt;center&gt;&lt;iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="415" src="https://www.soicode.online/radio/index5.php" width="560"&gt;&lt;/iframe&gt;&lt;/center&gt;</center></pre>
             <center><button id="code" onclick="copy('codei')">COPY & CLOSE</button></center>
      </div>
    		<div class="audio-player-cont">
			<div class="logo">
				<img src="https://www.soicode.online/images/audio-player.png" />
			</div>
			<div class="player">
				<div id="songTitle" class="song-title"></div>
        <audio id="audio" autoplay="autoplay" controls=""><source src="https://radio10.plathong.net/7208/;stream.mp3" type="audio/mp3">Your browser does not support the audio element.</audio>
				<div>
				</div>
				<div class="controllers">
					<img src="https://www.soicode.online/images/volume-down.png" width="25px" onclick="setHalfVolume()" />
<input id="vol-control" type="range" min="0" value="70" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)">
					<img src="https://www.soicode.online/images/volume-up.png" width="25px" style="margin-left:2px;" onclick="setFullVolume()"/>
					
				</div>
			</div>
		</div>
<div id="listmusic10"><h1 id="list">- เพลงที่เล่นล่าสุด -</h1><ul></ul></div>		</div>
<div id="djtitle1">
<center><b><marquee behavior="SCROLL"><span id="servertitle2">กำลังโหลด . . </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="songT123">กำลังเล่นเพลง : </span><span id="songtitle2">กำลังโหลด . . </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="songT123">ขณะนี้กำลังมีคนฟัง : </span><span id="currentlisteners2">กำลังโหลด . . </span><span id="songT123">&nbsp;คน</span></marquee></b></center>
</div>		</div></div>
<div id="djcontent">
<div id="djprofile">
<img class="profile" src="https://www.soicode.online/images/DJWILLIAMS.png" alt="" title="DJ WILLIAMS" height="78" width="78">
<p>DJ WILLIAMS</p>
    </div>
<div id="djprofile">
<img class="profile" src="https://www.soicode.online/images/DJTARO.jpg" alt="" title="DJ TARO" height="78" width="78">
<p>DJ TARO</p>
    </div>
    <div id="djprofile">
<img class="profile" src="https://www.soicode.online/images/DJMAPRANG.jpg" alt="" title="DJ MAPRANG" height="78" width="78">
<p>DJ MAPRANG</p>
    </div>
<div id="djprofile">
<img class="profile" src="https://www.soicode.online/images/DJJIMMY.jpg" alt="" title="DJ JIMMY" height="78" width="78">
<p>DJ JIMMY</p>
    </div>
    <div id="djprofile">
<img class="profile" src="https://www.soicode.online/images/DJLUPANG.jpg" alt="" title="DJ LUPANG" height="78" width="78">
<p>DJ LUPANG&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </div>
<div id="djprofile">
<img class="profile" src="https://www.soicode.online/images/DJTAKKY.jpg" alt="" title="DJ KELVIN" height="78" width="78">
<p>DJ TAKKY</p>
    </div>
<center><div id="QR">
<img class="QRcode" src="https://www.soicode.online/images/QRcode.jpg" alt="" title="QRCODE" height="180" width="180">
    </div>
    <a id="target" target="_blank" rel="noopener noreferrer" href="https://line.me/R/ti/g/zH3T08VoC_">https://line.me/R/ti/g/zH3T08VoC_</a>
    </center>
    </div>
    </div>
    <ul></ul>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "4b41f5c8-8143-45a3-8bfd-dd9ebede6d55",
    });
  });
</script>
</body>
</html>
