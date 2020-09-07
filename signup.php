<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

  <title>Sign Up</title>
  <link rel="stylesheet" href="signin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"
  href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet"
  href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript"
  src="http://code.jquery.com/jquery.min.js"></script>
<script
  src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</head>


<script>

$(document).ready(function()
{
$("#signup").click(function()
{
var name = $("#username").val();
var password = $("#password").val();
var cpassword = $("#repassword").val();
if (name == '' || password == '' || cpassword == '')
{
alert("Please fill all fields...!!!!!!");
$('#msg').attr('onSubmit','return false');
}
else if ((password.length) < 8)
{
alert("Password should atleast 8 character in length...!!!!!!");
$('#msg').attr('onSubmit','return false');
}
else if (!(password).match(cpassword))
{
alert("Your passwords don't match. Try again?");
$('#msg').attr('onSubmit','return false');
}
else {
$('#msg').attr('onSubmit','return true');
}
});
});

</script>

<body>

<?php
include"config.php";
global $con;
$msg="";$msg1="";$msg2="";
{
  if (isset($_POST['username']))
  {
	$statement = $con->prepare("Select * from login where username = ? ");
    $statement->bind_param("s", $username);

	$stmt = $con->prepare("INSERT INTO login (username,password) VALUES (?, ?)");
	$stmt->bind_param("ss", $username, $password);

// set parameters and execute
	$username = $_POST['username'];

	// Remove all illegal characters from email
	$email = filter_var($username, FILTER_SANITIZE_EMAIL);

	$password = md5($_POST['password']);

// execute Select query

	$statement->execute();

	$statement->store_result();
	$numrows = $statement->num_rows;

	$statement->close();

	// Validate e-mail address
	if(filter_var($username, FILTER_VALIDATE_EMAIL))
	{
		if($numrows == 0)
		{
		$stmt->execute();
		$stmt->close();
    $_SESSION['count'] = 1;
		}
		else
		{
		$msg1 = "Username Or Email Already Used";
		}
	}
	else
	{
		$msg2 = "$username is Not valid email address";
	}

        if(mysqli_insert_id($con))
        {
            $msg = "<h3>Registered successfully.</h3>";
        }
        else
        {
		        $msg = "Registration Failed";
		    }

    }
}
?>

  <div class="login-form">
  <form action="signup.php" id="msg" method="post">
      <h2 class="text-center">Sign up</h2>
      <div class="text-center social-btn">
          <a href="#" class="btn btn-primary btn-block facebook"><i class="fa fa-facebook"></i> Sign up with <b>Facebook</b></a>
          <a href="#" class="btn btn-info btn-block twitter"><i class="fa fa-twitter"></i> Sign up with <b>Twitter</b></a>
    <a href="#" class="btn btn-danger btn-block gmail"><i class="fa fa-google"></i> Sign up with <b>Google</b></a>
      </div>
  <div class="or-seperator"><i>or</i></div>
      <div class="form-group">
        <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" id="username" name="username" placeholder="Email" required="required">
          </div>
      </div>
  <div class="form-group">
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
          </div>
      </div>
  <div class="form-group">
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control" id="repassword" name="re-password" placeholder="Enter Password Again" required="required">
          </div>
      </div>
      <?php echo $msg; echo $msg1; echo $msg2;?>
      <div class="form-group">
          <button type="submit" id="signup" class="btn btn-success btn-block login-btn">Sign up</button>
      </div>
  </form>
  <div class="hint-text small">Have an account? <a href="signin.php" class="text-success">Sign in Here!</a></div>
</div>



  <input name="animation" type="hidden">
  </body>
</html>
