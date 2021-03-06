<?php
    include('Login_index.php');

    if(!isset($_SESSION['username']))
    {
        header("location: Login.php");
    }
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lens-Glasses</title>
	<link href="Images/logo 2 transper-01.png" rel="shortcut icon">
	<script src="jQuery.js"></script>
	<script src="javascript.js"></script>
	<link href="style.css" rel="stylesheet">
	<link href="trangcon.html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div id="pageBody">
	
		<!-- HEADER -->
			<div class="header clearfix">
				<div class="logo"><img src="Images/logo.png" alt="logo"/></div>
				<!-- Đặt đây hả -->
			</div>
		<!-- MENU -->
			<div class="menu">
				<ul class="clearfix">
					<li><a href="lens&glasses.html">Home</a></li>
					<li class="submenu"><a href="lens&glasses.html">Lens &#8675; </a>
						<ul class="detailmenu">
							<li>
								<a class="menu-item">Modern</a>
							</li>
							<li>
								<a class="menu-item">Classic</a>
							</li>
							<li>
								<a class="menu-item">Restro</a>
							</li>
							<li>
								<a class="menu-item">Best seller</a>
							</li>
						</ul>
					</li>
					<li class="submenu"><a href="#">Glasses &#8675; </a>
						<ul class="detailmenu">
							<li>
								<a class="menu-item">Modern</a>
							</li>
							<li>
								<a class="menu-item">Classic</a>
							</li>
							<li>
								<a class="menu-item">Restro</a>
							</li>
							<li>
								<a class="menu-item">Best seller</a>
							</li>
						</ul>
					</li>
					<li><a href="#">ACCESORIZE</a></li>
					<li><a href="#">SALE</a></li>
					<li><a href="#">ABOUT US</a></li>
					<li class="join">
							<a href="#" target="_self"></a>
					</li>
					<div class="find">
						<div class="input">
							<input type="text" placeholder=" Bạn cần tìm gì?"/>
						</div>
						<div class="search">
							<a><img src="Images/if_search__magnify__magnifier__find_2542088.png" alt="search"/></a>
						</div>
					</div>
				</ul>
			</div>

	
	<div class="row">
	<!-- SLIDE SHOW ẢNH -->
		<div class="advertisement">
			<div class="slideshow-container col-2">
				<div class="showoff">
					<img src="Images/avatar_xamtrongoc_thumb_600x600.jpg" alt="trend"/>
				</div>
				<div class="showoff hide-first">
					<img src="Images/avatar_NauGoMun_thumb_600x600.jpg" alt="trend"/>
				</div>
				<div class="showoff hide-first">
					<img src="Images/avatar_TimSanHo_900x900.jpg" alt="trend"/>
				</div>
				<div class="showoff hide-first">
					<img src="Images/avatar_xamtrongoc_thumb_600x600.jpg" alt="trend"/>
				</div>
			</div>
			<div class="SlideButton">
				  <span class="dot" onclick="currentSlide(0)"></span> 
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span>
				  <span class="dot" onclick="currentSlide(3)"></span>
			</div>
			<div class="up">
				 <img src="Images/buy1get1.2.jpg" alt="">
				 <a href="#new-colletion"><img src="Images/newcollection.jpg" alt=""></a>
				 <a href="#best-seller"><img src="Images/best-seller-golden-label-badge-design_1017-12390.jpg" alt=""></a>
			</div>
			<div class="new"> 
				 <img href="#" src="Images/bannerpng.png" alt="new"/>
			</div>
			<div class="down">
				<a href="#accesorize"><img src="Images/Untitled design.png" alt=""></a>
				<img src="Images/help.png" alt="">
				<img src="Images/review.png" alt="">
			</div>
		</div>

	

	<!-- SHOW HÀNG -->
	<div class="products">
		<div class="choose row margin-bot show-hang" style="margin-left: 0px">
			<ul class="ul_products">
				<li id="new-colletion" class="btn" onClick="showcollection()">NEW COLLECTION</li>
				<li id="best-seller" class="btn" onClick="showbestseller()">Best seller</li>
				<li id="accesorize" class="btn" onClick="showaccesorize()">ACCESORIZE</li>
			</ul>
		</div>

		<div class="lens">
			<div id="div-new-collection" class="show pane">
				<div class="demo marginL">
					<a href="Lens-Modern.html">
						<img src="Images/17861697_284251498682980_8076090681642949523_n.jpg" alt=""/></a>
							<div class="content"><a>Mordern<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Mina Choco.html">
						<img src="Images/avatar_minachoco_900x900.jpg" alt=""/></a>
							<div class="content"><a>Mina Choco<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Wood.html">
						<img src="Images/avatar_NauGoMun_thumb_600x600.jpg" alt=""/></a>
							<div class="content"><a>Wood<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Coral.html">
						<img src="Images/avatar_TimSanHo_900x900.jpg" alt=""/></a>
							<div class="content"><a>Coral<br>200.000VND</a></div>
				</div>
				<div class="demo marginL">
					<a href="Lens-Light Blue.html">
						<img src="Images/avatar_xamtrongoc_thumb_600x600.jpg" alt=""/></a>
							<div class="content"><a>Light blue<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Bella.html">
						<img src="Images/bella.jpg" alt=""/></a>
							<div class="content"><a>Bella<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Shine.html">
						<img src="Images/shine.jpg" alt=""/></a>
							<div class="content"><a>Shine<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Ocean.html">
						<img src="Images/ocean.jpg" alt=""/></a>
							<div class="content"><a>Ocean<br>200.000VND</a></div>
				</div>
			</div>

			<div id="div-best-seller" class="hidden pane">
				<div class="demo marginL">
					<a href="Lens-Little Cat.html">
						<img src="Images/17352219_272523493189114_3905149029541585499_n.jpg" alt=""/></a>
							<div class="content"><a>Little Cat<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Bee.html">
						<img src="Images/bee.jpg" alt=""/></a>
							<div class="content"><a>Bee<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Honey Gray.html">
						<img src="Images/honey grey.jpg" alt=""/></a>
							<div class="content"><a>Honey Gray<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Lens-Honey Brown.html">
						<img src="Images/honey brown.jpg" alt=""/></a>
							<div class="content"><a>Honey Brown<br>200.000VND</a></div>
				</div>
				<div class="demo marginL">
					<a href="Glasses-Classic.html">
					<img src="Images/dg1.jpg" alt=""/></a>
						<div class="content"><a>Classic<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<img src="Images/dg4.jpg" alt=""/>
						<div class="content"><a>Mirror<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<img src="Images/g4.jpg" alt=""/>
						<div class="content"><a>Square<br>200.000VND</a></div>
				</div>
				<div class="demo">
					<img src="Images/dg5.jpg" alt=""/>
						<div class="content"><a>Mordern<br>200.000VND</a></div>
				</div>
			</div>

			<div id="div-accesorize" class="hidden pane">
				<div class="demo marginL">
					<a href="Accesorize-Khay Đựng Thỏ-Gấu.html">
						<img src="Images/Bo_ho__p_du__ng_lens_LINE_de__t_kem_guong_7_8cm_(img_1183).jpg" alt=""/></a>
							<div class="content"><a>Khay đựng Thỏ/Gấu<br>50.000VND</a></div>
				</div>
				<div class="demo">
				<a href="Accesoize-Khay Đựng Box Hoa.html">
					<img src="Images/box hoa.jpg" alt=""/></a>
						<div class="content"><a>Khay đựng Box Hoa<br>60.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Accesoize-Khay Đựng Totoro.html">
						<img src="Images/khay-totoro.jpg" alt=""/></a>
							<div class="content"><a>Khay đựng Totoro<br>30.000VND</a></div>
				</div>
				<div class="demo ">
					<a href="Accesorize-HORIEN.html">
						<img src="Images/nuocLen.jpg" alt=""/></a>
							<div class="content"><a>Dung dịch ngâm lens HORIEN<br>75.000VND</a></div>
				</div>
				<div class="demo marginL">
					<a href="Accesorize-P2.html">
						<img src="Images/nuoc2.jpg" alt=""/></a>
							<div class="content"><a>Dung dịch ngâm lens P2<br>70.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Accesorize-FRESH EYES.html">
						<img src="Images/38758273_224217481613122_1993641471395233792_n.jpg" alt=""/></a>
							<div class="content"><a>Dung dịch ngâm lens FRESH EYES<br>50.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Accesorize-Nhíp gắp.html">
						<img src="Images/screen_shot_2018_02_12_at_6_22_25_pm_thumb_600x600.jpg" alt=""/></a>
							<div class="content"><a>Bộ nhíp gắp<br>12.000VND</a></div>
				</div>
				<div class="demo">
					<a href="Accesorize-Khay Đựng Gấu-Thỏ-Vịt.html">
						<img src="Images/khay-dung-lens-xinhh-1479636995-1293064-1479636995.jpg" alt=""/></a>
							<div class="content"><a>Khay đựng Gấu/Thỏ/Vịt<br>50.000VND</a></div>
				</div>
				
			</div>
		</div>
	</div>
	</div>
</div>
	
	<!-- FOOTER -->
	<div id="footer">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    	<div class="F-left">
			<p> Lens & Glasses </p>
			<p>Địa chỉ: Thành phố Biên Hoà, tỉnh Đồng Nai</p>
			<p>Điện thoại: +84 188 7285932 </p>
			<p>Email: <a href="mailto:genevievenguyen1510@gmail.com">genevievenguyen1510@gmail.com</a></p>
		</div>
		<div class="F-right">
			<ul>
				<li><a href="lens&glasses.html">Home</a></li>
				<li><a href="#">Lens</a></li>
				<li><a href="#">Glasses</a></li>
				<li class="last"><a href="#">Example4</a></li>
			</ul>
			<ul>Bản quyền thuộc về Van Nguyen 1.0 2018</ul>
		</div>
	</div>
</body>
</html>
