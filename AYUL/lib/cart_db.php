<?php
include "db.php";
session_start();
function addtocart($product_item){
	if(isset($_SESSION["shoppingcart"]) ){
		$shoppingcart=$_SESSION["shoppingcart"];
		$products=$shoppingcart["products"];	
	}else{
		$products=array();
	}
	/*adet*/
	if(array_key_exists($product_item->urunkod,$products)){
		$products[$product_item->urunkod]->count++;
	}else{
		$products[$product_item->urunkod]=$product_item;
	}
	
	/*sepet hesaplanması*/
	$total=0;
	$total_count=0;
	foreach($products as $product){
		$product->total=$product->count* $product->fiyat;
		$total+=$product->total;
		$total_count+=$product->count;
	}
	$summary["total"]=$total;
	$summary["total_count"]=$total_count;
	
	$_SESSION["shoppingcart"]["products"]=$products; 
	$_SESSION["shoppingcart"]["summary"]=$summary;
}
function removefromcart($product_id){
	if(isset($_SESSION["shoppingcart"]) ){
		$shoppingcart=$_SESSION["shoppingcart"];
		$products=$shoppingcart["products"];	
	
		/*ürünu listeden cikarma*/
		if(array_key_exists($product_id,$products)){
			unset($products[$product_id]);
		}
		/*tekrar sepeti hesaplama*/
		$total=0;
	    $total_count=0;
		foreach($products as $product){
			$product->total=$product->count* $product->fiyat;
			$total+=$product->total;
			$total_count+=$product->count;
		}
		$summary["total"]=$total;
		$summary["total_count"]=$total_count;
	
		$_SESSION["shoppingcart"]["products"]=$products; 
		$_SESSION["shoppingcart"]["summary"]=$summary;
		
		return true;
	}
}

if(isset($_POST["p"])){
	$islem=$_POST["p"];
	if($islem=="addtocart"){
		$id=$_POST["product_id"];
		$product=$db->query("select * from urunkayit where urunkod={$id}",PDO::FETCH_OBJ)->fetch();
		$product->count=1;
		addtocart($product);
	}else if($islem=="removefromcart"){
		$id=$_POST["product_id"];
		echo removefromcart($id);
	}
}

?>