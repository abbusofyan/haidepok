<main>
		<div class="hero_in cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Keranjang Anda</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Pembayaran</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Selesai!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</div>
		<!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
						<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>
										Ruang Publik
									</th>
									<th>
										Diskon
									</th>
									<th>
										Jenis Bayar
									</th>
									<th>
										Harga
									</th>
									<th>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_1.jpg" alt="Image">
										</div>
										<span class="item_cart">Taman Merdeka Kota Depok</span>
									</td>
									<td>
										0%
									</td>
									<td>
										Gratis
									</td>
									<td>
										<strong>0</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="#"><i class="icon-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_1.jpg" alt="Image">
										</div>
										<span class="item_cart">Bumi Sampireun</span>
									</td>
									<td>
										10%
									</td>
									<td>
										Berbayar
									</td>
									<td>
										<strong>Rp. 500.000/person</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="#"><i class="icon-trash"></i></a>
									</td>
								</tr>
								
							</tbody>
						</table>
						<div class="cart-options clearfix">
							<div class="float-left">
								<div class="apply-coupon">
									<div class="form-group">
										<input type="text" name="coupon-code" value="" placeholder="Kode Kupon Anda" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn_1 outline">Apply Kupon</button>
									</div>
								</div>
							</div>
							<div class="float-right fix_mobile">
								<button type="button" class="btn_1 outline">Update Keranjang</button>
							</div>
						</div>
						<!-- /cart-options -->
					</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">0</span>
							</div>
							<ul class="cart_details">
								<li>Ruang Publik <span>All Alun-Alun Kota Depok</span></li>
								<li>Mulai <span>02-11-20 Jam 08.00</span></li>
								<li>Selesai <span>04-11-20 Jam 14.00</span></li>
								<li>Jumlah Tamu <span>20</span></li>
							</ul>
							<a href="<?php echo base_url('Home/bookproses2');?>" class="btn_1 full-width purchase">Ajukan</a>
							<!-- <div class="text-center"><small>No money charged in this step</small></div> -->
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
	
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	
	
  
</body>
</html>