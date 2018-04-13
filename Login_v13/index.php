<!DOCTYPE html>
<html>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php
session_start();
$nameErr="";
$ageErr="";
$phnoErr="";
$counter=0;
function validationfun(){
	$name = $_POST["name"];
	if (!preg_match("/^[a-zA-Z ]*$/",$name))
  		$GLOBALS['nameErr'] = "wrong name format";
  	else
  		$GLOBALS['counter']=$GLOBALS['counter']+1;
}

function validationage(){
	$age = $_POST["age"];
	if (!preg_match("/^[0-9]+$/",$age))
  		$GLOBALS['ageErr'] = "wrong age format ";
  	else
 		$GLOBALS['counter']=$GLOBALS['counter']+1;

}

function validationphno(){
	$phno = $_POST["phno"];
	if (!preg_match("/^[+0-9]+$/",$phno))
  		$GLOBALS['phnoErr'] = "wrong phno format";
  	else
  		$GLOBALS['counter']=$GLOBALS['counter']+1;
}


if($_SERVER["REQUEST_METHOD"]=="POST"){

	if(empty($_POST["name"]))
		$GLOBALS['nameErr'] = "Name Required";
	else
		validationfun();

	if(empty($_POST["age"]))
		$GLOBALS['ageErr'] = "Age Required";
	else
		validationage();

	if(empty($_POST["phno"]))
		$GLOBALS['phnoErr'] = "Phone Number Required ";
	else
		validationphno();
	if($GLOBALS['counter']==3){
				$na=$_POST["name"];
				$ag=$_POST["age"];
				$lo=$_POST["location"];
				$ph=$_POST["phno"];

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname= "otpdata";
			
				$conn = new mysqli($servername, $username, $password,$dbname);
				if ($conn->connect_error) 
    				die("Connection failed: " . $conn->connect_error);

    			$check_duplicate="select age from register_voter where phone =$ph";
    			$counting=$conn->query($check_duplicate)->fetch_assoc();
    			if(!is_null($counting)){    			
    				echo '<script type="text/javascript">';
                        echo 'swal("Account Already Exist", "", "error")';
                        echo '</script>'; 
    				}
    			else{
    				$sql="insert into register_voter(name,age,location,phone) values ('$na','$ag','$lo','$ph')";
					if($conn->query($sql)==TRUE){
						
						 $_SESSION["jholam"]=15;
                        echo '<script type="text/javascript">';
                        echo 'swal("Registered", "", "success")';
                        echo '</script>';
                        header("Location: ../HOME/index.php"); /* Redirect browser */
						
					}
						
					else
						echo "failed to inset data to database";	
    				}
			}	
	}
?>








<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

          <!-- LOGIN MODULE -->
        <div class="login">
            <div class="wrap">
                <!-- TOGGLE -->
                <div id="toggle-wrap">
                    <div id="toggle-terms">
                        <div id="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- SLIDER -->
                <div class="content">
                    
                    <!-- SLIDESHOW -->
                    <div id="slideshow">
                        
                        <div class="two">
                            <h2><span>PARTIES</span></h2>
                            <p>CONGRESS<br>
                                BJP<br>
                                AAP<br></p>
                        </div>
                        <div class="three">
                            <h2><span>INFORMATION</span></h2>
                            <p>Call 1800-180-180 to know about location centres</p>
                        </div>
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">

                    <div class="form-wrap">
                        <!-- TABS -->
                    	<div class="tabs">
                            
                    		<h3 class="signup-tab"><a class="sign-up" href="#signup-tab-content"><span>Sign Up</span></a></h3>
                    	</div>
                        <!-- TABS <CONTENT></CONTENT>T -->
                    	<div class="tabs-content">
                            <!-- TABS CONTENT LOGIN -->
                    		<div id="login-tab-content" class="active">

	<form method="post"  class="login-form" action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
<input type="text" class="input" name="name" placeholder="name"><span class="error"> <?php echo $nameErr?></span>
<input type="text" class="input" name="age" placeholder="age"><span class="error"> <?php echo $ageErr?></span>
<input type="name" class="input" name="location" placeholder="location">
<input type="name" class="input" name="phno" placeholder="phone number"><span class="error"> <?php echo $phnoErr;?></span>
<input type="Submit"  value="Submit"><br>
</form>
                    		</div>
                    	</div>
                	</div>
                </div>
            </div>
        </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>
