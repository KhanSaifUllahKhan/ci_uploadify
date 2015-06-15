<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/navigation.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uploadify.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uploadify.js"></script>
<script src="<?php echo base_url();?>assets/js/ie-emulation-modes-warning.js"></script>
<script type="text/javascript" charset="utf-8">
$(function(){
	$('audio.audioP').hide();   
$( "button.first" ).click(function() {
    //alert(33);
    $(this).next().slideToggle(50);
});

});

	// function toggleFn(listen)
	// {
		// alert(listen);
	// }
// 	
	// $(function(){
   // $("#listenbtn").click(function(){
    // $("#audio").toggle();
// });
// });
</script>
<footer>
<div class="container-fluid" style="height: 45px; background-color: lightgrey; padding-top: 13px; font-family: sans-serif; font-size: 15px ; color: #888888">
	<div class="col-lg-4 col-md-5 col-sm-6 col-xs-6">
		<span style="float: left">
			CI Project &copy; All Rights Reserved.
		</span>
	</div>
	<div class="col-lg-4 col-md-2 hidden-sm hidden-xs"></div>
	<div class="col-lg-4 col-md-5 col-sm-6 col-xs-6">
		<span style="float: right">
			Privacy Policy | About | Help
		</span>
	</div>
</div>
</footer>