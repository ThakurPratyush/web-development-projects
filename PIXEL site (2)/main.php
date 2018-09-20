<script>
	function ga(){
		document.getElementById('image');
		image.setAttribute('src', 'OPA-Animated-Answers-Sunglasses-en_IN.gif');
		document.getElementById('o1');
		o1.setAttribute('style', 'border-bottom: 2px solid #4285F4; padding-bottom:15px;');
		document.getElementById('o2');
		o2.setAttribute('style', '');
		document.getElementById('o3');
		o3.setAttribute('style', '');
		document.getElementById('o4');
		o4.setAttribute('style', '');
		document.getElementById('o5');
		o5.setAttribute('style', '');
	}
	function man(){
		document.getElementById('image');
		image.setAttribute('src', 'manage.gif');
		document.getElementById('o1');
		o1.setAttribute('style', '');
		document.getElementById('o2');
		o2.setAttribute('style', 'border-bottom: 2px solid #4285F4; padding-bottom:15px;');
		document.getElementById('o3');
		o3.setAttribute('style', '');
		document.getElementById('o4');
		o4.setAttribute('style', '');
		document.getElementById('o5');
		o5.setAttribute('style', '');
	}
	function pho(){
		document.getElementById('image');
		image.setAttribute('src', 'pics.gif');
		document.getElementById('o1');
		o1.setAttribute('style', '');
		document.getElementById('o2');
		o2.setAttribute('style', '');
		document.getElementById('o3');
		o3.setAttribute('style', 'border-bottom: 2px solid #4285F4; padding-bottom:15px;');
		document.getElementById('o4');
		o4.setAttribute('style', '');
		document.getElementById('o5');
		o5.setAttribute('style', '');
	}
	function trans(){
		document.getElementById('image');
		image.setAttribute('src', 'translate.gif');
		document.getElementById('o1');
		o1.setAttribute('style', '');
		document.getElementById('o2');
		o2.setAttribute('style', '');
		document.getElementById('o3');
		o3.setAttribute('style', '');
		document.getElementById('o4');
		o4.setAttribute('style', 'border-bottom: 2px solid #4285F4; padding-bottom:15px;');
		document.getElementById('o5');
		o5.setAttribute('style', '');
	}
	function tab(){
		document.getElementById('image');
		image.setAttribute('src', 'tabs.gif');
		document.getElementById('o1');
		o1.setAttribute('style', '');
		document.getElementById('o2');
		o2.setAttribute('style', '');
		document.getElementById('o3');
		o3.setAttribute('style', '');
		document.getElementById('o4');
		o4.setAttribute('style', '');
		document.getElementById('o5');
		o5.setAttribute('style', 'border-bottom: 2px solid #4285F4; padding-bottom:15px;');
	}
