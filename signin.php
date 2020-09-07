<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

  <title>Sign In</title>
  <link rel="stylesheet" href="signin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <link rel="stylesheet"
  href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet"
  href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



  <script>

  $(document).ready(function()
  {
  $("#signin").click(function()
  {
  var name = $("#username").val();
  var password = $("#password").val();
  if (name == '' || password == '' )
  {
  alert("Please fill all fields...!!!!!!");
  $('#msg').attr('onSubmit','return false');
  }
  else if ((password.length) < 8)
  {
  alert("Password should atleast 8 character in length...!!!!!!");
  $('#msg').attr('onSubmit','return false');
  }
  else {
  $('#msg').attr('onSubmit','return true');
  }
  });
  });

  </script>

</head>
<body>

  <?php
  $msg="";
include"config.php";

if (isset($_POST['username'])){

	$username = $_POST['username'];

	$password = md5($_POST['password']);

	$stmt = $con->prepare("SELECT username, password FROM login where username='$username' and password = '$password'");

    /* execute statement */
    $stmt->execute();

    /* bind result variables */
    $stmt->bind_result($user, $pass);

    /* fetch values */
    while ($stmt->fetch())
    {

    }


if($user == $username)
		{
		session_start();
	   $_SESSION['name'] = $user;
     $_SESSION['logged'] = true;
     $hour = time()+3600*24*30;
     setcookie('username',$username,$hour);
     setcookie('password',$password,$hour);
     		// Redirect user to index.php
	   header("Location: index.php");
		}
		else
		{
    $_SESSION['logged']=false;
	  $msg = "Your username or password is wrong";
		}


$stmt->close();

    }

?>

  <div class="login-form" id="message">
  <form action="signin.php" method="post">
      <h2 class="text-center">Sign in</h2>
      <div class="text-center social-btn">
          <a href="#" class="btn btn-primary btn-block facebook"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
          <a href="#" class="btn btn-info btn-block twitter"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>
    <a href="#" class="btn btn-danger btn-block gmail"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
      </div>
  <div class="or-seperator"><i>or</i></div>
      <div class="form-group">
        <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" id="uname" class="form-control" name="username" placeholder="Email" required="required">
          </div>
      </div>
  <div class="form-group">
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="required">
          </div>
      </div>
      <?php echo $msg; ?>
      <div class="form-group">
          <button type="submit" id="signin" class="btn btn-success btn-block login-btn">Sign in</button>
      </div>
      <div class="clearfix">
          <label class="pull-left checkbox-inline"><input type="checkbox" id="remember"> Remember me</label>
          <a href="#" data-target="#modal" data-toggle="modal" name="forget" class="pull-right text-success">Forgot Password?</a>
        </div>
  </form>
  <div class="hint-text small">Don't have an account? <a href="signup.php" class="text-success">Register Now!</a></div>
</div>

<div tabindex="-1" class="modal-fade" id="modal" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button class="close" aria-hidden="true" type="button" data-display="modal">
      <h1 class="text-center">Reset Your Password</h1>
      </div>
    <div class="modal-body">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="text-center">
              <p>Please enter your email address below and we will send you a link to change your password.</p>
              <div class="panel-body">
                <fieldset>
                  <div class="form-group">
                    <input name="Email" class="form-control input-lg" type="email" placeholder="Email Address">
                  </div>
                  <button class="btn btn-lg btn-primary-btn-block" type="submit">Request Link</button>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="modal-footer">
    <div class="col-md-12">
      <button class="btn" aria-hidden="true" data-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>
</div>
</div>




  <input name="animation" type="hidden">
  </body>
</html>
