<?php
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
include 'src/instamojo.php';
$api = new Instamojo\Instamojo('6e1b3a91ae8227966762fb6bbe3bb786', '7e34259a070e29a2a7fafe38bcbd34de','https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "thank.php",
        "webhook" => "buy.php"
        ));
    //print_r($response);
    $pay_ulr = $response['longurl'];

    //Redirect($response['longurl'],302); //Go to Payment page
    header("Location: $pay_ulr");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
  ?>
