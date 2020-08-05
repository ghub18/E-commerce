
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/30c71a856e.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300&display=swap" rel="stylesheet">
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
                <div class="col-md-8">
                    <p style="font-family: 'El Messiri', sans-serif;font-size: 40px">LIVE SUPPORT</p><br>
                    <h2>24 hours | 7 days a week | 365 days a year live techinal support</h2><br><hr><br>
                    <p style="font-size: 20px;font-family: 'Alegreya Sans', sans-serif;">If you have a question or doubts, please call us on +123 00000(9.30am to 5.30pm. Monday to Saturday.) or email us at support@e_store.net or use the form below to contact us.<br>

                        If you are looking for a Fabindia store near you, please use our Stores page.<br>

                        If you are interested in joining with us, please do call us.<br>

                        We look forward to being of service.<br>

                        We endeavour to answer all questions within 48 hours.<br>
                    </p>
                </div>
                <div class="col-md-4">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_JmIkVg.json" background="transparent"  speed="1.5"  style="width: 400px; height: 450px;" loop  autoplay></lottie-player>
                 </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="background-color:AliceBlue">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-body form">
                                 <div class="row">
                                     <div class="col-md-4">
                                  <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_qdON1M.json" background="#3490dc"  speed="1.5"  style="width: 100px; height: 100px; margin-top:400 px" loop  autoplay></lottie-player>
                                 </div>
                                     <div class="col-md-8">
                                         <p style="padding-top: 30px;font-family: 'Kaushan Script', cursive;color: darkblue;font-size: 40px;">REACH US..</p>
                                     </div>
                                 </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="md-form mb-0">
                                            <input type="text" id="form-contact-name" class="form-control form-control-lg ">
                                            <label for="form-contact-name" class="" style="font-size: 15px">Your name</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="md-form mb-0">
                                               <input type="text" id="form-contact-email" class="form-control form-control-lg">
                                               <label for="form-contact-email" class="" style="font-size: 15px">Your email</label>
                                           </div>
                                         </div>
                                    </div>
                                    <div class="row">

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form-contact-phone" class="form-control form-control-lg">
                    <label for="form-contact-phone" class="" style="font-size: 15px">Your phone</label>
                  </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form-contact-company" class="form-control form-control-lg">
                    <label for="form-contact-company" class="" style="font-size: 15px">Your company</label>
                  </div>
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <textarea id="form-contact-message" class="form-control form-control-lg md-textarea" rows="4"></textarea>
                    <label for="form-contact-message" style="font-size: 15px">Your message</label><br>
                    
                  </div>
                </div>
                <!-- Grid column -->

              </div>
              <div class="row">
                  <div class="col">
                      <button class="btn btn-primary btn-lg" type="submit">SEND</button>
                  </div>
              </div>

            </div>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4">

              <div class="card-body contact text-center h-100 white-text" style="background-color: gainsboro">

              <h2 class="font-weight-bold my-4 pb-2">Contact information</h2>
              <ul>
                  <li>
                      <p style="font-size: 15px"><span class="fa fa-map-marker-alt fa-lg pr-2" "></span> New York, 94126, USA</p>
                  </li>
                  <li>
                  <p style="font-size: 15px"><i class="fa fa-phone pr-2"></i> +123 00000</p>
                </li>
                 <li>
                  <p style="font-size: 15px"><i class="fas fa-envelope pr-2"></i>support@e_store.net</p>
                </li>
              </ul>
              <hr class="hr-light my-4">
              <ul class="list-inline text-center list-unstyled">
                <li class="list-inline-item">
                  <a class="p-2 fa-lg tw-ic">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg li-ic">
                    <i class="fab fa-linkedin-in"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg ins-ic">
                    <i class="fab fa-instagram"> </i>
                  </a>
                </li>
              </ul>
                                </div>
                            </div>
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
    
