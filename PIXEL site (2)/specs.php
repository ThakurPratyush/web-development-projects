<script>
	function hover(){
		document.getElementById('disp').style.display = "block";
		
	}
	function unhover(){
		document.getElementById('disp').style.display = "none";
	}
	
	function hover2(){
		document.getElementById('disp2').style.display = "block";
		
	}
	function unhover2(){
		document.getElementById('disp2').style.display = "none";
	}
	
	function hover3(){
		document.getElementById('disp3').style.display = "block";
		
	}
	function unhover3(){
		document.getElementById('disp3').style.display = "none";
	}
	
	function hover4(){
		document.getElementById('disp4').style.display = "block";
		
	}
	function unhover4(){
		document.getElementById('disp4').style.display = "none";
	}
	
	function hover5(){
		document.getElementById('disp5').style.display = "block";
		
	}
	function unhover5(){
		document.getElementById('disp5').style.display = "none";
	}
	
	function hover6(){
		document.getElementById('disp6').style.display = "block";
		
	}
	function unhover6(){
		document.getElementById('disp6').style.display = "none";
	}
	
	function sb(){
		document.getElementById('sailfish');
		sailfish.setAttribute('src','sailfishblack.png');
	}
	
	function ss(){
		document.getElementById('sailfish');
		sailfish.setAttribute('src','sailfishsilver.png');
	}
	
	function mb(){
		document.getElementById('marlin');
		marlin.setAttribute('src','marlinblack.png');
	}
	
	function ms(){
		document.getElementById('marlin');
		marlin.setAttribute('src','marlinsilver.png');
	}
</script>

