
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Localhost Newsletter index</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Bootstrap core CSS + Jquery-->
    <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap3/jquery/jquery-1.9.1.min.js"></script>	
	<script src="bootstrap3/js/bootstrap.min.js"></script>
	

	
	<style>
	body {
		padding-top: 50px;
	}
	.starter-template {
		padding: 40px 15px;
		text-align: center;
	}
	
	.not-active {
		pointer-events: none;
		cursor: default;
	}
	
	
	.btnc1 { background-color:#FFF200; font-size:1em; color:#AAA;}
	.btnc2 { background-color:#FDB813; font-size:1em;}
	.btnc3 { background-color:#F7941E; font-size:1em;}
	.btnc4 { background-color:#F15922; font-size:1em;}
	.btnc5 { background-color:#ED1C24;font-size:1em;}
	.btnc6 { background-color:#EC008C; font-size:1em;}
	.btnc7 { background-color:#86346C; font-size:1em;}
	.btnc8 { background-color:#0C4DA2; font-size:1em;}
	.btnc9 { background-color:#00AEEF; font-size:1em;}
	.btnc10 { background-color:#8DD8F8; font-size:1em;}
	.btnc11 { background-color:#00A651; font-size:1em;}
	.btnc12 { background-color:#A6CE39; font-size:1em;}
	
	.panel-body li {
	 margin-bottom:5px;
	}
	
	.activ {
	background-color:#337ab7;
	color:#FFFFFF;
	}
	
	</style>
	

	
	
	
</head>

<body>

<?php 

include "define-array-newsletter.php"; 

?>



    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          </button>
          <a class="navbar-brand" style="color:white;">IMAGE asia newsletter list</a>
        </div>

		<!--/.nav-collapse -->
      </div>
    </nav>


<!---------------------->
		
<!-- Newsletter panel -->

	
	<div class="container" style="margin-top:20px;">
	
	<div class="row">
	
	

	
	<div class="col-xs-12" >
	<div class="row">
	
	
	<div class="col-xs-12"> <!-- A1 -->
	

	<?php 
		$mont=array('','January','February','March','April','May','June','July','August','September','October','November','December');
		$newsType=array('','IA newsletter','EDM','Greeting card');
		$newsBy=array('','PHPList','Mailchimp');
	
	
	
		$headTable='
		<table class="table table-bordered table-hover" style="margin-top:25px;" >'."\r\n\r\n".
		'<thead>'."\r\n".
		'<tr>'."\r\n".
			'<th style="width:100px; text-align:center;" >month</th>'."\r\n".
			'<th>name</th>'."\r\n".
			'<th  style="width:100px; text-align:center;" >action</th>'."\r\n".
			'<th  style="width:120px; text-align:center;" >type</th>'."\r\n".
			'<th  style="width:100px; text-align:center;">powered by</th>'."\r\n".
		'</tr>'."\r\n".
		'</thead>'."\r\n".
		'<tbody>'
		;
	

	?>
	
	
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#y2018" aria-controls="home" role="tab" data-toggle="tab">2018</a></li>
			<li role="presentation"><a href="#y2017" aria-controls="profile" role="tab" data-toggle="tab">2017</a></li>
			<li role="presentation"><a href="#y2016" aria-controls="messages" role="tab" data-toggle="tab">2016</a></li>
			<li role="presentation"><a href="#y2015" aria-controls="messages" role="tab" data-toggle="tab">2015</a></li>
		</ul>

		<!-- Tab panels -->
		<div class="tab-content">
		
		<div class="row" style="margin-top:30px; margin-bottom:30px;" >
			<div class="col-xs-12" >
				Type filter: 
				<button id="def"  type="button" class="btn btn-default">Show all</button>
				<button id="ian" type="button" class="btn btn-default">IA newsletter</button>
				<button id="edm" type="button" class="btn btn-default">EDM</button>
				<button id="oth" type="button" class="btn btn-default">Others</button>
		
			</div>	
		</div>	
		
		
		
		<!-- Tab 2018 -->
		<div role="tabpanel" class="tab-pane active" id="y2018">
		
		<?php echo $headTable; ?>
		 
		<?php for ($i = 0; $i <  count($set2018); $i++) {  ?>
		
		<?php 
			switch ($set2018[$i][3]) {

			case 1:
			$classFilter='ian';
			break;

			case 2:
			$classFilter='edm';
			break;

			case 3:
			$classFilter='oth';
			break;

			}
		 ?>

		<tr class="<?php echo $classFilter; ?>" >
			<td style="text-align:left; padding-top:10px;" >
				<span class="label label-default btnc<?php echo $set2018[$i][0]; ?>"><?php echo $mont[$set2018[$i][0]]; ?></span>
			</td>
			<td>
				<?php echo $set2018[$i][1]; ?>
			</td>
			<td>
				<a href="<?php echo $set2018[$i][2]; ?>" target="_blank" >See online</a>
			</td>
			<td>
			<?php echo $newsType[$set2018[$i][3]]; ?>
			</td>
			<td>
			<?php echo $newsBy[$set2018[$i][4]]; ?>
			</td>
		</tr>

		<?php } ?>
		
		</tbody>
		</table>
		
		</div> <!-- End Tab 2018 -->
		
		<!-- Tab 2017 -->
		<div role="tabpanel" class="tab-pane" id="y2017">
		
		<?php echo $headTable; ?>
		 
		<?php for ($i = 0; $i <  count($set2017); $i++) {  ?>
			
		<?php 
			switch ($set2017[$i][3]) {

			case 1:
			$classFilter='ian';
			break;

			case 2:
			$classFilter='edm';
			break;

			case 3:
			$classFilter='oth';
			break;

			}
		 ?>
			
		<tr class="<?php echo $classFilter; ?>" >
			<td style="text-align:left; padding-top:10px;" >
				<span class="label label-default btnc<?php echo $set2017[$i][0]; ?>"><?php echo $mont[$set2017[$i][0]]; ?></span>
			</td>
			<td>
				<?php echo $set2017[$i][1]; ?>
			</td>
			<td>
				<a href="<?php echo $set2017[$i][2]; ?>" target="_blank" >See online</a>
			</td>
			<td>
			<?php echo $newsType[$set2017[$i][3]]; ?>
			</td>
			<td>
			<?php echo $newsBy[$set2017[$i][4]]; ?>
			</td>
		</tr>

		<?php } ?>
		
		</tbody>
		</table>

		
		
		</div> <!-- End Tab 2017 -->
		
		<!-- Tab 2016 -->
		<div role="tabpanel" class="tab-pane" id="y2016">
		
		<?php echo $headTable; ?>
		
		 
		<?php for ($i = 0; $i <  count($set2016); $i++) {  ?>
			
					<?php 
			switch ($set2016[$i][3]) {

			case 1:
			$classFilter='ian';
			break;

			case 2:
			$classFilter='edm';
			break;

			case 3:
			$classFilter='oth';
			break;

			}
		 ?>
			
		<tr class="<?php echo $classFilter; ?>" >
			<td style="text-align:left; padding-top:10px;" >
				<span class="label label-default btnc<?php echo $set2016[$i][0]; ?>"><?php echo $mont[$set2016[$i][0]]; ?></span>
			</td>
			<td>
				<?php echo $set2016[$i][1]; ?>
			</td>
			<td>
				<a href="<?php echo $set2016[$i][2]; ?>" target="_blank" >See online</a>
			</td>
			<td>
			<?php echo $newsType[$set2016[$i][3]]; ?>
			</td>
			<td>
			<?php echo $newsBy[$set2016[$i][4]]; ?>
			</td>
		</tr>

		<?php } ?>
		
		</tbody>
		</table>
		
		</div><!-- End Tab 2016 -->
		
		
		<!-- Tab 2015 -->
		<div role="tabpanel" class="tab-pane" id="y2015">
		
		<?php echo $headTable; ?>
		 		 
		<?php for ($i = 0; $i <  count($set2015); $i++) {  ?>
			
					<?php 
			switch ($set2015[$i][3]) {

			case 1:
			$classFilter='ian';
			break;

			case 2:
			$classFilter='edm';
			break;

			case 3:
			$classFilter='oth';
			break;

			}
		 ?>
			
		<tr class="<?php echo $classFilter; ?>" >
			<td style="text-align:left; padding-top:10px;" >
				<span class="label label-default btnc<?php echo $set2015[$i][0]; ?>"><?php echo $mont[$set2015[$i][0]]; ?></span>
			</td>
			<td>
				<?php echo $set2015[$i][1]; ?>
			</td>
			<td>
				<a href="<?php echo $set2015[$i][2]; ?>" target="_blank" >See online</a>
			</td>
			<td>
			<?php echo $newsType[$set2015[$i][3]]; ?>
			</td>
			<td>
			<?php echo $newsBy[$set2015[$i][4]]; ?>
			</td>
		</tr>

		<?php } ?>
		
		</tbody>
		</table>
		
		
		</div><!-- End Tab 2015 -->
		
		
		
    
		</div> <!-- End Tab panels  -->

	</div> <!--  End col-xs-12  A1-->
	
	
	
	
	<div class="clearfix mb-20" ></div>
	
	
<script>
	$(document).ready(function() {
		
		$("#def").addClass("activ");
		
		$("#def").click(function () {
		
			//console.log("default! clicked");
			
			$(".ian").removeClass("hide");
			$(".edm").removeClass("hide");
			$(".oth").removeClass("hide");
			
			$("#ian").removeClass("activ");
			$("#edm").removeClass("activ");
			$("#oth").removeClass("activ");
			$("#def").addClass("activ");
			
		});

		$("#ian").click(function () {
		
			//console.log("IA clicked");
			$(".ian").removeClass("hide");
			$(".edm").addClass("hide");
			$(".oth").addClass("hide");
			
			$("#ian").addClass("activ");
			$("#edm").removeClass("activ");
			$("#oth").removeClass("activ");			
			$("#def").removeClass("activ");
			
			
		});
		
		$("#edm").click(function () {
		
			//console.log("EDM clicked");
			$(".ian").addClass("hide");
			$(".edm").removeClass("hide");
			$(".oth").addClass("hide");
			
			$("#ian").removeClass("activ");
			$("#edm").addClass("activ");
			$("#oth").removeClass("activ");			
			$("#def").removeClass("activ");
			
		});
		
		$("#oth").click(function () {
		
			//console.log("Others! clicked");
			$(".ian").addClass("hide");
			$(".edm").addClass("hide");
			$(".oth").removeClass("hide");

			$("#ian").removeClass("activ");
			$("#edm").removeClass("activ");
			$("#oth").addClass("activ");			
			$("#def").removeClass("activ");
			
		});

	});
</script>

</body>
</html>
