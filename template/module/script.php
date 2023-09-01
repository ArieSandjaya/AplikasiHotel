<script src="./bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="./bower_components/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="./bower_components/fastclick/lib/fastclick.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js" type="text/javascript"></script>
<!-- Plug-in Script -->
<script src="./bower_components/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="./bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<!--Customize Script -->
<script type="text/javascript">
	$(function(){
		$('.nama-tamu').select2();
		$('#checkin').datepicker();
        $('#checkout').datepicker();
	});

	var path = location.pathname;
	
	$('.li-menu').filter(function(){
		console.log($('a', this).attr('href'));
		return '/' + $('a', this).attr('href') === path;
	}).addClass('active');
</script>