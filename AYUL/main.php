<!DOCTYPE html>
<html>
<head>
<style>
.brand{
  border: 5px outset red;
  padding: 60px;
  text-align: center;
  background: #FDB805;
  color: white;
  font-size: 30px;
   
}
.brand a:link {
  font-size: 100px;
  background-color: transparent;
  text-decoration: none;
}
.brand a:hover {
  color: #4904A0;
  background-color: transparent;
  text-decoration: none;
}
.topnav {
  overflow: hidden;
  border: 5px outset red;
  background-color: #C0C3BF;    
  text-align: center;
  margin-bottom: 10px;
  margin: 0px auto;
}

.topnav a {
  float: right;
  display:inline;
  text-align: center;
  padding:10px 10px;
  text-decoration: none;
  font-size: 17px;
  background: #ffab06;  
  border: 2px outset #ffab06;
  color: #ffffff; 
  font-weight: bold;
}

.topnav a:hover {
  background-color: #FDB805;
  color: black;
}

.topnav .search{
  float: center;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 5px;
  font-size: 17px;
  border: none;
}

.topnav .search button {
  float: center-right;
  padding: 6px 10px;
  margin-top: 15px;
  margin-right: 30px;
  font-size: 17px;
  border: none;
  cursor: pointer;
  background: #ffab06;  
  border: 2px outset #ffab06;
  color: #ffffff; 
  font-weight: bold;
}

.topnav .search button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid red;  
  }
}
/*Signup*/
input[type=text], input[type=password] {
 
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #C0C3BF;
  padding-top: 50px;
}

.modal-content signup{
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
table, th, td {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  padding: 5px;
  padding-top: 10px; 
  width: 50%;
  margin-bottom: 20px;
}
th {
  background-color: #4CAF50;
  color: white;
}
 
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}



.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.signupbtn{
	padding:14px 20px;
	background-color:#2DE50A;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn{
     width: 100%;
  }

}

.navbar {
  
  border: 5px outset red;
  background-color: #C0C3BF;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 10px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 20%; 
  text-align: center;
}

.navbar a:hover {
  background-color: red;
}


