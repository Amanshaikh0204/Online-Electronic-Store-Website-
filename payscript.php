
<?php
$apiKey="rzp_test_kdPRYXCXrpQuqQ";
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="success.php" method="POST">
<script    
src="https://checkout.razorpay.com/v1/checkout.js"    
data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys    
data-amount="10000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.   
data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account    
  
data-buttontext="Pay with Razorpay"    
data-name="Electronic Website"    
data-description="Best Electronic Products"   
 data-image="https://png.pngtree.com/png-clipart/20210309/original/pngtree-natural-eco-electronic-logo-png-image_5825644.jpg"   
  data-prefill.name="<?php echo $_POST['fullname']; ?>"    
  data-prefill.email="<?php echo $_POST['email_address']; ?>"
  data-prefill.contact="<?php echo $_POST['phone_no']; ?>"    
  data-theme.color="#F37254">
</script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>