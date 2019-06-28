<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<title>CEK RESI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../../css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
<script src="../../js/bootstrap.min.js"></script>
 



<script type="text/javascript">
$(document).ready(function() {
	$('#loading').ajaxStart(function(){
			$(this).show();
		}).ajaxStop(function(){
			$(this).hide();
		});




	
});
</script>






<script type="text/javascript">
$(document).ready(function() {
	$('#loading').ajaxStart(function(){
			$(this).show();
		}).ajaxStop(function(){
			$(this).hide();
		});







$("#cek").on('click', function(){

	
	$("#iloading").show();
				
	$("#formku2").submit(function(){
		
		$.ajax({
			url: "i_tracking.php",
			type:"POST",
			data:$(this).serialize(),
			success:function(data){			
				$("#ihasil").html(data);
				$("#iloading").hide();
				}
			});
		return false;
	});

});	





$("#iloading").hide();


});

</script>

      
      
</head>
<body>


<div class="container mt-3">

<h1 class="font-weight-light">LACAK RESI</h1>
<hr>

<form class="search" method="POST" name="formku2" id="formku2">
<input class="search-input form-control m-1" type="search" name="resi" id="resi" placeholder="Nomor Resi..." value="" autofocus="" required="required">
<div class="row">
	<div class="col-md-3 m-1">

		<select name="jasa" id="jasa" class="search-select form-control" required>
			<option value="jne">JNE</option>
			<option value="pos">POS</option>
			<option value="tiki">TIKI</option>
			
		</select>
	</div>

	<div class="col-md-3 m-1">
		<button class="search-submit btn btn-primary" type="submit" name="cek" id="cek">Cek Resi</button>
	</div>
</div>
</form>
				


<div id="iloading">
	<img src="progress-bar.gif" width="100" height="16">loading...
</div>


</div>

<div>

<div style='font-size:10px;' id="ihasil"></div>

</div>

</body>
</html>