.middlecontainer{
  border: 5px outset red;
  background-color: #C0C3BF;    
  text-align: center;
  padding:100px;
  margin-bottom: 10px;
  margin: 0px auto;
  height:500px;

  position: relative;
}
/*ileri-geri*/
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/*fotosayısı*/

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}
/*animasyon */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.footercontainer{
  border: 5px outset red;
  background-color: #C0C3BF;    
  text-align: center;
  padding:100px;
  margin-bottom: 10px;
  margin: 0px auto;
  height:90px;
}
.footercontainer a:link {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
.footercontainer a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>
<body>
<div class="brand">
	<h1 ><b><a href="main.php" style="color:#4904A0;" >AYUL</a></b></h1>
	<h5 >Sizin Tercihiniz</h5>
</div>
<div class="topnav">
	<a style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' onclick="window.location.href='order.php'">Sepet</a>
	<a style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' onclick="document.getElementById('signup').style.display='block'">Üye Ol</a>
	<a style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; '  onclick="window.location.href='login.php'">Giriş Yap</a>
	</div>
	<div style="border: 5px outset red; background-color: #C0C3BF;  text-align: center;">
	<div class="search">
	 <form method="post">
	  <input style='border: 2px outset #ffab06; width:700px;  ' type="text" id="search" name="search"></input>
	  <button style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' type="submit" name="ara" id="ara">Ara</button>
	 </form>
	</div>
	</div>

	<div id="signup" class="modal">
	<span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
	<form class="modal-content signup"  method="post" action="<?php $_PHP_SELF?>" >
    <div class="container">
      <h1>Üye Ol</h1>
		<hr>
		<table style="width:100%">
		 <tr>
		<td><label for="name"><b>Ad</b></label></td>
		<td><input type="text" placeholder="Kullanıcı Adı " name="name" id="name"required></td>
		  </tr>
		<br>
		 <tr>
		<td><label for="name"><b>Soyad</b></label></td>
		<td><input type="text" placeholder="Kullanıcı Soyadı" name="lname" id="lname" required></td>
		  </tr>
		<br>
		 <tr>
		<td><label for="email"><b>Email</b></label></td>
		<td><input type="text" placeholder="Email" name="email" id="email" required></td>
		  </tr>
		<br>
		 <tr>
		<td><label for="psw"><b>Şifre</b></label></td>
		<td><input type="password" placeholder="Şifre" name="psw" id="psw" required></td>
		  </tr>
		<br>
		</table>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">İptal</button>
        <button  class="signupbtn" id="submit2" name="submit2">Üye Ol</button>
      </div>
    </div>
	</form>
	</div>

</div>
<div class="navbar">
  	 <a href="main.php"><b>Anasayfa</b></a>
  	 <a href="woman.php"><b>Kadın</b></a>
  	 <a href="man.php"><b>Erkek</b></a>
  	 <a href="child.php"><b>Çocuk</b></a>
	
</div>
<div class="middlecontainer">
	<div class="mySlides fade">
	<a href="woman.php" target="_blank">
	<img name="gomlek" id="gomlek" src="kadin_gomlek.jpg" width="300px" height="400px">
	<br>
	<p><b>Fiyat:150TL</b></p>
	</div>
	<div class="mySlides fade">
	<a href="child.php" target="_blank">
	<img name="elbise" id="elbise" src="cocuk_elbise.jpg" width="300px" height="400px" >
	<br>
	<p><b>Fiyat:120TL</b></p>
	</div>
	<div class="mySlides fade">
	<a href="child.php" target="_blank">
	<img name="takim" id="takim" src="cocuk_takim.jpg" width="300px" height="400px">
	<br>
	<p><b>Fiyat:120TL</b></p>
	</div>
	<div class="mySlides fade">
	<a href="man.php" target="_blank">
	<img name="pantolon" id="pantolon" src="erkek_pantolon.jpg" width="300px" height="400px">
	<br>
	<p><b>Fiyat:100TL</b></p>
	</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
	<span class="dot" onclick="currentSlide(4)"></span> 
</div>
</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<div class="footercontainer">
	<div id="about" >
	 <a  href="about.php"><b>Hakkımızda</b></a>
	</div>
	<br>
	<div id="questions" >
	 <a href="questions.php"><b>Sıkça Sorulan Sorular</b></a>
	</div>
	<br>
	<div id="complain">
	 <a  href="complain.php"><b>Şikayet Et</b></a>
	</div>
	<br>
	<div id="contact" >
	 <a href="contact.php"><b>İletişim</b></a>
	</div>	
</div>
<script>
var signup = document.getElementById('signup');

window.onclick = function(event) {
  if (event.target == signup) {
    singup.style.display = "none";
  }
}

</script>


</body>
</html>
<?php
	
	
 
	$connection=mysqli_connect("localhost","root","","uyekaydi");
	if($connection){
		if(isset($_POST['submit2'])){
			$ad=$_POST['name'];
			$soyad=$_POST['lname'];
			$email=$_POST['email'];
			$sifre=$_POST['psw'];
			$sql = "INSERT INTO uye VALUES('$ad','$soyad','$email','$sifre')";
			
			$done=$connection->query($sql);
			
			if($done) {
				echo "MYSQL'e VERİ EKLEME BAŞARILI";
			}else{
				echo "VERİ EKLEME BAŞARISIZ!!!";
			}
		}
		
		
	}
	else
	{
		echo "Connection Failed";
	}
	$con=mysqli_connect("localhost","root","","urun");
	if($con){
		if(isset($_POST['ara'])){
		$search_value=$_POST["search"];
		$sql2 = "select * from urunkayit where urunad like '%$search_value%' or kategori like '%$search_value%'";
		$result2 = $con->query($sql2);
		if ($result2==0) {
			echo "Sonuç Bulunamadı.";	
		}
		else{
			while($row = $result2->fetch_assoc()) {
				$link=$row['link'];
				echo "<script>window.open('$link','_self')</script>"; 	
				
			}
		}
		
			
		
		
		$con->close();
	}	
	}
	
?>