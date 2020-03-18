	<main>
		<!-- Slider -->
		<div id="full-slider-wrapper">
			<div id="layerslider" style="width:1350px !important;height:400px;">
				<!-- first slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
					<img src="<?php echo base_url('assets/img/banner/tes.jpeg');?>" style="width: 1350px !important;height: 400px;" class="ls-bg img-fluid" alt="Slide background">
					<!-- <h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Book <strong>Unique</strong> Experiences</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Tours | Hotels | Restaurants
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='hotels-grid-isotope.html'>Read more</a> -->
				</div>
				<!-- second slide -->
				<div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
					<img src="<?php echo base_url('assets/img/banner/tes.jpeg');?>" style="width: 1350px !important;height: 400px;" class="ls-bg img-fluid" alt="Slide background">
					<!-- <h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Enjoy</strong> Unforgatable Holidays</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Tours | Hotels | Restaurants
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='tours-grid-isotope.html'>Read more</a> -->
				</div>
				<!-- third slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
					<img src="<?php echo base_url('assets/img/banner/tes.jpeg');?>" style="width: 1350px !important;height: 400px;" class="ls-bg img-fluid" alt="Slide background">
					<!-- <h3 class="ls-l slide_typo" style="top:47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Top Attractions</strong> to discover</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Tours | Hotels | Restaurants
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='tours-grid-sidebar.html'>Read more</a> -->
				</div>
			</div>
		</div>
		<!-- End layerslider -->
         <div class="wrapper" style="margin-top: 40px;">
				<div class="container">
					
					<form>
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Cari Lokasi Ruang Publik">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" name="dates" placeholder="Periode Penggunaan">
									<i class="icon_calendar"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="panel-dropdown">
									<a href="#">Jumlah Tamu <span class="qtyTotal">1</span></a>
									<div class="panel-dropdown-content">
										<!-- Quantity Buttons -->
										<div class="qtyButtons">
											<label>Orang</label>
											<div class="qtyDec"></div><input type="text" name="qtyInput" value="1"><div class="qtyInc"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<a href="<?php echo base_url('Home/daftarruangpublik');?>"><button type="button" class="btn_1 full-width purchase" value="Booking tempat">CARI</button></a>
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div><br><br>
		<div class="container">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>District</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox" class="icheck" checked>All <small>(945)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">La Defanse <small>(45)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Paris Center <small>(30)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Latin Quartes<small>(25)</small>
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
                                <h6>Distance</h6>
                                <input type="text" id="range" name="range" value="">
                            </div>
							<div class="filter_type">
								<h6>Rating </h6>
								<ul>
									<li>
										<label>
											<input type="checkbox" class="icheck"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small>(25)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small>(26)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small>(25)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i></span> <small>(25)</small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck"><span class="cat_star"><i class="icon_star"></i></span> <small>(25)</small>
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Tipe</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox" class="icheck">In Door <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Out Door <small></small>
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Jenis Bayar</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox" class="icheck">Gratis <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Berbayar <small></small>
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Fasilitas</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox" class="icheck">WiFi <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">AC <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Kolam Renang <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Tempat Parkir <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Lift <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Akses Kursi Roda <small></small>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="icheck">Fasilitas Rapat <small></small>
										</label>
									</li>
								</ul>
							</div>
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9">
					<div class="isotope-wrapper">
						<div class="row">
							<div class="col-md-6 isotope-item popular">
								<div class="box_grid">
									<figure>
										<a href="#0" class="wish_bt"></a>
										<a href="hotel-detail.html"><img src="<?php echo base_url('assets/img/hotel_1.jpg');?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
										<small>Paris Centre</small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="hotel-detail.html">Park Hyatt Hotel</a></h3>
										<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
										<span class="price"><strong>Gratis</strong></span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
									</ul>
								</div>
							</div>
							<!-- /box_grid -->
							<div class="col-md-6 isotope-item latest">
								<div class="box_grid">
									<figure>
										<a href="#0" class="wish_bt"></a>
										<a href="hotel-detail.html"><img src="<?php echo base_url('assets/img/hotel_2.jpg');?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
										<small>Paris Centre</small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="hotel-detail.html">Mariott Hotel</a></h3>
										<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
										<span class="price"><strong>Gratis</strong></span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
									</ul>
								</div>
							</div>
							<!-- /box_grid -->
							<div class="col-md-6 isotope-item popular">
								<div class="box_grid">
									<figure>
										<a href="#0" class="wish_bt"></a>
										<a href="hotel-detail.html"><img src="<?php echo base_url('assets/img/hotel_3.jpg');?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
										<small>Paris Centre</small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="hotel-detail.html">Lumiere Hotel</a></h3>
										<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
										<span class="price"><strong>Gratis</strong></span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
									</ul>
								</div>
							</div>
							<!-- /box_grid -->
							<div class="col-md-6 isotope-item latest">
								<div class="box_grid">
									<figure>
										<a href="#0" class="wish_bt"></a>
										<a href="hotel-detail.html"><img src="<?php echo base_url('assets/img/hotel_4.jpg');?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
										<small>Paris Centre</small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="hotel-detail.html">Concorde Hotel</a></h3>
										<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
										<span class="price"><strong>Gratis</strong></span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
									</ul>
								</div>
							</div>
							<!-- /box_grid -->
							<div class="col-md-6 isotope-item popular">
								<div class="box_grid">
									<figure>
										<a href="#0" class="wish_bt"></a>
										<a href="hotel-detail.html"><img src="<?php echo base_url('assets/img/hotel_5.jpg');?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
										<small>Paris Centre</small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="hotel-detail.html">Louvre Hotel</a></h3>
										<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
										<span class="price"><strong>Gratis</strong></span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
									</ul>
								</div>
							</div>
							<!-- /box_grid -->
							<div class="col-md-6 isotope-item latest">
								<div class="box_grid">
									<figure>
										<a href="#0" class="wish_bt"></a>
										<a href="hotel-detail.html"><img src="<?php echo base_url('assets/img/hotel_6.jpg');?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
										<small>Paris Centre</small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="hotel-detail.html">Concorde Hotel</a></h3>
										<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
										<span class="price"><strong>Gratis</strong></span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.8</strong></div></li>
									</ul>
								</div>
							</div>
							<!-- /box_grid -->
						</div>
						<!-- /row -->
				</div>
				<!-- /isotope-wrapper -->
			
				<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Cum appareat maiestatis interpretaris et, et sit.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Payments</h4>
							<p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Cancel Policy</h4>
							<p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
		
	</main>
	<!--/main-->
	
	
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	

	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/layerslider/js/greensock.js');?>"></script>
    <script src="<?php echo base_url('assets/layerslider/js/layerslider.transitions.js');?>"></script> 
    <script src="<?php echo base_url('assets/layerslider/js/layerslider.kreaturamedia.jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/input_qty.js');?>"></script>
    <script>
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            navButtons: false,
            navStartStop: false,
            showCircleTimer: false,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1200,
            skinsPath: 'assets/layerslider/skins/'
                // Please make sure that you didn't forget to add a comma to the line endings
                // except the last line!
        });
    </script>

    <script>
	$(function() {
	  'use strict';
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>
	
