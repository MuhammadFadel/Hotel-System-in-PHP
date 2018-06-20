<?php include 'header.php'; ?>

<div class="main">
		<h1 class="w3layouts_head">Classy Hotel Booking Widget</h1>
		<div class="w3layouts_main_grid">
			<form action="#" method="post" class="w3_form_post">
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Name * </h5>
						<div class="nam">
							<input type="text" name="First name" placeholder="First Name" required="">
						</div>
						<div class="nam1">
							<input type="text" name="Last name" placeholder="Last Name" required="">
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>E-mail </h5>
							<input type="email" name="Email" placeholder="ex : EmailName@gmail.com" required="">
					</div>
				</div>
				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Room Type</h5>
						<select id="category" name="category" required="">
							<option value="none">None</option>
							<option value="category1">Single Room</option>
							<option value="category2">Double Room</option>
							<option value="category3">Suit Room</option>
							
						</select>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check In & Time *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="Time" placeholder=" " required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check Out & Time *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="Time" placeholder=" " required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of Guests *</h5>
						<select id="category1" name="category1" required="">
							<option value="category1">01</option>
							<option value="category2">02</option>
							<option value="category3">03</option>
							<option value="category4">04</option>
							<option value="category2">05</option>
							<option value="category3">06</option>
						</select>
					</div>
				</div>
				
				
				
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="Book Now">
					</div>
					<div class="clear"> </div>
				</div>
			</form>
		</div>
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->

<?php include 'footer.php'; ?>