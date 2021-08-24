<?php require_once('header.php'); ?>
<?php
if(!empty($_POST)){
	$x['data'] = json_encode($_POST);
	$x['type'] = "company";
	$q = insert($x,"questions");
	mysqli_query($con,$q);
	echo "<script>alert('Data Inserted Successfully!');</script>";
}
?>

			<!-- Main -->
				<section id="main" style="margin-top:0;" class="container">
					<header>
						<h2>Companies</h2>
						<p>Just an assorted selection of questions.</p>
					</header>

					
					<div class="row">
						<div class="col-12">

							<!-- Form -->
								<section class="box">
									<h3>Questionnaire</h3>
									<form method="post" action="">
										<div class="row gtr-uniform gtr-50">
											<div class="col-12">
												<input type="text" name="job_title" id="name" required placeholder="Job Title" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="text" name="salary_per_week" id="name" required placeholder="Salary Per Week" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="text" name="worktime_per_week" id="name" required placeholder="Worktime Per Week" />
											</div>

											<div class="col-12">
												<input type="text" name="company_name" id="name" required placeholder="Company Name" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="text" name="company_address" id="name" required placeholder="Company Address" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="text" name="work_address" id="name" required placeholder="Work Address" />
											</div>

											<div class="col-4 col-12-mobilep">
												<input type="text" name="contact_person" id="name" required placeholder="Contact Person" />
											</div>
											<div class="col-4 col-12-mobilep">
												<input type="text" name="telephone_number" id="name" required placeholder="Telephone Number" />
											</div>

											<div class="col-4 col-12-mobilep">
												<input type="email" name="email" id="email" required placeholder="Email Address" />
											</div>



											<div class="col-12-narrower">
												<input type="checkbox" id="copy" name="copy">
												<label for="copy">I accept all terms and conditions</label>
											</div>
											
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
												</ul>
											</div>
										</div>
									</form>

									<hr />


								</section>

						</div>
					</div>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>