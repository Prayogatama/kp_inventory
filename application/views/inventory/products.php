
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
								<li><a class="rigister" href="<?php echo base_url('/register')?>">REGISTER</a></li>
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
			<!----content---->
		<div class="content">
			<div class="container">
				<!--- products ---->
				<div class="clearfix"> </div>
				<!-- //products ---->
				<!----speical-products---->
				<div class="special-products all-poroducts">
					<div class="s-products-head">
						<div class="s-products-head-left">
							<h3>SPECIAL <span>PRODUCTS</span></h3>
						</div>
						<div class="s-products-head-right">
							<a href="#"><span> </span>view all products</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!----special-products-grids---->
					<div class="special-products-grids">
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="<?php echo base_url('/single-page1')?>"><img src="" title="" /></a>
							<a class="product-here" href="<?php echo base_url('/single-page1')?>">
								<img src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" title="" />
							</a>
							<h4><a href="<?php echo base_url('/single-page1')?>">Collar WS Center</a></h4>
							<a class="product-btn" href="<?php echo base_url('/single')?>"><span>6.825</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="<?php echo base_url('single-page2')?>"><img src="" title="" /></a>
							<a class="product-here" href="<?php echo base_url('single-page2')?>"><img src="<?php echo base_url('assets/images/goods/gasoline_e_p1.png')?>" title="" /></a>
							<h4><a href="<?php echo base_url('single-page2')?>">Gasoline E Pully</a></h4>
							<a class="product-btn" href="<?php echo base_url('single-page2')?>"><span>42.100</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="<?php echo base_url('single-page3')?>"><img src="" title="" /></a>
							<a class="product-here" href="<?php echo base_url('single-page3')?>"><img src="<?php echo base_url('assets/images/goods/main_flat_p1.png')?>" title="product-name" /></a>
							<h4><a href="<?php echo base_url('single-page3')?>">Main Flat Pully </a></h4>
							<a class="product-btn" href="<?php echo base_url('single-page3.php')?>"><span>257.250</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="<?php echo base_url('single-page4')?>"><img src="" title="" /></a>
							<a class="product-here" href="<?php echo base_url('single-page4')?>"><img src="<?php echo base_url('assets/images/goods/mesin_potong1.png')?>" title="product-name" /></a>
							<h4><a href="<?php echo base_url('single-page4')?>l">Mesin Potong </a></h4>
							<a class="product-btn" href="<?php echo base_url('single-page4.php')?>"><span>437.000</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="<?php echo base_url('single-page5')?>"><img src="" title="" /></a>
							<a class="product-here" href="<?php echo base_url('single-page5')?>"><img src="<?php echo base_url('assets/images/goods/sarangan_deck_d1.png')?>" title="product-name" /></a>
							<h4><a href="<?php echo base_url('single-page4')?>l">Sarangan deck Drain </a></h4>
							<a class="product-btn" href="<?php echo base_url('single-page5.php')?>"><span>437.000</span><small>GET NOW</small><label> </label></a>
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
				<!----->
				<div class="special-products all-poroducts latest-products">
					<div class="s-products-head">
						<div class="s-products-head-left">
							<h3>LATEST <span>PRODUCTS</span></h3>
						</div>
						<div class="s-products-head-right">
							<a href="#"><span> </span>view all products</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!----special-products-grids---->
					<div class="special-products-grids">
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page1.html"><img src="" title="" /></a>
							<a class="product-here" href="<?php echo base_url('/single-page')?>"><img src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" title="" /></a>
							<h4><a href="<?php echo base_url('/single-page')?>">Collar WS Center</a></h4>
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
			<!-- footer pindah ke footer.php -->
			<?php echo base_url('inventory/template/footer'); ?>
