
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
   <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="http://localhost/" >Local host</a></li>
			<li class="active"><a href="http://192.168.1.76/" target="_blank" >Pc14</a></li>
			
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>-->
          </ul>
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
		
		<!-- Tab 2018 -->
		<div role="tabpanel" class="tab-pane active" id="y2018">
		
		<?php echo $headTable; ?>
		 
		<?php for ($i = 0; $i <  count($set2018); $i++) {  ?>
			
		<tr>
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
			
		<tr>
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
			
		<tr>
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
			
		<tr>
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	<div class="clearfix" style="margin-top:500px;" ></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="col-xs-6"> <!--Left Column-->
		<!--out put panel-->
		<div class="row">
			<div class="col-xs-12">
		
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4>2016 - <strong>MONTHLY NEWSLETTER</strong> localhost output</h4>
					</div>
		
					<div class="panel-body">	
						
						<p>
							<a href="2016/october/index.php" target="_blank" >10 - October</a> <em>image link broke. Will fix later</em><br>
							<a href="2016/november/index.php" target="_blank">11 - November</a> <em>image link broke. Will fix later</em><br>
							<a href="2016/december-2016/index.php" target="_blank">12 - December</a><br>
							<a href="2016/december-2016/season-greetings.php" target="_blank">12 - December card</a><br>
						</p>
					</div>
				
				</div>
			</div>	
		<!--out put panel end-->
		
		

				
				<!--info monitor panel-->

			<div class="col-xs-12">
		
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4>2017 - <strong>MONTHLY NEWSLETTER</strong> localhost output</h4>
					</div>
		
					<div class="panel-body">	
						
						<p>
							<a href="2017/january/index.php" target="_blank" >01 - January</a><br>
							<a href="2017/february/index.php" target="_blank" >02 - February</a><br>
							<a href="2017/march/index.php" target="_blank" >03 - March</a><br>
							<a href="2017/april/index.php" target="_blank" >04 - April</a><br>
							<a href="2017/may/index.php" target="_blank" >05 - May</a><br>
							<a href="2017/june/index.php" target="_blank" >06 - June</a><br>
							<a href="2017/july/index.php" target="_blank">07 - July</a><br>
							<a href="2017/august/index.php" target="_blank" >08 - August</a><br>
							<a href="2017/october/index.php" target="_blank" >10 - October</a><br>
							<a href="2017/december/index.php" target="_blank"  >12 - December</a><br>
							<!-- 
							<a href="2017/december/index.php" target="_blank" style="color:red;" >12 - December</a><br>
							 -->
							
						</p>
						<p style="color:#CCC;">
						<small>*September 2017 start to send switch with 'is out now'</small>
						</p>
					</div>
				
				</div>
			</div>	
		<!--info monitor panel end-->
		
		
				
				<!--info monitor panel-->

			<div class="col-xs-12">
		
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4>2018 - <strong>MONTHLY NEWSLETTER</strong> localhost output</h4>
					</div>
		
					<div class="panel-body">	
						
						<p>
							<a style="color:#369;" >01 - January</a> - <a href="january/win007.php" target="_blank">WOP</a> | <a href="january/wte007.php" target="_blank" >WTE</a><br>
							<a href="february/index.php" target="_blank"  >02 - February</a><br>
							<!-- <a href="2017/february/index.php" target="_blank" >02 - February</a><br> -->
							<a style="color:#CCC;" >03 - March</a><br>
							<a style="color:#CCC;" >04 - April</a><br>
							<a style="color:#CCC;"  >05 - May</a><br>
							<a style="color:#CCC;"  >06 - June</a><br>
							<a style="color:#CCC;" >07 - July</a><br>
							<a style="color:#CCC;" >08 - August</a><br>
							<a style="color:#CCC;" >10 - October</a><br>
							<a style="color:#CCC;" >12 - December</a><br>
							<!-- 
							<a href="2017/december/index.php" target="_blank" style="color:red;" >12 - December</a><br>
							 -->
							
						</p>

					</div>
				
				</div>
			</div>	
		<!--info monitor panel end-->
		
		
		</div><!--Row end-->
		
	</div>	

		<div class="col-xs-6"> <!--Right Column-->
		<div class="row">
		
		
		<!--info monitor panel-->
			<div class="col-xs-12">
		
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4>OUTNOW / EDM newsletter</h4>
					</div>
		
					<div class="panel-body">	
						<p>
						<strong>2016</strong><br />
							<a href="2016/december-2016/win001.php" target="_blank" >12 - december - weekly window - win001</a><br>
							<a href="2016/december-2016/wte001.php" target="_blank" >12 - december - weekly where to eat - wte001</a> / <a href="december/wte001-bs.php">bootstrap</a>
							<hr>
							<strong>2017</strong><br />
							<a href="2017/march/win002.php" target="_blank" >03 - march - weekly window - win002</a><br>
							<a href="2017/march/wte002.php" target="_blank" >03 - march - weekly where to eat - wte002</a><br>
							<a href="2017/march/food-connection-2017.php" target="_blank" >03 - march - EDM: Food connection 2017</a> - <a href="october/krsr-edm.htm" target="_blank" >KRSR</a><br />
							
							<a href="2017/may/win003.php" target="_blank" >05 - may - outnow window - win003</a><br />
							<a href="2017/may/wte003.php" target="_blank" >05 - may - outnow where to eat - wte003</a><br />
							<a href="2017/june/cape-panwa-hotel-phuket-raceweek-2017.php" target="_blank" >06 - june - EDM: Cape Panwa Phuket Raceweek 2017</a><br />
							<a href="2017/july/win004.php" target="_blank"  >07 - July - outnow window - win004</a><br />
							<a href="2017/july/wte004.php" target="_blank"  >07 - July - outnow where to eat - wte004</a><br />
							<a href="2017/august/hsmai.php" target="_blank"  >EDM - HSMAI</a><br />
							<a href="2017/september/win005.php" target="_blank" >09 - September - outnow window - win005</a><br />
							<a href="2017/september/wte005.php" target="_blank"   >09 - September - outnow where to eat - wte005</a><br />
							<a href="2017/november/win006.php" target="_blank" >11 - November - outnow window - win006</a><br />
							<a href="2017/november/wte006.php" target="_blank" >11 - November - outnow where to eat - wte006</a><br />
							
							
							
							<a href="2017/december/kata-rocks-superyacht-rendezvous-2017.php" target="_blank"  >12 - December - EDM: KRSR 2017</a><br />
							<a href="2017/december/the-phuket-rendezvous.php"  target="_blank"  >12 - December - EDM: Phuket Rendezvous 2017</a><br />							
							<a href="2017/december/happy-new-year-2018.php"  target="_blank"  >12 - December - New Year greeting card 2018</a><br />
							
						<!--	
							<hr>
							
							
							<a style="color:#CCC;">01 - January - outnow window - win007</a><br />
							<a style="color:#CCC;">01 - January - outnow where to eat - wte007</a><br />
							
							 
							<a href="January/win007.php" target="_blank" style="color:red;">01 - January - outnow where to eat - win007</a><br />
							<a href="January/wte007.php" target="_blank" style="color:red;">01 - January - outnow where to eat - wte007</a><br />
							
							<a style="color:#CCC;">01 - January - outnow window - win007</a><br />
							<a style="color:#CCC;">01 - January - outnow where to eat - wte007</a><br />
		
							 -->
							<!-- 
							<a href="september/wte005.php" target="_blank" style="color:red;"  >08 - September - outnow where to eat - wte005</a><br />
							 -->
							<hr>
							<strong>2018</strong><br />
							<a href="february/tys-dedicated-edm.php" target="_blank" >02 - Fabruary - EDM - TYS2018</a><br>
							
							
						</p>
					</div>
				
				</div>
			</div>	
		<!--info monitor panel end-->
		
		
		
		
		
		
		</div>
		
		</div>
		
	</div>
	
	
<!---------------------->
	
		
		
		
		
		

		</div> <!-- Row End -->
	</div>
	
	



</body>
</html>
