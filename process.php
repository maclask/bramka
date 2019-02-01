<?php

$tpay_url = 'https://secure.tpay.com';
$id = YOUR_ID_HERE;
$code = YOUR_SECRET_CODE_HERE;
$finalamount = $_POST['finalamount'];
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];
$description = "Datek";

?>
<form name = "myform" action = "<?php echo $tpay_url; ?>" method = "post" target = "_top">

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="kwota" value="<?php echo $finalamount; ?>">
	<input type="hidden" name="opis" value="<?php echo $description; ?>">
	<input type="hidden" name="pow_url" value="/donation-success">
	<input type="hidden" name="pow_url_blad" value="/donation-error">
	<input type="hidden" name="email" value="<?php echo $email; ?>">
	<input type="hidden" name="nazwisko" value="<?php echo $last_name; ?>">
	<input type="hidden" name="imie" value="<?php echo $first_name; ?>">
	<input type="hidden" name="adres" value="<?php echo $adress; ?>">
	<input type="hidden" name="miasto" value="<?php echo $city; ?>">
	<input type="hidden" name="kod" value="<?php echo $zipcode; ?>">
	<input type="hidden" name="kraj" value="">
	<input type="hidden" name="telefon" value="">
	<input type="hidden" name="jezyk" value="pl">
	
	<input type= "hidden" name= "md5sum" value="<?php echo md5($id.$finalamount.$code); ?>">
	

</form>
<script type="text/javascript">
document.myform.submit();
</script>
<?php 
?>

