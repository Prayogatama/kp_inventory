
<!DOCTYPE HTML>
<html>
	<head>
		<title>PT Mitra Rekatama Mandiri</title>
		<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
		 <!-- Custom Theme files -->
		<link href="<?php echo base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js')?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----container---->
		<div class="container">
			<!----top-header---->
			<div class="top-header">
				<div class="logo">
					<a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/images/logo_tittle.png')?>" title="mitrarekatama" /></a>
				</div>
				<div class="top-header-info">
					<div class="top-contact-info">
						<ul class="unstyled-list list-inline">
							<li><span class="phone"> </span>0272-551408</li>
							<li><span class="mail"> </span><a href="#">info@bajarekatama.com</a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="cart-details">
						<div class="add-to-cart">
							<ul class="unstyled-list list-inline">
								<li><span class="cart"> </span>
									<ul class="cart-sub">
										<li><p>0 Products</p></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="login-rigister">
							<ul class="unstyled-list list-inline">
								<li><a class="login" href="<?php echo base_url('/login')?>">Login</a></li>
								<li><a class="rigister" href="<?php echo base_url('/register_pembeli')?>">REGISTER</a></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!----//top-header---->
			<!---top-header-nav---->
			<div class="top-header-nav">
			<!----start-top-nav---->
			 <nav class="top-nav main-menu">
					<ul class="top-nav">
						<li><a href="<?php echo base_url()?>">HOME </a><span> </span></li>
						<li><a href="<?php echo base_url('/products')?>">PRODUCTS </a><span> </span></li>
						<li><a href="<?php echo base_url('/category')?>">CATEGORY</a><span> </span></li>
						<li><a href="<?php echo base_url('/contact')?>">CONTACT US</a><span> </span></li>
						<li><a href="<?php echo base_url('/about')?>">ABOUT US</a></li>
						<div class="clearfix"> </div>
					</ul>
					<a href="#" id="pull"><img src="<?php echo base_url('assets/images/nav-icon.png')?>" title="menu" /></a>
			  </nav>
			  <!----End-top-nav---->
			  <!---top-header-search-box--->
			  <div class="top-header-search-box">
			  	<form>
			  		<input type="text" placeholder="Search" required / maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			  </div>
			  <!---top-header-search-box--->
						<div class="clearfix"> </div>
			</div>
		</div>
			<!--//top-header-nav---->
			<!----contact---->
			<div class="contact-info">
					<!-- <div class="map">
					 	<!-- <iframe src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small> -->
					 <!-- </div> -->
					 <div class="container">
					 </div>
					 <div class="container">
					 <div class="contact-grids">
						 <div class="logo">
							 <img src="<?php echo base_url('assets/images/goods/slidetr.png')?>" title="mitrarekatama" />
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 	<form>
					  	<div class="contact-form">
								<div class="contact-to">
									<form class="contact-to">
										<div>
											<tr>
												<h3>Introducing</h3>
												<p>PT. Mitra Rekatama Mandiri adalah sebuah Perusahaan yang bergerak dalam
													bidang industry manufaktur pengecoran logam, non logam dan permesinan.
													Perusahaan yang didirikan pada tahun 1988 dengan CV. Rekayasa Utama
													dalam memenuhi tuntutan global, pada tahun 1997 perusahaan berkembang
													dan berubah nama menjadi PT. Mitra Rekatama Mandiri atas kerjasama
													dengan PT. Astra Mitra Ventura (AMV) dan Yayasan Dharma Bhakti Astra
													(YDBA). Pada tahun 2008 PT. Mitra Rekayasa Mandiri mendapatkan
													kepercayaan dari Waskita Wijaya dalam pengadaan Counter Weight
													Block untuk Suramadu Bridge Project. Perusahaan selalu menjaga
													kualitas produk-produknya lalu berinovasi dan terus melakukan
													riset bekerjasama dengan Politeknik Manufaktur Ceper, Badan Atom
													Nasional serta berbagai pihak.
												</p>
											</tr>
											<tr>
												<h3>Visi</h3>
												<p>Berkarya untuk kemanfaatan bersama.</p>
											</tr>
											<tr>
												<h3>Misi</h3>
												<p>Selalu mencari peluang usaha dan pemecahan masalah dalam
													keadaan sesulit apapun menuju situs global demi kemakmuran
													bersama.
												</p>
											</tr>
										</div>
							</div>
						</div>
			<!---//contact---->
			<!----footer--->
			<div class="footer">
				<div class="container">
					<div class="col-md-3 footer-logo">
						<a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/images/flogo.png')?>" title="brand-logo" /></a>
					</div>
					<div class="col-md-7 footer-links">
						<ul class="unstyled-list list-inline">
							<li><a href="#"> Faq</a> <span> </span></li>
							<li><a href="#"> Terms and Conditions</a> <span> </span></li>
							<li><a href="#"> Secure Payments</a> <span> </span></li>
							<li><a href="#"> Shipping</a> <span> </span></li>
							<li><a href="contact.html"> Contact</a> </li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="col-md-2 footer-social">
						<ul class="unstyled-list list-inline">
							<li><a class="pin" href="#"><span> </span></a></li>
							<li><a class="twitter" href="#"><span> </span></a></li>
							<li><a class="facebook" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <div class="clearfix"> </div>
			<!---//footer--->
			<!---copy-right--->
					<div class="copy-right">
						<div class="container">
							<p>PT.MITRA REKATAMA MANDIRI @2017</p>
							<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
							<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
						</div>
					</div>
			<!--//copy-right--->
		</div>
		<!----container---->
	</body>
</html>
