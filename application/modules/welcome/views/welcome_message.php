<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/apx/css/bootstrap.min.css">

	<meta charset="utf-8">
	<title>SORTABLE UI</title>
</head>
<body>

<div class="container" style="margin-top: 100px;">

	<div id="row">

	<div class="col-md-12">
			<?php echo $this->session->flashdata('success'); ?>
			<input type="text" name="new_sort" id="new_sort" style="display: none;	" />
		<ul id="sortable-row" style="list-style: none; ">
		<?php $ix=1; foreach($list as $l): ?>

			<li id="<?php echo $l['id']; ?>"><div class="well"><strong><?php  echo $l['letter']; ?></strong></div></li>
		<?php endforeach; ?>
		</ul>
		<button class="btn btn-primary btn-sm" id="save"> Save Sort</button>
	</div>

		 
	</div>

</div>
<script type="text/javascript" src="http://localhost/ossn/vendors/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://localhost/ossn/vendors/jquery/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
    $( "#sortable-row" ).sortable({
	placeholder: "ui-state-highlight"
	});



	$('#prompt').fadeOut(10000);
	$('#save').click(function(){


		var newArrangement = new Array();
		var newVal;


	
		$('ul#sortable-row li').each(function() {
		
			newArrangement.push($(this).attr("id"));

			$('#new_sort').val(newArrangement);


		});

		$.ajax({

				url: "<?php echo base_url('welcome/save_order'); ?>",
				type: "POST",
				data:{
					newsort: $('#new_sort').val()
				},
				success:function(result){
					window.location = "<?php echo base_url(); ?>";
				}
		});

	});

  });
</script>
</body>
</html>