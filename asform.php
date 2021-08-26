<html>
<head>
</head>
<style>
*{
margin:0;
padding:0;
}
body 
{
	background:skyblue;
	font-family:sans-serif;
}
h1{
	text-align:center;
	font-weight:auto;
	color:black;
	padding-bottom:20px;
	
}
.form-wrap{
	width:500px;
	height:450px;
	background:aqua;
	margin-left:550px;
	margin-top:150px;
	box-sizing:border-box;
	position:fixed;
	padding:40px 20px;
	tranform:translate(-50%,-50%);
}
input{
	width:100%;
	background:none;
	border: 1px solid red;
	padding: 6px 20px;
	margin-bottom:20px;
	box-sizing:border-box;
	font-size:16px;
	border-radius:15px;
}
	
	input[type="submit"]{
		width:50%;
		margin-left:100px;
		
		cursor:pointer;
	}
	input[type="submit"]:hover{background:yellow;
	transition:-1s;
	}
	
	
		
		
	
</style>
<body>
<div class="form-wrap">
<form method="POST">
<h1>Add details here</h1>
Employee Id:<input type="text" name="eid" placeholder="Enter your id here"><br>
Employee Name:<input type="text" name="ename" placeholder="Enter your name here"><br>
Employee Location:<input type="text" name="eloc" placeholder="Enter your location here"><br>
Employee Salary:<input type="text" name="esal" placeholder="Enter your salary here"><br>
<input type="submit" name="sub" value="submit">

</form>

<?php
if(isset($_POST['sub']))
{
$con=mysqli_connect("localhost","root","","samru");
if($con)
{
if($_POST['sub']=="submit")
		{
		$eid=$_POST['eid'];
			$ename=$_POST['ename'];
				$eloc=$_POST['eloc'];
					$esal=$_POST['esal'];
					$q=mysqli_query($con,"insert into information values('$eid','$ename','$eloc','$esal')");
					if($q)
					{
						echo"record submitted...";
					}
		}
else
{
	echo mysqli_error($con);
}

}
}
?>
</div>
</body>
</html>