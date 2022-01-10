$(document).ready(function(){
		$(".addtocartbtn").click(function(){
			var url="http://localhost/AYUL/lib/cart_db.php";
			var data={
				p:"addtocart",
				product_id:$(this).attr("product-id")
			}
			$.post(url,data,function(response){
				alert(response);
			})
		})
		
		
		$(".removefromcartbtn").click(function(){
			var url="http://localhost/AYUL/lib/cart_db.php";
			var data={
				p:"removefromcart",
				product_id:$(this).attr("product-id")
			}
			$.post(url,data,function(response){
				window.location.reload();
			})
		})
})