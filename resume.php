<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>Resume form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Employee Feedback Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<style>
	#birthDate{
		 height: 50px;
		 width: 530px;
		 background-color:#212121; 
		 color: white;
		 border-color: #999999;
	}
	p1{
		font-size: 30px;
		color:#808000;
		font:bold;

	}
	#p12{
		color: white;
		font-size: 20px;
		
	}

</style>
</head>
<body>
<h1 class="header-w3ls">Resume form</h1>
<div class="content-w3ls">

	<div class="form-w3ls">
		<form action="#" method="post">
			<div class="content-wthree1">
				<div class="grid-agileits1">
					<div class="form-control"> 
						<label class="header">First Name <span>:</span></label>
						<input type="text" id="name" name="fname" placeholder="" title="Please enter your First Name" required="">
					</div>
					<div class="form-control"> 
						<label class="header">Last Name <span>:</span></label>
						<input type="text" id="name" name="lname" placeholder="" title="Please enter your Last Name" required="none">
					</div>
		
					<div class="form-control">	
						<label class="header">Address <span>:</span></label>
						<input type="text" id="email" name="add" placeholder="" title="Please enter a Valid Email Address" required="">
					</div>
					
					 <div class="form-control"> 
						<label class="header">Date of birth<span>&nbsp :&nbsp</span></label>
					 
                        <input type="date" id="birthDate" name="data" required="" title="Please enter date of birth" required="">
                   
					</div>
    
                   <!--
					<div class="form-control"> 
						<label class="header">Contact Number<span>:</span></label>
						<input type="text" id="name" name="orgn" placeholder="" title="Please enter your content number" required="">
					</div>
						<br>
					<div class="form-control">
					<label class="header">Qualificaton<span>:</span></label> 
						    <select required  id="birthDate" >
                      
                            <option value="">Select qualificaton</option>
                            <option value="graduation">graduation</option>
                            <option value="PG">pg</option>
                            <option value="PHD">phd</option>
                            </select>
					</div>
					 <div class="form-control"> 
						<label class="header"> Percentage <span>:</span></label>
						<input type="text" id="name" name="name" placeholder="" title="Please enter your Password" required="">
					</div>
					<div class="form-control"> 
						<label class="header">Experience <span>:</span></label>
						<input type="text" id="orgn" name="orgn" placeholder="" title="Please enter your Company id" required="">
					</div>


				</div>
				
				
			</div>

		   
		   <div class="form-control">
		    <label class="header">Your skills<span>:</span></label>
		   	</div>
		   	<br>
			<div class="form-control">	
				<input type="checkbox" name="vehicle" value="Bike"> <p1>C</p1>&nbsp&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>C++</p1>&nbsp&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Java</p1>&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Mysql</p1>&nbsp&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Php</p1>&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Html</p1><br>
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Python</p1>
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Css</p1>&nbsp&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Ruby</p1>&nbsp&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>Js</p1>&nbsp&nbsp
				<input type="checkbox" name="vehicle" value="Bike"> <p1>jQuery</p1>
				
			</div>	
				<div class="content-wthree2">
				<div class="grid-w3layouts1">
					<div class="w3-agile1">
						<label class="rating">Please Specify Gender<span>:</span></label>
						<ul>
							<li>
								<input type="radio" id="a-option" name="selector1" required="">
								<label for="a-option">Male</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="selector1" required="">
								<label for="b-option">Female</label>
								<div class="check"><div class="inside"></div></div>
							</li>
							
							
						</ul>
					</div>	
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="content-wthree3">
			<label class="header">upload Your Photo<span>:</span></label>
			<input type="file" name="file" title="select  your Photo" id="p12" required="">
			</div>
			-->
			<div class="content-wthree3">

			</div>

			<div class="content-wthree4">	
				<div class="form-control">
					<input type="submit" class="register" value="Submit" name="submit">
					<input type="reset" class="reset" value="Reset">
					<div class="clear"></div>
				</div>
			</div>		
		</form>
	</div>
</div>

<p class="copyright">resume page <a href="resume.html" >top</a></p>

</body>
</html>

<?php
 include("connection.php");
  if(isset($_POST['submit']))
  {
  	$name=$_POST['fname'];
  	$add=$_POST['add'];
  	$data=$_POST['data'];
 
    $sql="update man set name='$name',address='$add',date='$data' where id='1'";
   	//$sql="insert into man(name,address,date)values('$name','$add','$data')";
  	 if($conn->query($sql))
  	 {
  	 	echo"inserted successfully ";
  	 }
  	 else
  	 	echo" something problem while inseting";
  }
?>