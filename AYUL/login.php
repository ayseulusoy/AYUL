<?php  
session_start(); 
  
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.container {
  padding: 16px;
}


.signinbtn{
	padding:14px 20px;
	background-color:#2DE50A;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signinbtn {
  float: left;
  width: 50%;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signinbtn {
     width: 100%;
  }

}
</style>
</head>
<body>


<form  method="post"action="<?php $_PHP_SELF?>">

  <div class="container" >
    <label for="name"><b>Email</b></label>
    <input type="text" placeholder="Email.." name="email" id="email" required>
<br>
    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Şifre.." name="psw" id="psw" required>    
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button  class="cancelbtn" onclick="window.location.href='main.php'">İptal</button>
    <button  class="signinbtn" id="submit1" name="submit1">Giriş Yap</button>
  </div>
</form>

</body>
</html>

<?php
	
	
 
	$connection=mysqli_connect("localhost","root","","uyekaydi");
	if($connection){
		
		if(isset($_POST['submit1'])){
			
			$email=$_POST['email'];
			$sifre=$_POST['psw'];
			$sql1=mysqli_query($connection,"select * from uye where email='$email' and sifre='$sifre'");
			if(mysqli_num_rows($sql1)<1)
				{
					echo'yeniden deneyiniz';
				}
			else
				{
					$_SESSION["email"]=$email;
				}
		}
			if (isset($_SESSION["email"]))
			{
				echo "<h1 align=center>Hoşgeldiniz!</h1>";
				echo "<script>window.open('welcome.php','_self')</script>";  
				
			}
			
	
		
	}
	else
	{
		echo "Connection Failed";
	}
	
	
?>	