
<!DOCTYPE HTML>
<html>
	<head>
		<title>PT Mitra Rekatama Mandiri</title>
		<!-- meta chat -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<!-- meta chat -->
		<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
		 <!-- Custom Theme files -->
		<link href="<?php echo base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js')?>"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css')?>">
		<!-- iCheck -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
		<!-- Chat -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/css/chat.css')?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
								<li>
									<a class="fa fa-cart-plus" href="<?php echo base_url('/keranjang')?>">
									</a>
									<ul class="cart-sub">
										<li>
											<a class="keranjang">3 Products</a>
										</li>
									</ul>
								</li>
								<!-- <tr>
									<td>
										<input class="btn btn-primary" type="button" name="keranjang" value="">
										<span class="fa fa-cart-plus">
											<a href="<?php echo base_url('/keranjang')?>"></a>
										</span>
									</td>
								</tr> -->
								<!-- <li><span class="cart" href="<?php echo base_url('/keranjang')?>"></span>
									<ul class="cart-sub">
										<li>
											<a class="keranjang"></a>
										</li>
									</ul>
								</li> -->
							</ul>
						</div>
						<div class="login-rigister">
							<ul class="unstyled-list list-inline">
								<li><a class="login" href="<?php echo base_url('/login_admin')?>">Login</a></li>
								<li><a class="rigister" href="<?php echo base_url('/register_admin')?>">REGISTER</a></li>
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
			<!----start-slider-script---->
			<script src="<?php echo base_url('assets/js/responsiveslides.min.js')?>"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="<?php echo base_url('assets/images/slide.png')?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>WILL HELM</h1>
			          		<label>WINTER</label>
			          		<a class="slide-btn" href="#"><span>99.90$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="<?php echo base_url('assets/images/slidetr.png')?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>FAST NER2</h1>
			          		<label>Dress Shoe</label>
			          		<a class="slide-btn" href="#"><span>99.90$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="<?php echo base_url('assets/images/slide1.png')?>" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<h1>WILL HELM</h1>
			          		<label>WINTER</label>
			          		<a class="slide-btn" href="#"><span>99.90$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End-slider---->
			<!----content---->
				<div class="content">
					<div class="container">
				<!---top-row--->

				<!---top-row--->
				<div class="container">
				<!----speical-products---->
				<div class="special-products">
					<div class="s-products-head">
						<div class="s-products-head-left">
							<h3>UPDATE <span>PRODUCTS</span></h3>
						</div>
						<div class="s-products-head-right">
							<a href="products.html"><span> </span>view all products</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!----special-products-grids---->
					<div class="special-products-grids">
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="<?php echo base_url('/single')?>"><img src="" title="" /></a>
							<a class="product-here" href="<?php echo base_url('/single')?>"><img src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" title="" /></a>
							<h4><a href="<?php echo base_url('/single')?>">Collar WS Center</a></h4>
							<a class="product-btn" href="<?php echo base_url('/single')?>"><span>6.825</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page2.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page2.html"><img src="<?php echo base_url('assets/images/goods/gasoline_e_p1.png')?>" title="" /></a>
							<h4><a href="single-page.html">Gasoline E Pully</a></h4>
							<a class="product-btn" href="single-page2.html"><span>42.100</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page3.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page3.html"><img src="<?php echo base_url('assets/images/goods/main_flat_p1.png')?>" title="product-name" /></a>
							<h4><a href="single-page.html">Main Flat Pully </a></h4>
							<a class="product-btn" href="single-page3.html"><span>257.250</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page4.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page4.html"><img src="<?php echo base_url('assets/images/goods/mesin_potong1.png')?>" title="product-name" /></a>
							<h4><a href="single-page.html">Mesin Potong </a></h4>
							<a class="product-btn" href="single-page4.html"><span>437.000</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page4.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page4.html"><img src="<?php echo base_url('assets/images/goods/mesin_potong1.png')?>" title="product-name" /></a>
							<h4><a href="single-page.html">Mesin Potong </a></h4>
							<a class="product-btn" href="single-page4.html"><span>437.000</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page5.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page5.html"><img src="<?php echo base_url('assets/images/goods/sarangan_deck_d1.png')?>" title="product-name" /></a>
							<h4><a href="single-page.html">Sarangan Deck Drain </a></h4>
							<a class="product-btn" href="single-page5.html"><span>80.000</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page6.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page6.html"><img src="<?php echo base_url('assets/images/goods/sarangan_kompor1.png')?>" title="product-name" /></a>
							<h4><a href="single-page.html">Sarangan Kompor </a></h4>
							<a class="product-btn" href="single-page6.html"><span>12.000</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page7.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page7.html"><img src="<?php echo base_url('assets/images/goods/shot_blash1.png')?>" title="product-name" /></a>
							<h4><a href="single-page.html">Shot Blash </a></h4>
							<a class="product-btn" href="single-page7.html"><span>350</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page8.html"><img src="" title="" /></a>
							<a class="product-here" href="single-page8.html"><img src="<?php echo base_url('assets/images/goods/tabung_deck_d1.png')?>" title="product-name" /></a>
							<h4><a href="single-page.html">Tabung Deck Drain </a></h4>
							<a class="product-btn" href="single-page8.html"><span>80.000</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!---//special-products-grids---->
				</div>
				<!---//speical-products---->
				</div>
			<!----content---->
			<!----footer--->
			<div class="footer">
				<div class="container">
					<div class="col-md-3 footer-logo">
						<ul class="unstyled-list list-inline">
							<!-- <li><a class="pin" href="#"><img src="images/flogo.png" title="brand-logo" /></a></li> -->
							<li><a class="twitter" href=""><img src="<?php echo base_url('assets/images/sosmed/icon_twitter.png')?>" title="" /><</a></li>
							<li><a class="facebook" href=""><img src="<?php echo base_url('assets/images/sosmed/icon_browser.png')?>" title="" /></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
				</div>
			</div>
					<!-- <a href="index.html"><img src="" title="" /></a> -->
					<!-- <div class="col-md-7 footer-links">
						<ul class="unstyled-list list-inline">
							<li><a href="#"> Faq</a> <span> </span></li>
							<li><a href="#"> Terms and Conditions</a> <span> </span></li>
							<li><a href="#"> Secure Payments</a> <span> </span></li>
							<li><a href="#"> Shipping</a> <span> </span></li>
							<li><a href="contact.html"> Contact</a> </li>
							<div class="clearfix"> </div>
						</ul>
					</div> -->
					<!-- <div class="col-md-2 footer-social">
					</div>
					<div class="clearfix"> </div> -->
			 <!-- <div class="clearfix"> </div> -->
			<!---//footer--->
			<!---copy-right--->
					<div class="copy-right">
						<div class="container">
							<p> &copy; Copyright 2017 by PT. Mitra Rekatama Mandiri</a></p>
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
			<!-- chat -->
			<div class="floating-chat">
				<i class="fa fa-comments" aria-hidden="true"></i>
				<div class="chat">
					<div class="header">
						<span class="title">
							what's on your mind?
						</span>
						<button>
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
					</div>
					<ul class="messages">
						<li class="other">asdasdasasdasdasasdasdasasdasdasasdasdasasdasdasasdasdas</li>
						<li class="other">Are we dogs??? 🐶</li>
						<li class="self">no... we're human</li>
						<li class="other">are you sure???</li>
						<li class="self">yes.... -___-</li>
						<li class="other">if we're not dogs.... we might be monkeys 🐵</li>
						<li class="self">i hate you</li>
						<li class="other">don't be so negative! here's a banana 🍌</li>
						<li class="self">......... -___-</li>
					</ul>
					<div class="footer">
						<div class="text-box" contenteditable="true" disabled="true"></div>
						<button id="sendMessage">send</button>
					</div>
				</div>
			</div>
			<!-- chat -->
		</div>
		<!----container---->
		<!-- jQuery Chat-->
		<script src="<?php echo base_url('assets/js/chat.min.js')?>"></script>

	</body>
</html>
