<?php include('../templates/header.php'); ?>
<?php include('../templates/sidebar.php'); ?>
<div id="colorlib-main">
	<div class="colorlib-contact">
		<div class="colorlib-narrow-content">
		<div class="row">
				<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading" style="color:#fff ; font-weight:bold; text-align:right;">Contact Us
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-push-1">
					<div class="row">
						<div class="card">
							<div class="card-body">
							<div class="col-md-12 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
							<form action="">
								<div class="form-group">
									<label for="">First Name <small style="color:red;">*</small></label>
									<input type="text" class="form-control" placeholder="First Name">
								</div>
								<div class="form-group">
									<label for="">Last Name <small style="color:red;">*</small></label>
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
								<div class="form-group">
									<label for="">Email <small style="color:red;">*</small></label>
									<input type="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="">Company Name <small style="color:red;">*</small></label>
									<input type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="form-group">
									<label for="">Country <small style="color:red;">*</small></label>
									<select name="country" class="form-control" id="">
										<option value="indonesia">Indonesia</option>
										<option value="malaysia">Malaysia</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Client Type <small style="color:red;">*</small></label>
									<select name="country" class="form-control" id="">
										<option value="-">None</option>
										
									</select>
								</div>
								<div class="form-group">
									<label for="">How We Can Help ?</label>
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-info btn-send-message" value="Submit">
									<input type="submit" class="btn btn-default btn-send-message" value="Reset">
								</div>
							</form>
						</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php include('../templates/footer.php'); ?>