<!DOCTYPE html>
<html>
	<head>
		<title>Pixel, Phone by Google - Made by Google</title>
		<link rel="stylesheet" type="text/css" href="specs.css"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	</head>
	<body>
		<div id="container">
			<div id="header_head">
				<header>
					<div id="top_bar">
						<div id="left_side">
							<img src="logo.svg" style="height:23px; top: 50%; left: 50%;"/>
						</div>
						<div id="right_side">
							<a href="buy.php" style="color:white;">BUY NOW</a>
						</div>	
					</div>
				</header>
				<nav style="height:22px">
					<ul>
						<li style="color:black;"><a href="main.php" style="color:black;">Pixel</a></li>
						<li><a href="main.php" style="color:#828585;">Overview</a></li>
						<li style="border-bottom:2px solid #4285F4; height: 26px;"><a href="specs.php" style="color:#828585;">Top Specs</a></li>
						<li><a href="switch.php" style="color:#828585;">Switch</a></li>
						<li><a href="support.php" style="color:#828585;">Support</a></li>
						<li><a href="Sign_in.php" style="color:#828585;">Sign in</a></li>
					</ul>
				</nav>
			</div>
			<div id="part1">
				<p style="font-size:50px; padding-top:200px;">Top specs</p>
				<div id="phn">
					<img src="specs.png" height="320px" width="700px" style="z-index:-1; position: static;"/>
					<div id="circle1">
						<img src="circle.png" height="32px" style="z-index:2; margin-left: -275px; margin-top: -330px; position: absolute;" onmouseover="hover();" onmouseout="unhover();"/>
						<div id="disp">
						<script>
						document.getElementById('disp').style.display = "none";
						</script>
							<p style="font-size:15px;"><b>Display</b></p>
							<p style="font-size:15px;">5.5" QHD or 5.0" FHD<br>AMOLED<br>2.5D Corning®<br>Gorilla® Glass 4</p>
							<div id="sline"></div>
						</div>
					</div>
					<div id="circle2">
						<img src="circle.png" height="32px" style="z-index:2; margin-left: -260px; margin-top: -120px; position: absolute;" onmouseover="hover2();" onmouseout="unhover2();"/>
						<div id="disp2">
						<script>
						document.getElementById('disp2').style.display = "none";
						</script>
							<p style="font-size:15px;"><b>Design</b></p>
							<p style="font-size:15px;">Aerospace-grade<br>alumenium unibody<br>with polished glass  <hr width="100px" height="2px" color="#4285F4" style= "margin-left: 140px; margin-top: -10px;"/></p>
						</div>
						
					</div>
					<div id="circle3">
						<img src="circle.png" height="32px" style="z-index:2; margin-left: 165px; margin-top: -65px; position:absolute;" onmouseover="hover3();" onmouseout="unhover3();"/>
						<div id="disp3">
						<script>
						document.getElementById('disp3').style.display ="none";
						</script>
							<p style="font-size:15px;"><b>Pixel Imprint</b></p>
							<p style="font-size:15px;">Back-mounted fingerprint sensor for fast unlocking  <hr width="65px" height="2px" color="#4285F4" style= "margin-left: 420px; margin-top: -23px;"/></p>
						</div>
					</div>
					<div id="circle4">
						<img src="circle.png" height="32px" style="z-index:2; margin-left: 70px; margin-top: -210px; position:absolute;" onmouseover="hover4();" onmouseout="unhover4();"/>
						<div id="disp4">
						<script>
						document.getElementById('disp4').style.display ="none";
						</script>
							<p style="font-size:15px;"><b>Battery</b></p>
							<p style="font-size:15px;">Pixel<br>2700mAh<br>Pixel XL<br>3450mAh<br>Upto 7 hours of battery life<br>in just 15 minutes of<br>charging*<hr width="200px" height="2px" color="#4285F4" style= "margin-left: -150px; margin-top: -12px;"/></p>
						</div>
					</div>
					<div id="circle5">
						<img src="circle.png" height="32px" style="z-index:2; margin-left: 232px; margin-top: -160px; position: absolute;" onmouseover="hover5();" onmouseout="unhover5();"/>
						<div id="disp5">
						<script>
						document.getElementById('disp5').style.display = "none";
						</script>
							<p style="font-size:15px;"><b>Processor</b></p>
							<p style="font-size:15px;">Qualcomm® Snapdragon™ 821<br>2.15Ghz + 1.6Ghz, 64Bit Quad-Core</p>
							<div id="sline2"></div>
						</div>
					</div>
					<div id="circle6">
						<img src="circle.png" height="32px" style="z-index:2; margin-left: 288px; margin-top: -105px; position: absolute;" onmouseover="hover6();" onmouseout="unhover6();"/>
						<div id="disp6">
						<script>
						document.getElementById('disp6').style.display = "none";
						</script>
							<p style="font-size:15px;"><b>Camera</b></p>
							<p style="font-size:15px;">12.3 MP<br>Large 1.55μm pixels<br>Phase detection autofocus<br>Lazer detection autofocus<br>f/2.0 aperture</p>
							<div id="sline3"></div>
						</div>
					</div>
					<p style="color:#4285F4">Hover for more info</p>
				</div>
			</div>
			<div id="part2">
				<div id="phones">
					<img id="sailfish" src="sailfishblack.png" height="390" style="margin-left:230px;"/>
					<img id="marlin" src="marlinblack.png" height="450" style="margin-left:120px;"/>
				</div>
				<div id="colors">
					<div id="black1"><img height="30px" width="30px" src="black.png" onclick="sb();"/></div>
					<div id="silver1"><img height="30px" width="30px" src="silver.jpg" onclick="ss();"/></div>
					
					<div id="black2"><img height="30px" width="30px" src="black.png" onclick="mb();"/></div>
					<div id="silver2"><img height="30px" width="30px" src="silver.jpg" onclick="ms();"/></div>
				</div>
			</div>
			<div id="part3">
				<div id="one">
					<p style="font-size:40px; margin-left: 260px;">Pixel</p>
					<p style="font-size:40px; margin-left:-550px;">Pixel XL</p>
				</div>
				<div>
					<hr width="1000px" height="1px" color="#E2E2E2"/>
				</div>
				<div class="two">
					<p style="margin-left:100px;">Display</p>
					<div style="margin-left:-1067px"><p>5.0 inches<br>FHD AMOLED at 441 ppi<br>2.5D Corning® Gorilla® Glass 4</p></div>
					<div style="margin-left:-1838px"><p>5.5 inches<br>QHD AMOLED at 534ppi<br>2.5D Corning® Gorilla® Glass 4</p></div>
				</div>
				<div class="two">
					<p style="margin-left:100px;">Size</p>
					<div style="margin-left:-1067px"><p>5.6 x 2.7 x 0.2 ~ 0.3 inches<br>143.8 x 69.5 x 7.3 ~ 8.5 mm</p></div>
					<div style="margin-left:-1838px"><p>6.0 x 2.9 x 0.2 ~ 0.3 inches<br>154.7 x 75.7 x 7.3 ~ 8.5 mm</p></div>
				</div>
				<div class="two">
					<p style="margin-left:100px;">Battery*</p>
					<div style="margin-left:-1067px"><p>2,770 mAh battery<br>Standby time (LTE): up to 19 days<br>Talk time (3g/WCDMA): Up to 26 hours<br>Internet use time (Wi-Fi): Up to 13 hours<br>Internet use time (LTE): Up to 13 hours<br>Video playback: Up to 13 hours<br>Audio playback (via headset): Up to 110 hours<br>Fast charging: Up to 7 hours of use from only 15 minutes of charging</p></div>
					<div style="margin-left:-1838px"><p>3,450 mAh battery<br>Standby time (LTE): up to 23 days<br>Talk time (3g/WCDMA): Up to 32 hours<br>Internet use time (Wi-Fi): Up to 14 hours<br>Internet use time (LTE): Up to 14 hours<br>Video playback: Up to 14 hours<br>Audio playback (via headset): Up to 130 hours<br>Fast charging: Up to 7 hours of use from only 15 minutes of charging</p></div>
				</div>
				<div style="text-align:center;"><p style="font-size:10px;">* Battery use statistics are approximate and represent a mixed use of talk, standby, web browsing, and other features, according to an average user profile as defined by Google. Uses that involve an active display or data<br>usage will use battery more quickly, actual results may vary. Charging rates are based on use of the included USB Type-C™ 18W charger.</p></div>
			</div>
			<div id="part4">
				<div id="on">
					<p style="font-size:40px; margin-left: 200px;">Both Devices</p>
				<div>
					<hr width="1000px" height="1px" color="#E2E2E2"/>
				</div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Design</p>
					<div style="margin-left:-1030px"><p>Aerospace-grade aluminum unibody<br>Glass shade with 2.5D Corning Gorilla Glass 4</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Memory</p>
					<div style="margin-left:-1030px"><p>4 GB LPDDR4 RAM</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Display<br>Characteristics</p>
					<div style="margin-left:-1030px"><p>100% NTSC<br>100000:1, super contrast ratio<br>True black level<br>Full 24-bit depth or 16.77 million colours<br>Less than 40% brightness decrease at 30-degree viewing angle</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Storage</p>
					<div style="margin-left:-1030px"><p>32 or 128GB</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Processor</p>
					<div style="margin-left:-1030px"><p>Qualcomm® Snapdragon™ 821<br>2.15Ghz + 1.6Ghz, 64Bit Quad-Core</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Main camera</p>
					<div style="margin-left:-1030px"><p>12.3 MP<br>Large 1.55μm pixels<br>Phase detection autofocus + laser detection autofocus<br>f/2.0 aperture</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Front camera</p>
					<div style="margin-left:-1030px"><p>8MP<br>1.4µm pixels<br>f/2.4 aperture<br>Fixed focus</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">In-stream<br>video</p>
					<div style="margin-left:-1030px"><p>1080p @ 30fps, 60fps, 120fps<br>720p @ 30fps, 60fps, 240fps<br>4K @ 30fps</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Sensors</p>
					<div style="margin-left:-1030px"><p>Proximity / ALS<br>Accelerometer/Gyrometer<br>Magnetometer<br>Pixel Imprint – Back-mounted fingerprint sensor for fast unlocking<br>Barometer<br>Hall effect sensor<br>Android Sensor Hub<br>Advanced x-axis haptics for sharper/defined response</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Charging</p>
					<div style="margin-left:-1030px"><p>USB Type-C™ 18W adaptor with USB-PD<br>15W - 18W charging</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Ports and<br>slots</p>
					<div style="margin-left:-1030px"><p>USB Type-C™<br>USB 3.0<br>3.5 mm headset jack<br>Single Nano SIM</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Media</p>
					<div style="margin-left:-1030px"><p>Single bottom-firing speaker<br>3 Mics<br>Noise suppression</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Connectivity</p>
					<div style="margin-left:-1030px"><p>Supports up to CAT 12 (600Mbps DL / 75Mbps UL) depending on carrier support<br>GPS<br>Wi-Fi 802.11 a/b/g/n/ac 2x2 MIMO<br>Bluetooth 4.2<br>NFC</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Device<br>Variants<br>(SKUs)</p>
					<div style="margin-left:-1030px"><p>Quite Black, Very Silver</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Telephony</p>
					<div style="margin-left:-1030px">
					<p>North America:<ul>
					<li>GSM: Quad-band GSM</li>
					<li>UMTS/WCDMA: B 1/2/4/5/8</li>
					<li>CDMA: BC0/BC1/BC10</li>
					<li>TD-SCDMA: N/A</li>
					<li>FDD LTE: B 1/2/3/4/5/7/8/12/13/17/20/25/26/28/29/30</li>
					<li>TDD LTE: B 41</li>
					</ul></p><p><br>LTE 2xCA: B2+B2, B2+B4, B2+B5, B2+B12, B2+B13, B2+B17, B2+B29, B2+B30,<br>B4+B4, B4+B5, B4+B7, B4+B12, B4+B13, B4+B17, B4+B29, B4+B30, B5+B30,<br>B7+B7, B12+B30, B25+B25, B29+B30, B41+B41<br><br>
					LTE 3xCA: B2+B2+B12, B2+B2+B13, B2+B4+B4, B2+B4+B5, B2+B4+B12,<br>B2+B4+B13, B2+B4+B29, B2+B5+B30, B2+B12+B30, B2+B29+B30, B4+B4+B12,<br>B4+B4+B13, B4+B5+B30, B4+ B7+ B12, B4+B12+B30, B4+B29+B30, B41+B41+B41</p>
					<p><br>Rest of World:<ul>
					<li>GSM: Quad-band GSM</li>
					<li>UMTS/WCDMA: B 1/2/4/5/6/8/9/19</li>
					<li>CDMA: BC0</li>
					<li>TD-SCDMA: B 34/39</li>
					<li>FDD LTE: B1/2/3/4/5/7/8/12/13/17/18/19/20/21/26/28/32/</li>
					<li>TDD LTE: B 38/39/40/41</li>
					</ul></p><p><br>LTE 2xCA: B1+B3, B1+B5, B1+B7, B1+B8, B1+B18, B1+B19, B1+B20, B1+B21, B1+B26,<br>B1+B41, B3+B3, B3+B5, B3+B7, B3+B8, B3+B19, B3+B20, B3+B28, B5+B7, B7+B7,<br>B7+B8, B7+B20, B7+B28, B19+B21, B20+B32, B38+B38, B39+B39, B39+B41,<br>B40+B40, B41+B41
					<br><br>LTE 3xCA: B1+B3+B3, B1+B3+B5, B1+B3+B8, B1+B3+B20, B1+B5+B7, B1+B19+B21,<br>B1+B41+B41, B3+B3+B5, B3+B3+B7, B3+B3+B8, B3+B7+B7, B3+B7+B8,<br>B3+B7+B20, B3+B7+B28, B7+B7+B28</p>
					</div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">Inbox</p>
					<div style="margin-left:-1030px"><p>USB Type-C™ 18W adaptor with USB-PD<br>A-C cable (USB 3.0)<br>C-C cable (USB 2.0)<br>SIM tool<br>Quick Switch Adapter</p></div>
				</div>
				<div class="two">
					<p style="margin-left:150px;">OS</p>
					<div style="margin-left:-1030px"><p>Android 7.1 Nougat<br>Two years of OS upgrades from launch<br>Three years of security updates from launch</p></div>
				</div>
			</div>
			<div id="foot_div">
				<footer>
					<div id="fu">
						FOLLOW US
					<div id="icons">
					<a href="https://twitter.com/MadeByGoogle"><img src="twitter.svg" style="padding: 0px 20px; height:20px;"/></a>
					<a href="https://www.youtube.com/user/Google"><img src="youtube.svg" style="height:20px;"/></a>
					</div>
					</div>
					<div id="line"><hr width="85%" style="padding: 0px 0px;"/></div>
					<div id="below_text">
						<a href="https://www.google.co.in/?gfe_rd=cr&ei=5ShzWP_WKqLv8wevw5W4Ag"><img src="google.svg"/></a>
						<div style="margin-left:40px;"><a href="https://store.google.com/" style="color:#828585;">Google Store</a></div>
						<div style="margin-left:-950px;"><a href="https://www.google.com/policies/privacy/" style="color:#828585;">Privacy&Terms</a></div>
						<div style="margin-left: -1270px;">
							<a href="https://support.google.com/pixelphone/?visit_id=1-636195389215363726-2537863585&rd=2#topic=7078250" style="color:#828585;"><img src="help.png" style="height:15px;"/>
							Help Center</a>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>