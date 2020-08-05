<?php include ('login.php'); ?>

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
    <body>
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
  aria-hidden="true" action="login.php" method="post">
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
            <div class="row row-content">
                <div class="col">
                   <div id="mycarousel" class="carousel slide" data-ride="carousel">
                       <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                 src="images/caro_mobiles.jpg" alt="">

                            <div class="carousel-caption d-none d-md-block">
                                <h1>Top brand smart phones</h1>
                            </div>  
                            </div>
                        
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                 src="images/caro_comp.png" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Top brand Computers</h1>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                 src="images/caro_lap.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Top brand Laptops</h1>
                            </div>
                        </div>
                           <div class="carousel-item">
                            <img class="d-block img-fluid"
                                 src="images/caro_speak.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Top brand Speakers</h1>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    </div>

                   </div>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
               </div>
            </div>
        
        
        
        
            <div class="row row-content text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/comp1.jpg" alt="">
                        <div class="caption">
                            <h3>Computer </h3>
                            <p style="font-size:12px">Price: Rs. 36000.00 </p>
                            <p><a href="#" role="button" class="btn btn-primary btn-block btn-lg">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/mob1.jpg" alt="">
                        <div class="caption">
                            <h3>Mobile </h3>
                            <p style="font-size:12px">Price: Rs. 30000.00 </p>
                            <p><a href="#" role="button" class="btn btn-primary btn-block btn-lg">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/speak1.jpg" alt="">
                        <div class="caption">
                            <h3>Speaker </h3>
                            <p style="font-size:12px">Price: Rs. 3000.00 </p>
                            <p><a href="#" role="button" class="btn btn-primary btn-block btn-lg">Add to cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="row row-content text-center" id="sec" >
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/lap2.jpg" alt="">
                        <div class="caption">
                            <h3>Laptop </h3>
                            <p style="font-size:12px">Price: Rs. 50000.00 </p>
                            <p><a href="#" role="button" class="btn btn-primary btn-block btn-lg">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/mob2.jpg" alt="">
                        <div class="caption">
                            <h3>Mobile </h3>
                            <p style="font-size:12px">Price: Rs. 30000.00 </p>
                            <p><a href="#" role="button" class="btn btn-primary btn-block btn-lg">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="images/lap1.jpg" alt="">
                        <div class="caption">
                            <h3>Laptop </h3>
                            <p style="font-size:12px">Price: Rs. 45000.00 </p>
                            <p><a href="#" role="button" class="btn btn-primary btn-block btn-lg">Add to cart</a></p>
                        </div>
                    </div>
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
    
        
        
