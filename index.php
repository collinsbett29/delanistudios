<?php session_start(); ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <title>Delani</title>
        <style>
            .div{
            margin: 700px;
            }
        </style>
    </head>
    <body>
        <style>
            #welcome{
            background-image: url("img/img1.jpg");
            background-size: 100%;
            background-size: cover;
            height: 669px;
            text-align: center;
            }  
            #welcome h1{
            padding-top:10%; 
            }
        </style>
        <div class="container-fluid">
            <div class="row-fluid" id="welcome">
                <br>
                <br>
                <br>
                <div class="col">
                    <img src="img/logo.png" alt="logo" class="center">
                    <br>
                    <br>
                    <h2 class="text-center" style="color: #ffffff"><b>WELCOME<br>TO DELANI STUDIO</b></h2>
                    <br>
                    <p class="text-center" style="color: #ffffff"><b>AMAZING PEOPLE ARE MAKING DESIGN</b></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="img/mouse click.png" alt="mouse click" class="center">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row-fluid">
                <div class="col">
                    <style>
                        #About{
                        background-color: #ffffff;
                        height:500 !important;
                        };
                    </style>
                    <div id="About">
                        <h1 class="text-center"><b>ABOUT US<b></h1>
                        <br>
                        <p class="text-center">When you work with us, you are part of the team of committed collaborators.All aspects of our software development process are intergrated,iterative</p>
                        <p class="text-center"> and agile.</p>
                        <br>
                        <p class="text-center">Our approach unifies design,development and project management to create exceptional products.</p>
                        <p class="text-center">we start each by understanding your bussiness goals,the user's needs and the product requirements</p>
                        <p class="text-center">Then we help translate them into effective and elegant solutions</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row-fluid">
                <br>
                <div class="col">
                    <style>
                        #services{
                        background-image: url("img/s,image.jpg");
                        height: 488px;
                        }
                    </style>
                    <div id="services">
                        <br>
                        <br>
                        <br>
                        <br>
                        <h1 class="text-center" style="color: #ffffff"><b>SERVICES</b></h1>
                        <br>
                        <br>
                        <br>
                        <p class="text-center" style="color: #ffffff">Before we sign a contract or write a line of code our team will spend neccessary time needed to understand your product vision</p>
                        <p class="text-center" style="color: #ffffff">The outcome of this scooping session is proposal or high-level statement of work.</p>
                        <p class="text-center" style="color: #ffffff">based on our requirements,we can provide a complete offering or just the pieces you need.</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row-fluid">
                <div class="col">
                    <h1 class="text-center"><b>WHAT WE DO</b></h1>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <style>
                    .center{
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    }
                </style>
                <div class="col-4">
                    <img src="img/design.png" alt="" class="center">
                    <p class="text-center">DESIGN</p>
                </div>
                <div class="col-4">
                    <img src="img/dev.png" alt="" class="center">
                    <p class="text-center">DEVELOPMENT</p>
                </div>
                <div class="col-4">
                    <img src="img/product.png" alt="" class="center">
                    <p class="text-center">PRODUCT MANAGEMENT</p>
                </div>
            </div>
            <div class="row">
                <br>
                <br>
                <div class="col">
                    <h1 class="text-center"><b>PORTFOLIO</b></h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="img/portfolio./work4.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-3">
                    <img src="img/portfolio./work3.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-3">
                    <img src="img/portfolio./work2.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-3">
                    <img src="img/portfolio./work1.jpg" alt="" class="img-thumbnail">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-3">
                    <img src="img/portfolio./work5.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-3">
                    <img src="img/portfolio./work6.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-3">
                    <img src="img/portfolio./work7.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-3">
                    <img src="img/portfolio./work8.jpg" alt="" class="img-thumbnail">
                </div>
            </div>
            <br>
            <br>
            <style>
                #footer{
                background-image: url("img/image2.jpg");
                height: 500px;
                }
            </style>
            <div class="row" id="footer">
                <div class="col-2">
                </div>
                <div class="col-8">
                        <form role="form" id="contact-form" class="contact-form" style="margin-top: 150px !important;" action="action.php">
                                <div class="row">
                                    <div class="col-6">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name">
                                      </div>
                                  </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                                      </div>
                                  </div>
                                  </div>
                                  <div class="row">
                                      <div class="col">
                                      <div class="form-group">
                                        <textarea class="form-control textarea" rows="3" name="message" id="Message" placeholder="Message"></textarea>
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col">
                              <button type="submit" class="btn-success">Send a message</button>
                              </div>
                              </div>
                            </form>
                </div>
                <div class="col-2">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <img src="img/social icons./twitter.png" alt="" class="">
                </div>
                <div class="col">
                    <img src="img/social icons./dribble.png" alt="">
                </div>
                <div class="col">
                    <img src="img/social icons./facebook.png" alt="">
                </div>
                <div class="col">
                    <img src="img/social icons./g plus.png" alt="">
                </div>
                <div class="col">
                    <img src="img/social icons./skype.png" alt="">
                </div>
                <div class="col">
                    <img src="img/social icons./stumble upon.png" alt="">
                </div>
                <div class="col">
                    <img src="img/social icons./behance.png" alt="">
                </div>
                <div class="col">
                    <img src="img/social icons./pinterest.png" alt="">
                </div>
                <div class="col">
                    <img src="img/social icons./flickr.png" alt="">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <h5 class="text-center">DELANI STUDIOS<br>&copy 2019 </h5>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>