</script>
<!DOCTYPE html>
<html>
	<head>
		<title>Pixel, Phone by Google - Made by Google</title>
		<link rel="stylesheet" type="text/css" href="thisis.css"/>
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
						<li style="border-bottom:2px solid #4285F4; height: 26px;"><a href="main.php" style="color:#828585;">Overview</a></li>
						<li><a href="specs.php" style="color:#828585;">Top Specs</a></li>
						<li><a href="switch.php" style="color:#828585;">Switch</a></li>
						<li><a href="support.php" style="color:#828585;">Support</a></li>
						<li><a href="Sign_in.php" style="color:#828585;">Sign in</a></li>
					</ul>
				</nav>
			</div>
			<div id="main_body">
				<article>
					<div id="part1">
					<div id="par">
						<div id="left1">
							<p style="font-size:50px;">Meet Pixel,<br>Phone by Google.</p><br><br>
					    </div>
						<div id="no_name">
							<p>It has the highest rated smartphone camera. Ever. A battery that lasts all day. Unlimited storage for all your photos and videos. And it’s the first phone with the Google Assistant built in.</p>
						</div>
						<div style="padding-top:70px;">
							<iframe width="300" height="150" src="https://www.youtube.com/embed/K60iy0npb-o" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>	
						<div id="right1">
							<img src="pix1.jpg" style="height: 600px;"/>
						</div>
                                        </div>
				</article>
			</div>
			
			<div id="part2">
				<div id="left2">
					<img src="a.png" height="633" width="393" style="z-index:-1;"/>
					<img id="image" src="OPA-Animated-Answers-Sunglasses-en_IN.gif" height="483" width="270" style="z-index:2; margin-left: -335px; padding-bottom: 87px;"/>
				</div>
				<div id="right2">
					<p style="font-size:50px;">The first phone with the<br>Google Assistant built in.</p>
					<ul style="color:#4285F4;">
						<li id="o1" onclick="ga();" style="border-bottom: 2px solid #4285F4; padding-bottom:15px;"><img src="search.svg" height="35" width="35" style="padding:20px;"/><br>Get answers</li>
						<li id="o2" onclick="man();"><img src="tasks.svg" height="35" width="35" style="padding:20px;"/><br>Manage tasks </li>
						<li id="o3" onclick="pho();"><img src="camera.svg" height="35" width="35" style="padding:20px;"/><br>Find faster </li>
						<li id="o4" onclick="trans();"><img src="translate.svg" height="35" width="35" style="padding:20px;"/><br>Translate OTG</li>
						<li id="o5" onclick="tab();"><img src="air.svg" height="35" width="35" style="padding:20px;"/><br>Tabs on Travels</li>
					</ul>
					<p style="padding-top:50px;">Find out when local places close, if it's still going to rain on<br>Saturday and if your favourite team won last night.</p>
					<div style="color:#4285F4;"><a  href="https://youtu.be/sDx-Ncucheo" style="color:#4285F4;"><img src="youtube-cta.svg" style="padding-top:100px; padding-right:10px;"/>WATCH VIDEO</a></div>
				</div>
			</div>
			
			<div id="part3">
				<div id="top">
					<p style="font-size:50px;">The highest rated<br>smartphone camera. Ever.</p>
					<p style="padding:30px 0px;">With a best-ever 89 DxOMark Mobile score, Pixel's camera lets you take<br>brilliant photos in low light, bright light or any light. *</p>
					<div style="color:#4285F4;"><a  href="https://youtu.be/dVrhxDB6oqc" style="color:#4285F4;"><img src="youtube-cta.svg" style="padding-top:50px; padding-right:10px;"/>WATCH VIDEO</a></div>
					<div style="padding-top: 100px">
					<img src="img.jpg" height="380"  width="1349" style="z-index:-1;"/>
					<img src="piximg.png" height="510" style="margin-top: -428px;">
					</div>
				</div>
				<div id="bottom">
					<ul>
						<li><h3>12.3 MP</h3><br>For sharp, crisp images.</li>
						<li><h3>Large 1.55μm pixels</h3><br>For great shots in any light.</li>
						<li><h3>f/2.0 aperture</h3><br>For bright, even photos.</li>
					</ul>
				</div>
			</div>
			
			<div id="part4">
				<p style="font-size:50px; padding-top:100px;">Unlimited storage for all<br>your photos and videos.</p>
				<p style="padding:30px 0px;">Say goodbye to those “storage is full” notifications. **</p><br><br><br><br><br>
				<img src="collage.jpg" height="380"  width="1349" style="z-index:-1;"/>
				<img src="blackpix.png" height="525" style="margin-top: -433px;"/>
			</div>
			
			<div id="part5">
				<div id="left5">
					<img src="Duo.gif" height="460" style="z-index:-1; margin-left: -335px; padding-bottom: 211px;"/>
					<img src="vidpix.png" height="633" style="z-index:2; padding:100px; margin-left: -685px;"/>
				</div>
				<div id="right5">
					<p style="font-size:40px;">Your closest friends,<br>closer.</p><br><br>
					<p>With Google Duo you can video call with friends and<br>family on Android & iOS®. ***</p>
					<div style="color:#4285F4;"><a  href="https://youtu.be/TDWxGma0Lx8" style="color:#4285F4;"><img src="youtube-cta.svg" style="padding-top:100px; padding-right:10px;"/>WATCH VIDEO</a></div>
				</div>
			</div>
			
			<div id="part6">
				<p style="font-size:50px;">An experience made by Google.</p><br>
				<p>The Pixel combines hardware and software made by Google, including all your favorite<br>Google apps, to bring you a fast, seamless, and easy-to-use experience.</p>
				<ul>
					<li><p style="font-size:20px;">A seamless glass-aluminium body.</p><br><br>With smooth surfaces and easy-to-grip<br>curved edges.</li>
					<li><p style="font-size:20px;">A seamless glass-aluminium body.</p><br><br>Unlock your phone quickly, and swipe down<br>on the fingerprint sensor for quick access to all your notifications.</li>
				</ul>
				<img src="tilt.jpg" height="400" style="padding:20px 0px; margin-left: 130px;"/>
				<ul>
					<li><p style="font-size:20px;">A vivid, cinematic display.</p><br>A brilliant AMOLED screen, with true blacks <br>and 16.77 million colours.</li>
					<li><p style="font-size:20px;">A battery that lasts all day, and charges fast.</p><br>Get up to 7 hours of battery life in just 15 <br>minutes. †</li>
				</ul>
			</div>
			
			<div id="part7">
				<p style="text-align:center; font-size:40px;">Switch in 3 simple steps.</p>
				<div id="inner7">
				<div id="left7">
					<img src="transfer.jpg" height="900" style="z-index:-1; margin-left: -561px;">
					<img src="transfer.gif" height="407"  width="228" style="z-index:2; padding:100px; margin-left: -365px; margin-bottom: 230px;">
				</div>
				<div id="right7">
				<div id="one">
					<img src="connect.svg" height="30" width="30" style="margin-right: 145px;">
					<p style="font-size:20px; margin-top: -30px;">Connect</p>
					<p style="margin-left: 131px;"><br>Connect your old iPhone® or <br> Android device to your new Pixel <br> with the Quick Switch Adapter. ‡</p>
				</div>
				<div id="two">
					<img src="signin.svg" height="30" width="30" style="margin-right: 145px;">
					<p style="font-size:20px; margin-top: -30px;">Sign in</p>
					<p style="margin-left: 131px;"><br>Sign into your Google account on<br>your Pixel or create a new one.</p>
				</div>
				<div id="three">
					<img src="transfer.svg" height="30" width="30" style="margin-right: 145px;">
					<p style="font-size:20px; margin-top: -30px;">Transfer</p>
					<p style="margin-left: 131px;"><br>Choose what you want to move, like<br>contacts, calendar events, photos,<br>videos, music, SMS messages,<br> iMessages® and more. Then sit back<br>and let Pixel do the work.</p>
				</div>
				<div id="lnk">
					<p style="margin-bottom: -17px; color:#4285F4">LEARN MORE</p>
					<img src="arrow.svg" style="margin-left: 120px;">
				</div>
				</div>
				</div>
			</div>
			
			<div id="part8">
				<p style="font-size:50px;">Two sizes. Two colours.</p>
				<p style="padding:30px;">5” or 5.5”. Quite Black or Very Silver.</p>
				<div style="color:white; background-color:#4285F4; width:140px; height:60px;">
					<a href="buy.php" style="color:white;"><p style="padding-top:20px;">BUY NOW</p></a>
				</div>
				<img src="topix.png" height="700"/>
			</div>
			<div style="background-color:#f6f6f6; height:250px;"></div>

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
					<div id="symbols">
						<ul>
							<li>* Based on a 9/2016 test from DxOMark Mobile. DxOMark Mobile is a registered trademark of DxO Labs.</li>							<li>** Unlimited backups for photos and videos taken with your Pixel. Requires Google account. Data rates may apply.</li>
							<li>*** Compatible with Android 4.1 and up and iOS 9 and up. Internet connection required. Both caller and recipient require Duo app.</li>
							<li>† Battery use statistics are approximate and represent a mixed use of talk, standby, web browsing, and other features, according to an average user profile as defined by Google. Uses that involve an active display or data usage will use battery more quickly, actual results may vary. Charging rates are based on use of the included USB Type-C™ 18W charger.</li>
							<li>‡ Compatible with Android 5.0 and up and iOS 8 and up.</li>
							<li>§ Data connection required. The Google Assistant is currently available in English on Pixel, and will be coming soon to other languages, including French, over the course of the next year.</li>
						</ul>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>