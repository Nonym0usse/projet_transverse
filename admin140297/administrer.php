<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-15T23:22:19+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-02-18T18:52:38+01:00
require_once 'navbar.php';
?>
<div class="main-panel">
	<?php  require_once 'navbar-haut.php' ?>

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Light Bootstrap Table Heading</h4>
							<p class="category">Created using Roboto Font Family</p>
						</div>
						<div class="content">

							<div class="typo-line">
								<h1><p class="category">Header 1</p>Light Bootstrap Table Heading </h1>
							</div>

							<div class="typo-line">
								<h2><p class="category">Header 2</p>Light Bootstrap Table Heading</h2>
							</div>
							<div class="typo-line">
								<h3><p class="category">Header 3</p>Light Bootstrap Table Heading</h3>
							</div>
							<div class="typo-line">
								<h4><p class="category">Header 4</p>Light Bootstrap Table Heading</h4>
							</div>
							<div class="typo-line">
								<h5><p class="category">Header 5</p>Light Bootstrap Table Heading</h5>
							</div>
							<div class="typo-line">
								<h6><p class="category">Header 6</p>Light Bootstrap Table Heading</h6>
							</div>
							<div class="typo-line">
								<p><span class="category">Paragraph</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
							</div>
							<div class="typo-line">
								<p class="category">Quote</p>
								<blockquote>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
									</p>
									<small>
										Steve Jobs, CEO Apple
									</small>
								</blockquote>
							</div>

							<div class="typo-line">
								<p class="category">Muted Text</p>
								<p class="text-muted">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
								</p>
							</div>
							<div class="typo-line">
								<!--
								there are also "text-info", "text-success", "text-warning", "text-danger" clases for the text
							-->
							<p class="category">Coloured Text</p>
							<p class="text-primary">
								Text Primary - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
							</p>
							<p class="text-info">
								Text Info - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
							</p>
							<p class="text-success">
								Text Success - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
							</p>
							<p class="text-warning">
								Text Warning - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
							</p>
							<p class="text-danger">
								Text Danger - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
							</p>
						</div>

						<div class="typo-line">
							<h2><p class="category">Small Tag</p>Header with small subtitle <br><small>".small" is a tag for the headers</small> </h2>
						</div>


					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php
	require_once 'footer.php';
 ?>
</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
