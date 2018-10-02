<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        

        <title>ADMIN LOGIN</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("abc.png");
                height: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 5vw;
                font-weight: 300px;
            }

            .links{
                color: black;
                padding: 0.25px;
                font-size: 1.4vw;
                font-weight: 600;
                font: black;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                max-width: 980px;
                width: 100%;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #f5f5b2;
                font-size: 5vw;
                font-weight: 200;
                
                font-family: cursive;
                max-width: 940px;
                width:100%;
            }

            #footer {
                color: #f5f5b2;
                
                font-size: 1.3vw;
                font-style: underline;
                font-family: cursive;
            }

            .responsive {
                height: auto;
                max-width: 25%;

             }

             p.thick {
                font-weight: 900;
                font-size: normal;
                font: bolder;
             }   

             #proceedto {
                position:absolute;
                top: 0px;
                right: 0px;
                font-size: 1.5vw;
                max-width: 100%;
                
             }

             .linkanchor{
                color:black;
                text-decoration: none;
             }

            </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" >
            <?php if(Route::has('login')): ?>
                <div class="top-right links"">
                    <?php if(auth()->guard()->check()): ?>
                       <a id="proceedto" href="<?php echo e(url('/home')); ?>" style="color: #19303A"><b>LOGOUT</b></a>
                    
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">LOGIN</a>
                        <a href="<?php echo e(route('register')); ?>">REGISTER</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md" style="color: #19303A">
                    WELCOME ADMIN !
                </div>

                <div class="links" >
                    <a class="linkanchor" href="<?php echo e(url('/newapplicant')); ?>"><b>NEW APPLICANT&nbsp&nbsp</b></a>
                    <a class="linkanchor" href="<?php echo e(url('/listapplicant')); ?>">APPLICANTS LIST&nbsp&nbsp</a>
                    <a class="linkanchor" href="<?php echo e(url('/bank')); ?>">BANKS&nbsp&nbsp</a>
                    <a class="linkanchor" href="<?php echo e(url('/saving')); ?>">SAVINGS&nbsp&nbsp</a>
                    <a class="linkanchor" href="<?php echo e(url('/transaction')); ?>">TRANSACTIONS&nbsp&nbsp</a>
                    <a class="linkanchor" href="https://laravel-news.com">AVAILABLE FUNDS&nbsp&nbsp</a>
                    
                </div>
                <br><br><br>
                <div id="footer" style="color: #093649">
                    <b>
                   
                    <br>
                    ______________________________________<br>
                    BAI MOTIBAI KASARA BAUG BORIVALI TRUST
                </b>
                </div>
            </div>
        </div>
    </div>            
    </div>
<center>
<div class="row" style="padding-top: 70px">
    <div class="col-sm-4">
      <p class="thick"><u>ABOUT US</u></p>
      <img src="ques_mark.png" alt="Image" class="responsive">
      <p class="thick">something about them and what they do....</p>
    </div>
    
    <div class="col-sm-4">
      <p class="thick"><u>OUR GOAL</u></p>
      <img src="target.png" alt="Image" class="responsive"> <br><br><br>
      <p class="thick">the reason they are running the NGO for and their ultimate goal</p>
    </div>
    
    <div class="col-sm-4"> 
      <p class="thick"><u>CONTACT US</u></p>
      <img src="contact.png" alt="Image" class="responsive">
      <p class="thick">info like phone number and email address</p>
    </div>
</div>
<hr>
</center>    
</body>
</html>
