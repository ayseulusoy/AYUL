<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");
}  
  
?>  
  
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
  background-color: #474e5d;
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


/*signin*/
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.modal-content signin {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}
.signinbtn{
	padding:14px 20px;
	background-color:#2DE50A;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.signupbtn{
	padding:14px 20px;
	background-color:#2DE50A;
}

.cancelbtn, .signupbtn,.signinbtn {
  float: left;
  width: 50%;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn,.signinbtn {
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
<?php  
echo $_SESSION['email'];  
?> 
<div class="brand">
	<h1 ><b><a href="welcome.php" style="color:#4904A0;" >AYUL</a></b></h1>
	<h5 >Sizin Tercihiniz</h5>
</div>
<div class="topnav">
	<a style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' onclick="window.location.href='worder.php'">Sepet</a>
	<a style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; '  onclick="window.location.href='logout.php'">Çıkış Yap</a>
	</div>
	<div style="border: 5px outset red; background-color: #C0C3BF;  text-align: center;">
	<div class="search">
	 <form method="post">
	  <input style='border: 2px outset #ffab06; width:700px;  ' type="text" id="search" name="search"></input>
	  <button style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' type="submit" name="ara" id="ara">Ara</button>
	 </form>
	</div>
	</div>
	
</div>
<div class="navbar">
  	 <a href="welcome.php"><b>Anasayfa</b></a>
  	 <a href="wwoman.php"><b>Kadın</b></a>
  	 <a href="wman.php"><b>Erkek</b></a>
  	 <a href="wchild.php"><b>Çocuk</b></a>
	
</div>
<div class="middlecontainer">
	<h2><b>Sıkça Sorulan Sorular</b></h2>
	<button class="accordion">Nasıl Üye Olabilirim?</button>
	<div class="panel">
		<p> “ÜYE OL” linkine tıklayarak üyelik formunu doldurup hemen üye olabilir ve alışverişe başlayabilirsiniz. Sitemize üye olmak için herhangi bir ücret ödemeniz gerekmemektedir.</p>
	</div>
	<button class="accordion">Üye olmadan da alışveriş yapabilir miyim?</button>
	<div class="panel">
		<p>Üye olmadan da alışveriş yapabilirsiniz.</p>
	</div>
	<button class="accordion">Kişisel verilerim korunuyor mu?</button>
	<div class="panel">
		<p>AYUL sitesine üye olurken ve alışveriş yaparken sağladığınız kişisel verileriniz 6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”) uyarınca işleme amacı ile bağlantılı, sınırlı ve ölçülü olacak şekilde, işlenmelerini gerektiren amaç çerçevesinde kaydedilir, depolanır, muhafaza edilir, yeniden düzenlenir, hukuken bu kişisel verileri talep etmeye yetkili olan kurumlar ile paylaşılır, KVKK’nın ve diğer kanunların öngördüğü koşullarda üçüncü kişilere aktarılabilir, devredilebilir ve KVKK’da sayılan diğer şekillerde işlenebilir.<p>
	</div>
	<button class="accordion">Alışverişlerimde hangi ödeme seçeneklerini kullanabilirim?</button>
	<div class="panel">
		<p>Siparişlerinizin ödemesini, Kredi Kartı ile gerçekleştirebilirsiniz.</p>
	</div>
	<button class="accordion">Siparişim ne kadar sürede elime ulaşır?</button>
	<div class="panel">
		<p>Siparişiniz, ödemenizin onaylanmasından sonra ortalama 7-9 iş günü içerisinde kargoya teslim edilecektir. Özel gün ve haftalar, resmi tatil dönemlerinde ve olağanüstü durumlarda, ürün teslimatlarında gecikmeler yaşanabilir.</p>
	</div>
	<button class="accordion">Hangi kargo firması ile çalışıyorsunuz?</button>
	<div class="panel">
		<p>Ürünlerimizi Aras Kargo ile teslim ediyoruz. Aynı şekilde iadelerinizi de Aras Kargo ile bize ücretsiz olarak gönderebilirsiniz.</p>
	</div>
	<button class="accordion">Kargo ücreti ne kadar?</button>
	<div class="panel">
		<p>Kargo ücreti her bir siparişiniz için KDV dahil Aras kargo için 6,99 TL dir.</p>
	</div>
	<button class="accordion">Kapıda ödeme yapabilir miyim?</button>
	<div class="panel">
		<p>AYUL‘da kapıda ödeme seçeneği mevcut değildir.</p>
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
	 <a  href="wabout.php"><b>Hakkımızda</b></a>
	</div>
	<br>
	<div id="questions" >
	 <a href="wquestion.php"><b>Sıkça Sorulan Sorular</b></a>
	</div>
	<br>
	<div id="complain">
	 <a  href="wcomplain.php"><b>Şikayet Et</b></a>
	</div>
	<br>
	<div id="contact" >
	 <a href="wcontact.php"><b>İletişim</b></a>
	</div>	
</div>



</body>
</html>
<?php
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
				$link=$row['wlink'];
				echo "<script>window.open('$link','_self')</script>"; 	
				
			}
		}
		
			
		
		
		$con->close();
	}	
	}
?> 