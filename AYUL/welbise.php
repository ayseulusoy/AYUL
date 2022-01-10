<?php include "lib/summary.php"; ?>  
<?php  

  
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

  height:500px;	
}
.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  width: 40px;
  height: 40px;
}
.urunimg{
  position: absolute;
  left: 20px;
}
.img-zoom-result {
  border: 1px solid #d4d4d4;
  width: 300px;
  height: 300px;
  position: absolute;
  left: 450px;
}
.buybutton{
	background: #ffab06; 
	border: 2px outset #ffab06; 
	color: #ffffff; 
	font-weight: bold;
	position: absolute;
	left:300px;
	top:1220px;
	width:100px;
	height:50px;
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
<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
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
<script src="assets\js\jquery-3.5.1.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\custom.js"></script>
<?php require_once "lib\db.php"; ?>
<?php 
/*verileri cekmek için*/
$products=$db->query("select * from urunkayit where urunkod=3",PDO::FETCH_OBJ)->fetchAll();

?>
<div class="middlecontainer">
	<?php foreach ($products as $product){ ?>
	<div class="img-zoom-container">
		<div class="urunimg"><img id="myimage" src="cocuk_elbise.jpg" width="400" height="500"></div>
		<div id="myresult" class="img-zoom-result"></div>
	</div>
	<b<button product-id="<?php echo $product->urunkod; ?>" class="buybutton addtocartbtn"   role="button">Sepete Ekle <?php echo $product->fiyat."TL";?></button>
	<?php } ?>
</div>
<script>
	imageZoom("myimage", "myresult");
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