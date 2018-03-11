<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-15T23:22:19+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T08:57:41+01:00

require_once 'lib/Admin.php';
?>

<div class="main-panel">
<?php

	$admin = new Admin();
	$admin->load_content();

	?>

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

<script type="text/javascript">
$(document).ready(function(){

	demo.initChartist();

	$.notify({
		icon: 'pe-7s-smile',
		message: "Bienvenue."

	},{
		type: 'success',
		timer: 4000
	});

});
</script>

</html>
