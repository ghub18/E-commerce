<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/30c71a856e.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
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
                <div class="col-md-4">
                    <h1>Who we are</h1>
                    <img src="images/we.jpg" style="height: 200px;width: 300px" alt=""><br>
                    <p style="font-family: 'Alegreya Sans', sans-serif;font-size:22px ;"> E-store is an American electronic commerce company with headquaters in NewYork,started by a group of 5 friends.It is one of the largest online internet-based retailer in US.E-store also sells certain low-end products like USB cables and other accessories.E-store has separate retail websites for United States,United Kingdom,France,Germany,Spain,India,
                        China,and Mexico. 
"
                </div>
                <div class="col-md-4">
                    <h1>History</h1>
                    <img src="images/logo.png" style="height: 300px;width: 300px" alt=""><br>
                    <p style="font-family: 'Alegreya Sans', sans-serif;font-size:22px ;">In 1981 we saw the first business to business transaction.<br>
                        1982- E-store was used to make online purchases, book train tickets, chat, check stock prices etc.<br>
                        1984 — the first ever shopper buys online at E-store.<br>
                        1990- created the first browser and web server.<br>
                        1991- the Internet became commercialized and saw the birth of E-store. <br> After E-Store got diversified</p>
                </div>
                <div class="col-md-4">
                    <h1>Join Us</h1><hr><br>
                    <h2>Available Roles</h2>
                    
                    <p style="font-family: 'Alegreya Sans', sans-serif;font-size:22px ;"> 1.Jr./Sr. Web Developer [Full time role + also available as a 6 months Internship]<br>
                        2.Business Apprentice [6 months internship]
                        3.Manager at backend operations [Full time role + also available as a 6 months internship]</p><br>
                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_RQZAm1.json" background="transparent"  speed="1"  style="width: 400px; height: 450px;" loop  autoplay></lottie-player>

                    
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
    
