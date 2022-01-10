
<!DOCTYPE html>
<html>
<head>
<title>Sepetim</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<style>
.table{
	position: absolute;
	left:240px;
}
.td{
	vertical-align:middle!important;
}
</style>
</head>

<body>
<?php include "lib/summary.php"; ?>

<script src="assets\js\jquery-3.5.1.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\custom.js"></script>
<div class="container">
	<?php if($total_count>0){ ?>
	<h3 class="text-center">Sepetinizde <strong style="color:#d9534f;"><?php echo $total_count; ?></strong> Adet Ürün Bulunmaktadır</h3>
	<br>
	<div class="row">
	<div class="col-md-8">
		<table class="table table-hover table-bordered table-striped">
		<thead>
		<th class="text-center">Ürün Adı</th>
		<th class="text-center">Ürün Fiyatı</th>
		<th class="text-center">Ürün Adeti</th>
		<th class="text-center">Toplam</th>
		<th class="text-center">Sepetten Çıkar</th>
		</thead>
		<tbody>
		<?php foreach($shopping_products as $product){ ?>
		<tr>
		<td class="text-center"><?php echo $product->urunad; ?></td>
		<td class="text-center"><strong><?php echo $product->fiyat."TL"; ?></strong></td>
		<td class="text-center">
			<input type="text" class="item-count-input" style="width:50px; text-align:center; " value=<?php echo $product->count; ?> >
			
		</td>
		<td class="text-center"><?php echo $product->total."TL"; ?></td>
		<td class="text-center">
		<button product-id="<?php echo $product->urunkod; ?>" class="btn btn-danger btn-sm removefromcartbtn"   role="button">Sepetten Çıkar</button>
		</td>
		</tr>
		<?php } ?>
		</tbody>
		<tfoot>
			<th colspan="2" class="text-right">Toplam Ürün:<span class="color-danger"><?php echo $total_count; ?></span></th>
			<th colspan="3" class="text-right">Toplam Tutar:<span class="color-danger"><?php echo $total."TL"; ?></span></th>
			<td>
			<button style='background: #ffab06;  border: 2px outset #ffab06; color: #ffffff; font-weight: bold; ' onclick="window.location.href='pay.php'">Ödeme Yap</button>
			</td>
		</tfoot>
		</table>
	</div>
</div>

	<?php }else{ ?>
	<div class="alert alert-info">
		<strong>Sepetinizde ürün bulunmamaktadır</strong>
	</div>
	<?php } ?>
</div>

</body>
</html>
