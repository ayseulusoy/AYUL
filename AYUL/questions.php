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
  height:1100px;	
}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
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
	<a style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' onclick="document.getElementById('signup').style.display='block'">??ye Ol</a>
	<a style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' onclick="window.location.href='login.php'">Giri?? Yap</a>
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
      <h1>??ye Ol</h1>
		<hr>
		<table style="width:100%">
		 <tr>
		<td><label for="name"><b>Ad</b></label></td>
		<td><input type="text" placeholder="Kullan??c?? Ad?? " name="name" required></td>
		  </tr>
		<br>
		 <tr>
		<td><label for="name"><b>Soyad</b></label></td>
		<td><input type="text" placeholder="Kullan??c?? Soyad??" name="lname" required></td>
		  </tr>
		<br>
		 <tr>
		<td><label for="email"><b>Email</b></label></td>
		<td><input type="text" placeholder="Email" name="email" required></td>
		  </tr>
		<br>
		 <tr>
		<td><label for="psw"><b>??ifre</b></label></td>
		<td><input type="password" placeholder="??ifre" name="psw" required></td>
		  </tr>
		<br>
		</table>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">??ptal</button>
       <button  class="signupbtn" id="submit2" name="submit2">??ye Ol</button>
      </div>
    </div>
	</form>
	</div>
	
</div>
<div class="navbar">
  	 <a href="main.php"><b>Anasayfa</b></a>
  	 <a href="woman.php"><b>Kad??n</b></a>
  	 <a href="man.php"><b>Erkek</b></a>
  	 <a href="child.php"><b>??ocuk</b></a>
	
</div>
<div class="middlecontainer">
	<h2><b>S??k??a Sorulan Sorular</b></h2>
	<button class="accordion">Nas??l ??ye Olabilirim?</button>
	<div class="panel">
		<p> ?????YE OL??? linkine t??klayarak ??yelik formunu doldurup hemen ??ye olabilir ve al????veri??e ba??layabilirsiniz. Sitemize ??ye olmak i??in herhangi bir ??cret ??demeniz gerekmemektedir.</p>
	</div>
	<button class="accordion">??ye olmadan da al????veri?? yapabilir miyim?</button>
	<div class="panel">
		<p>??ye olmadan da al????veri?? yapabilirsiniz.</p>
	</div>
	<button class="accordion">Ki??isel verilerim korunuyor mu?</button>
	<div class="panel">
		<p>AYUL sitesine ??ye olurken ve al????veri?? yaparken sa??lad??????n??z ki??isel verileriniz 6698 say??l?? Ki??isel Verilerin Korunmas?? Kanunu (???KVKK???) uyar??nca i??leme amac?? ile ba??lant??l??, s??n??rl?? ve ??l????l?? olacak ??ekilde, i??lenmelerini gerektiren ama?? ??er??evesinde kaydedilir, depolan??r, muhafaza edilir, yeniden d??zenlenir, hukuken bu ki??isel verileri talep etmeye yetkili olan kurumlar ile payla????l??r, KVKK???n??n ve di??er kanunlar??n ??ng??rd?????? ko??ullarda ??????nc?? ki??ilere aktar??labilir, devredilebilir ve KVKK???da say??lan di??er ??ekillerde i??lenebilir.<p>
	</div>
	<button class="accordion">Al????veri??lerimde hangi ??deme se??eneklerini kullanabilirim?</button>
	<div class="panel">
		<p>Sipari??lerinizin ??demesini, Kredi Kart?? ile ger??ekle??tirebilirsiniz.</p>
	</div>
	<button class="accordion">Sipari??im ne kadar s??rede elime ula????r?</button>
	<div class="panel">
		<p>Sipari??iniz, ??demenizin onaylanmas??ndan sonra ortalama 7-9 i?? g??n?? i??erisinde kargoya teslim edilecektir. ??zel g??n ve haftalar, resmi tatil d??nemlerinde ve ola??an??st?? durumlarda, ??r??n teslimatlar??nda gecikmeler ya??anabilir.</p>
	</div>
	<button class="accordion">Hangi kargo firmas?? ile ??al??????yorsunuz?</button>
	<div class="panel">
		<p>??r??nlerimizi Aras Kargo ile teslim ediyoruz. Ayn?? ??ekilde iadelerinizi de Aras Kargo ile bize ??cretsiz olarak g??nderebilirsiniz.</p>
	</div>
	<button class="accordion">Kargo ??creti ne kadar?</button>
	<div class="panel">
		<p>Kargo ??creti her bir sipari??iniz i??in KDV dahil Aras kargo i??in 6,99 TL dir.</p>
	</div>
	<button class="accordion">Kap??da ??deme yapabilir miyim?</button>
	<div class="panel">
		<p>AYUL???da kap??da ??deme se??ene??i mevcut de??ildir.</p>
	</div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<div class="footercontainer">
	<div id="about" >
	 <a  href="about.php"><b>Hakk??m??zda</b></a>
	</div>
	<br>
	<div id="questions" >
	 <a href="questions.php"><b>S??k??a Sorulan Sorular</b></a>
	</div>
	<br>
	<div id="complain">
	 <a  href="complain.php"><b>??ikayet Et</b></a>
	</div>
	<br>
	<div id="contact" >
	 <a href="contact.php"><b>??leti??im</b></a>
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
				echo "MYSQL'e VER?? EKLEME BA??ARILI";
			}else{
				echo "VER?? EKLEME BA??ARISIZ!!!";
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
			echo "Sonu?? Bulunamad??.";	
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