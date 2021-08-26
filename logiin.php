<?php


if(isset($_POST['sub']))
{
	$con=mysqli_connect("localhost","root","","demo");
	if($con)
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		$q=mysqli_query($con,"select * from loginform where uname='$username' and password='$password'");
		if(mysqli_num_rows($q)>=0)
		{
			header("Location:navbar.html");
		}
		else
		{
			echo"<p>usernmae password dont match</p>";
		}
	}
}
?>
<!DOCTYPE html>
<head>
</head>
<style>

.login{
        width: 100%;
        height: 690px;
    background:#3486db;
    
    opacity: 0.9;
    position: relative;
}

.box{
    width: 400px;
    height: 300px;
    position: absolute;
    background: black;
    margin-top: 350px;
    margin-left: 750px;
    color: blanchedalmond;
    text-align: center;
    transform: translate(-50%,-50%);
   
}

    .box h1{
        text-transform: uppercase;
        font-weight: 500;


}

.box input[type ="text"],.box input[type ="password"]{
    border: 0;
    display: block;
    text-align: center;
    margin: 10px auto;
    border: 3px solid #3486db;
    padding: 8px 4px;
    width: 200px;
    outline: none;
    background: none;
    border-radius: 20px;
    transition: 0.25s;
    color: seashell;
}


.box input[type ="text"]:focus,.box input[type ="password"]:focus{
    width: 280px;
    border-color: #2ecc71;
}

.box input[type ="submit"]{

    border: 0;
    display: block;
    text-align: center;
    margin: 10px auto;
    border: 3px solid #3486db;
    padding: 6px 3px;
    width: 100px;
    outline: none;
    background: none;
    border-radius: 20px;
    transition: 0.25s;
    color: seashell;
    cursor: pointer;
}

.box input[type ="submit"]:hover{
    background: #2ecc71;

}

.sign{
    width: 100%;
    height: 690px;
    background-color: coral;
    display: flex;
    align-items: center;
    justify-content: center;
    background:linear-gradient(135deg,#71b7e6,#9b59b6)
}
</style>
<body>
    <div class="login" >
    <form class="box" action="./navbar.html" method="POST">

        <h1>LOGIN</h1>
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="sub"  value="login">
    </form>
</div>
</body>
</html>