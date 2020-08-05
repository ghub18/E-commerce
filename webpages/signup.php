<?php
     $name="";
     $email="";
     $contact="";
      $city="";
      $address="";
      $errors= array();
   $db=mysqli_connect("localhost","root","root","project1","8889") or die("could not connect to the database ");
   
   if(isset($POST['register'])){
       echo "ok";
      
    $name= mysql_real_escape_string($POST['name']);
    echo $name;
    $email= mysql_real_escape_string($POST['email']);
    $password_1= mysql_real_escape_string($POST['password1']);
    $password_2 = mysql_real_escape_string($POST['password2']);
    $contact = mysql_real_escape_string($POST['contact']);
    $city = mysql_real_escape_string($POST['city']);
    $address = mysql_real_escape_string($POST['address']);
    
    if($password_1 != $password_2){
        array_push($errors,"Two passwords don't match");
        
    }
     $sql_e ="SELECT * FROM users WHERE name='$email'";
     $res_e = mysqli_query($db,$sql_e) or die(mysqli_error($db));
      
    
    if(mysqli_num_rows($res_e)>0){
       array_push($errors,"Email Id is already registered "); 
        
    }
    if(count($errors)==0){
        $pass=md5($password1);
        $query = "INSERT INTO users (name,email,password,contact,city,address) VALUES('$name','$email', '$pass','$contact','$city','$address') ";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        echo "saved";
        exit();
    }
    }
    
?>











<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/30c71a856e.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
    </head>
    <body style="background-color: AliceBlue">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" style="font-size:24px;color: white;padding-top: 3px" href="index.php"> E-store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="signup.php"><span class="fa fa-user fa-lg"></span>  Sign Up<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a data-toggle="modal" data-target="#modalLoginForm" id="login"><span class="fa fa-sign-in-alt fa-lg"></span>  Login</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php" ><span class="fa fa-info fa-lg"></span>   About Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="contact.php"><span class="fa fa-phone fa-lg"></span>  Contact Us</a>
                 </li>
              </ul>
            </div>
        </nav>    
        
        <div class="modal" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color:darkslategray">
          <h2 class="modal-title w-100 font-weight-bold" style="color:white;">LOGIN</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
        <div class="row">
            <div class="col-md-9">
          <i class="fas fa-envelope fa-lg"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email" style="font-size:15px">  Your email</label>
          <input type="email" id="defaultForm-email" class="form-control-lg form-control validate"><br>
          
        </div>
        </div>

        <div class="row">
            <div class="col-md-8">
          <i class="fas fa-lock "></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="font-size:15px">  Your password</label><br>
          <input type="password" id="defaultForm-pass" class="form-control-lg form-control-validate">
          
        </div>
        </div>
          </form>

      </div>
        
      <div class="modal-footer d-flex justify-content-center">
          <div class="row">
           <div class="col">
        <button class="btn btn-primary btn-lg">Login</button>
          </div>
          </div>
          
      </div>
    </div>
  </div>
</div>
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/signup.jpg" style="width: 500px;height: 500px;background-color: gainsboro">
                        
                </div>
                <div class="col-md-5">
                    <h1>SIGN UP</h1>
                    <form  action="signup.php" method="post">
                            <div class="form-group">
                                <input class="form-control form-control-lg" placeholder="Name" name="name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg"  placeholder="Email"  name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" placeholder="Password" name="password1" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" placeholder="Re-type Password" name="password2" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-lg"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control form-control-lg"  placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control form-control-lg"  placeholder="Address" name="address" required><br>
                            </div>
                        
                            <button type="submit" name="register" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                </div>
            </div>
        </div>



        
         <footer>
            <div class="myfooter">
                <div class="row" style="padding-left:130px;">
                    <div class="col-md-4">
                        <h1>Information</h1>
                        <a href="about.php">About Us</a><br>
                        <a href="contact.php">Contact Us</a>
                        
                    </div>
                    <div class="col-md-4">
                        <h1>My account</h1>
                        <a data-toggle="modal" data-target="#modalLoginForm" style="font-size:15px;color:white;">Login</a><br>
                        <a href="signup.php"> Sign Up</a>
                        
                    </div>
                    <div class="col-md-4">
                        <h1>Contact Us</h1>
                        <p style="color: white;font-size: 15px">+123 00000</p>                     
                    </div>


                </div>
            </div>
        </footer>
        
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
    
