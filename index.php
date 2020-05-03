<?php require_once('inc/header.inc.php'); ?>




<!-- begin [HEADER] -->
<header>
	<div class="logo"><img src="images/logo-white.png"></div>
</header>
<!-- end [HEADER] -->


<!-- begin [MAINCONTENT] -->
<section>
	<div class="container">
		<div class="row no-gutters">
			<div class="col">
				<div class="maincontent">
					<h1>Registration Form</h1>

					<div class="innercontainer">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>
									<label for="inputFirstName">First Name</label>
									<input id="inputFirstName" type="text" class="inputstyle is-lg" placeholder="First Name">
								</p>
								<p>
									<label for="inputLastName">Last Name</label>
									<input id="inputLastName" type="text" class="inputstyle is-lg" placeholder="Last Name">
								</p>
								<p>
									<label for="inputCompany">Company</label>
									<input id="inputCompany" type="text" class="inputstyle is-full" placeholder="Company">
								</p>
								<p>
									<label for="inputPosition">Position</label>
									<input id="inputPosition" type="text" class="inputstyle is-md" placeholder="Position">
								</p>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>
									<label for="inputEmail">Email</label>
									<input id="inputEmail" type="email" class="inputstyle is-full" placeholder="Email">
								</p>
								<p>
									<label for="inputEmail">Address</label>
									<input id="inputEmail" type="text" class="inputstyle is-full" placeholder="Address">
								</p>
								<p>
									<label for="inputCountry">Country</label>
									<select id="inputCountry" class="inputstyle is-xl">
										<option selected="selected" value="Philippines">Philippines</option>
										<option value="Japan">Japan</option>
										<option value="Japan">South Korea</option>
									</select>
								</p>
								<p>
									<label for="inputPhone">Mobile</label>
									<input id="inputPhone" type="text" class="inputstyle is-xs" value="63" readonly="readonly">
									<input id="inputPhone" type="text" class="inputstyle is-md">
								</p>
							</div>
						</div>
					</div>

					<div class="foot-button">
						<div class="foot-innercontainer">
							<button class="btn btn-secondary">Cancel</button>
							<button class="btn btn-warning">Next</button>
							<!--<input type="submit" class="btn btn-success">Finish</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end [MAINCONTENT] -->





<?php require_once('inc/footer.inc.php') ?>