<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Yearbook</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Generic page styles -->
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	
	</style>
</head>
<body>

<div class = "container">
 	<div style="float:right;position:relative;top:20px;">
 	<form class="form-inline" method="post" role="form">
		  <div class="form-group">
		   
		    <input type="email" class="form-control" id="email1" name="email1" placeholder="Enter Your Email" />
		  </div>
		  <div class="form-group">
		    
		    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Your Password" /> 
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
	</form>
	</div>
	<div class="jumbotron">
	<h1 style="text-align:center" >Welcome to Yearbook 2015 </h1>
	</div>	
	<div class="row">
		<h2 style="text-align:center" >Register to Yearbook 2015 </h2><br/><br/>
		<?php 
		$this->load->helper('form');
		$formatt = array('class' =>'form-horizontal',
						 'method' =>'post',
						 'role'=>'form',
						 );
		echo form_open('welcome/member_area',$formatt);
		?>
		<div class="form-group">
			<label class="control-label col-sm-2" for="roll">Roll No.</label>
			<div class="col-sm-5">
				<?php
				$froll = array('name' => 'roll' ,
								'class' => 'form-control',
								'placeholder' => 'Enter Your Name' );
				echo form_input($froll);
				?>
			</div>
			
		</div>	
		<div class="form-group">
			<label class="control-label col-sm-2" for="dep">Department</label>
			<div class="col-sm-5">
				<?php
				$fdep = array('name' => 'dep' ,
								'class' => 'form-control',
								'placeholder' => 'Enter Your Department' );
				echo form_input($fdep);
				?>
			</div>
		
		</div>	
		<div class="form-group">
			<label class="control-label col-sm-2" for="dob">Date-of-Birth</label>
			<div class="col-sm-5">
				<?php
				$fdob = array('name' => 'dob' ,
								'class' => 'form-control',
								'placeholder' => 'Enter Your Date of Birth' );
				echo form_input($fdob);
				?>
			</div>
			
			</div>	
		<div class="form-group">
			<label class="control-label col-sm-2" for="perf">Email ID</label>
			<div class="col-sm-5">
				<?php
				$fid = array('name' => 'eid' ,
								'class' => 'form-control',
								'placeholder' => 'Enter Your Email ID',
								'type' => 'email' );
				echo form_input($fid);
				?>
			</div>
		
		</div>	
		<div class="form-group">
			<label class="control-label col-sm-2" for="pass">Password</label>
			<div class="col-sm-5">
				<?php
				$fpas = array('name' => 'pas' ,
								'class' => 'form-control',
								'placeholder' => 'Enter Preferred Password' );
				echo form_password($fpas);
				?>
			</div>
		
		</div>	
		<div class="form-group">
			<label class="control-label col-sm-2" ></label>
			<div class="col-sm-5">
				<?php
				echo form_submit('sub','Submit');
				?>
			</div>
		
		</div>
		<!--<form action="/member_area.php" class="form-horizontal" role="form" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="roll">Roll No.</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="roll" name="roll" placeholder="Enter Your Roll" />
				</div>
			
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="dep">Department</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="dep" name="dep" placeholder="Your Department" />
				</div>
			
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="dob">Date-of-Birth</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="dob" name="dob" placeholder="Enter Your Date Of Birth" />
				</div>
			
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="perf">Email ID</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pref" name="pref" placeholder="Enter Your Prefferd Email Id" />
				</div>
			
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="pass">Password</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pass" name="pass" placeholder="Enter Your Prefferd Password" />
				</div>
			
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" ></label>
				<div class="col-sm-5">
					<button class="btn btn-success">Submit</button>
				</div>
			-->
			</div>	
		</form>	
	</div>
	
</div>

</body>
</html>
