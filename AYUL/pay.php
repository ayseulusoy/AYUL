<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}


.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  display: inline-block;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form  method="post">
       <div class="row">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> İsim Soyisim</label>
            <input type="text" id="fname" name="firstname" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" required >
            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr" name="address" required >
            <label for="city"><i class="fa fa-institution"></i> Şehir</label>
            <input type="text" id="city" name="city"  required>

            
			
          <div class="col-50">
            <h3>Ödeme</h3>
            <label for="fname">Geçerli Kartlar</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">İsim Soyisim</label>
            <input type="text" id="cname" name="cardname"  required>
            <label for="ccnum">Kredi Kartı Numarası</label>
            <input type="text" id="ccnum" name="cardnumber" required>
            <label for="expmonth">Ay</label>
            <input type="text" id="expmonth" name="expmonth"  required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Yıl</label>
                <input type="text" id="expyear" name="expyear"  required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv"  required>
              </div>
            </div>
          </div>
          
        </div>
      </form>
    </div>
	<button  type="submit" class="btn" name="pay"  id="pay" onclick="pay()">Öde</button>
  </div>
  
</div>

</body>
</html>
<script>
function pay(){
	
		alert("Ödeme Yapıldı");
		window.location.reload();
		window.location.href='reset_sepet.php';
	
}
</script> 	
	

