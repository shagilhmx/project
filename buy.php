<?php
$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without the <>.
$mac_calculated = hash_hmac("sha1", implode("|", $data), "974e5b87f935417cb60ecef86b461404");
if($mac_provided == $mac_calculated){
    echo "MAC is fine";
    // Do something here
    if($data['status'] == "Credit"){
       // Payment was successful, mark it as completed in your database

                $to = 'shagilhmx@gmail.com';
                $subject = 'Website Payment Request ' .$data['buyer_name'].'';
                $message = "<h1>Payment Details</h1>";
                $message .= "<hr>";
                $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
                $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
                $message .= "<hr>";
                $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
                $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
                $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';


                $message .= "<hr>";

                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                // send email
                mail($to, $subject, $message, $headers);
    }
    else{
       // Payment was unsuccessful, mark it as failed in your database
    }
}
else{
    echo "Invalid MAC passed";
}
?>
<DOCTYPE html5>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>payment gateway</title>
</head>
<body>
  <div class="payment">
  <form action="pay.php" method="POST" accept-charset="utf-8">
  <input type="hidden" name="product_name" value="<?php echo $prd_name; ?>">
  <input type="hidden" name="product_price" value="<?php echo $prd_price; ?>">
  <div class="form-group">
  <label>Your Name</label>
  <input type="text" class="form-control" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
  <label>Your Phone</label>
  <input type="text" class="form-control" name="phone" placeholder="Enter your phone number">
  </div>
  <div class="form-group">
  <label>Your Email</label>
  <input type="email" class="form-control" name="email" placeholder="Enter you email">
  </div>
  <div class="form-group">
  <label>Amount</label>
  <input type="email" class="form-control" name="amount" Value="500" readonly>
  </div>
  <p><input type="submit" class="btn btn-success btn-lg" value="Click here to Pay"></p>
</form>


</div> <!-- /container -->
</div>


</body>
</html>
    <div
</body>
</html>
