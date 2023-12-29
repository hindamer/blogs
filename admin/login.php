<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
		<?php
		include("oop.php");
		$db=new Blog();
		$db->_get();
		$error=[];
		if(isset($_POST['Submit'])){
			$email=$_POST['email'];
			$password=$_POST['password'];
	     	$data=$db->select("*","users","email='$email'");
	    	$user=$data->fetch(PDO::FETCH_ASSOC);
		if($user){
			if(isset($_POST['password'])&& empty($_POST['password'])){
				$error['pass']="enter your pass";
			}
			elseif($user['password'] == $password){
				header("location:posts.php");
			}
			else{
				$error['password']="pass not valid";
			}
		}
		else
		{
			$error['mail']="email not found";
		}	


		}
		?>
      <form method="post" autocomplete="on" action="<?php echo $_SERVER['PHP_SELF']?>">
    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" name="email" placeholder="Email Id" class="textBox">
						<p style="color: white;"><?php if(isset($error['mail'])) echo $error['mail']?></p>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->

    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password"  name="password" placeholder="Password" class="textBox">
						<p style="color: white;"><?php if(isset($error['password'])) echo $error['password']?></p>
						<p style="color: white;"><?php if(isset($error['pass'])) echo $error['pass']?></p>


    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="Login">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>
