
<!DOCTYPE html>
<html>
<body>

</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
if(isset($_SESSION['jholam'])){
if($_SESSION['jholam']==15){
                        echo '<script type="text/javascript">';
                        echo 'swal("Registered", "", "success")';
                        echo '</script>';

}  
}

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>;
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Election Office</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

    <style type="text/css">

    *{
        margin : 0px;
    }

    </style>

  </head>

  <body>

    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">ELECTION COMISSION</h1>
              <p class="mb-5"><form action="../Login_v13/index.php"><button class="btn btn-secondary" type="submit">Register Voter</button></form></p>
			  <p class="mb-5"><form action="../cadform.html"><button class="btn btn-secondary" type="submit">Register Candidate</button></form></p>
			  <p class="mb-5"><form action="../Login_v1/index.php"><button class="btn btn-secondary" type="submit">Vote</button></form></p>
			  <p class="mb-5"><form action="../count.php"><button class="btn btn-secondary" type="submit">Result</button></form></p>
              </div>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>
