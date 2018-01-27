
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
								<li>
									<span class="cart">
										<i class="fa fa-shopping-cart"></i>
										<a href="<?php echo base_url('/keranjang')?>"></a>
									</span>
									<ul class="cart-sub">
										<li><p>0 Products</p></li>
									</ul>
								</li>
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
			<!----content---->
				<!-- <div class="content">
					<div class="container"> -->
				<!--- products ---->
						<!-- <div class="category">
							<div class="category-head">
								<nav class="top-nav main-menu">
				 					<ul class="category-nav">
										<h3>Product Application</h3>
				 						<li><a href="#" id="link_agri">Agricultural</a></li>
				 						<li><a href="#" id="link_food">Food</a></li>
				 						<li><a href="#" id="link_metal">Metal</a></li>
				 						<li><a href="#" id="link_cement">Cement</a></li>
										<li><a href="#" id="link_mining">Mining</a></li>
										<li><a href="#" id="link_textile">Textile</a></li>
										<li><a href="#" id="link_marine">Marine</a></li>
										<li><a href="#" id="link_train">Train</a></li>
				 						<div class="clearfix"> </div>
				 					</ul>
				 					<a href="#" id="pull"><img src="<?php echo base_url('assets/images/nav-icon.png')?>" title="menu" /></a>
				 			  </nav>
							</div>
						</div> -->
					<!-- </div>
				</div> -->
				<!-- //products ---->
				<!----product-details--->
				<div class="product-details">
					<div class="container">
					<div class="product-details-row1">
						<div class="product-details-row1-head">
							<h2>Collar WS Center</h2>
							<p>Agricultural industry</p>
						</div>
						<div class="col-md-4 product-details-row1-col1">
							<!----details-product-slider--->
						<!-- Include the Etalage files -->
							<link rel="stylesheet" href="<?php echo base_url('assets/css/etalage.css')?>">
							<script src="<?php echo base_url('assets/js/jquery.etalage.min.js')?>"></script>
						<!-- Include the Etalage files -->
						<script>
								jQuery(document).ready(function($){

									$('#etalage').etalage({
										thumb_image_width: 300,
										thumb_image_height: 400,
										source_image_width: 900,
										source_image_height: 1000,
										show_hint: true,
										click_callback: function(image_anchor, instance_id){
											alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
										}
									});
									// This is for the dropdown list example:
									$('.dropdownlist').change(function(){
										etalage_show( $(this).find('option:selected').attr('class') );
									});

							});
						</script>
						<!----//details-product-slider--->
						<div class="details-left">
							<div class="details-left-slider">
								<ul id="etalage">
									<li>
										<a href="optionallink.html">
											<img class="etalage_thumb_image" src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" />
											<img class="etalage_source_image" src="<?php echo base_url('assets/images/goods/collar_ws_c1.png')?>" />
										</a>
									</li>
									<li>
										<img class="etalage_thumb_image" src="<?php echo base_url('assets/images/goods/collar_ws_c2.png')?>" />
										<img class="etalage_source_image" src="<?php echo base_url('assets/images/goods/collar_ws_c2.png')?>" />
									</li>
									</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 product-details-row1-col2">
						<div class="product-rating">
							<a class="rate" href="#"><span> </span></a>
							<label><a href="#">Read <b>8</b> Reviews</a></label>
						</div>
						<div class="product-price">
							<div class="product-price-left text-right">
								<!-- <span>174.00</span> -->
								<h5>IDR 6.825</h5>
							</div>
							<div class="product-price-right">
								<a href="#"><span> </span></a>
								<label> save <b>40%</b></label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="product-price-details">
							<p class="text-right"> Penjualan bersifat grosir silahkan pesan, pesan banyak lebih hemat </p>
							<a class="shipping" href="#"><span> </span>Free shipping</a>
							<div class="clearfix"> </div>
							<div class="product-size-qty">
								<!-- <div class="pro-size">
									<span>Size:</span>
									<select>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
									</select>
								</div> -->
								<div class="pro-qty">
									<span>Qty:</span>
									<select>
										<option>10</option>
										<option>20</option>
										<option>30</option>
										<option>40</option>
										<option>50</option>
									</select>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
							<div class="product-cart-share">
								<div class="add-cart-btn">
									<input type="button" value="Add to cart" />
								</div>
								<ul class="product-share text-right">
									<h3>Share This:</h3>
									<ul>
										<li><a class="share-face" href="#"><span> </span> </a></li>
										<li><a class="share-twitter" href="#"><span> </span> </a></li>
										<li><a class="share-google" href="#"><span> </span> </a></li>
										<li><a class="share-rss" href="#"><span> </span> </a></li>
										<div class="clear"> </div>
									</ul>
								</ul>
							</div>
						</div>
					</div>
						<div class="clearfix"> </div>
				<!--//product-details--->
				</div>
				<!---- product-details ---->
				<div class="product-tabs">
					<!--Horizontal Tab-->
				    <div id="horizontalTab">
				        <ul>
				            <li><a href="#tab-1">Product overview</a></li>
				            <li><a href="#tab-2">Features</a></li>
				            <li><a href="#tab-3">Buyers Reviews</a></li>
				        </ul>
				        <div id="tab-1" class="product-complete-info">
				        	<h3>DESCRIPTION:</h3>
				        	<p> produk ini sangat kuat dan kokoh bila digunakan</p>
				       		<span>DETAILS:</span>
				       		<div class="product-fea">
				       			<p>Bahan Kualitas tinggi</p>
				       			<p>Bahan terbuat dari baja sehingga kuat saat digunakan</p>
				       			<p>Ukuran Berdiameter 30 CM</p>
				       			<p>Bahan baja yang dilapisi aluminium sehingga tidak mudah berkarat ketika terkena air hujan dalam jangka panjang</p>
										<p>Terdapat 2 pilihan pengiriman yaitu diantar langsung dari perusahaan dengan biaya yang ditanggung pembeli</p>
										<p>pilihan kedua yaitu diambil sendiri</p>
										<p>pesanan diatas jam 15.00 akan langsung dilayani dihari itu juga</p>
				       		</div>
				        </div>
				        <div id="tab-2" class="product-complete-info">
				        	<h3>DESCRIPTION:</h3>
				        	<p> produk ini sangat kuat dan kokoh bila digunakan</p>
				       		<span>DETAILS:</span>
				       		<div class="product-fea">
										<p>Bahan Kualitas tinggi</p>
				       			<p>Bahan terbuat dari baja sehingga kuat saat digunakan</p>
				       			<p>Ukuran Berdiameter 30 CM</p>
				       			<p>Bahan baja yang dilapisi aluminium sehingga tidak mudah berkarat ketika terkena air hujan dalam jangka panjang</p>
				       		</div>
				        </div>
				        <div id="tab-3"  class="product-complete-info">
				        	<h3>Buyers Reviews</h3>
				        	<p> Silahkan memberikan ulasan mengenai produk agar perusahaan terus konsisten dengan menjaga kualitas bahan</p>
				       		<span>Comment:</span></br>
									<div class="box box-success">
				            <div class="box-header">
				              <i class="fa fa-comments-o"></i>

				              <h3 class="box-title">Chat</h3>

				              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
				                <div class="btn-group" data-toggle="btn-toggle">
				                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
				                  </button>
				                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
				                </div>
				              </div>
				            </div>
				            <div class="box-body chat" id="chat-box">
				              <!-- chat item -->
				              <div class="item">
				                <<?php echo base_url('assets/images/nav-icon.png')?> src="<?php echo base_url('assets/dist/img/user4-128x128.jpg')?>" alt="user image" class="online">

				                <p class="message">
				                  <a href="#" class="name">
				                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
				                    Mike Doe
				                  </a>
				                  I would like to meet you to discuss the latest news about
				                  the arrival of the new theme. They say it is going to be one the
				                  best themes on the market
				                </p>
				                <div class="attachment">
				                  <h4>Attachments:</h4>

				                  <p class="filename">
				                    Theme-thumbnail-image.jpg
				                  </p>

				                  <div class="pull-right">
				                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
				                  </div>
				                </div>
				                <!-- /.attachment -->
				              </div>
				              <!-- /.item -->
				              <!-- chat item -->
				              <div class="item">
				                <img src="<?php echo base_url('assets/dist/img/user3-128x128.jpg"')?>" alt="user image" class="offline">

				                <p class="message">
				                  <a href="#" class="name">
				                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
				                    Alexander Pierce
				                  </a>
				                  I would like to meet you to discuss the latest news about
				                  the arrival of the new theme. They say it is going to be one the
				                  best themes on the market
				                </p>
				              </div>
				              <!-- /.item -->
				              <!-- chat item -->
				              <div class="item">
				                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg')?>" alt="user image" class="offline">

				                <p class="message">
				                  <a href="#" class="name">
				                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
				                    Susan Doe
				                  </a>
				                  I would like to meet you to discuss the latest news about
				                  the arrival of the new theme. They say it is going to be one the
				                  best themes on the market
				                </p>
				              </div>
				              <!-- /.item -->
				            </div>
				            <!-- /.chat -->
				            <div class="box-footer">
				              <div class="input-group">
				                <input class="form-control" placeholder="Type message...">

				                <div class="input-group-btn">
				                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
				                </div>
				              </div>
				            </div>
				          </div>
									</div>
				        </div>
				    </div>
				    <!-- Responsive Tabs JS -->
				    <script src="<?php echo base_url('assets/js/jquery.responsiveTabs.js')?>" type="text/javascript"></script>

				    <script type="text/javascript">
				        $(document).ready(function () {
				            $('#horizontalTab').responsiveTabs({
				                rotate: false,
				                startCollapsed: 'accordion',
				                collapsible: 'accordion',
				                setHash: true,
				                disabled: [3,4],
				                activate: function(e, tab) {
				                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
				                }
				            });

				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('#stop-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('stopRotation');
				            });
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('.select-tab').on('click', function() {
				                $('#horizontalTab').responsiveTabs('activate', $(this).val());
				            });
				        });
				    </script>
				</div>
				<!-- //product-details ---->
				</div>
				</div>
			<!----content---->
			<div class="clearfix"> </div>
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
							<p>Copyright &copy; 2017 PT.MITRA REKATAMA MANDIRI </p>
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
