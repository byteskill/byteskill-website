	<!-- Scripts for all pages -->
	<script type="text/javascript" src="assets/js/master.js"></script>
	<script type="text/javascript" src="assets/js/navbar.js"></script>
	<!-- Autoloaded scripts -->
	<?php
	foreach($__js as &$js)
	{
		echo '<script type="text/javascript" src="'.$js.'"></script>';
	}
	?>
	</body>
</html>