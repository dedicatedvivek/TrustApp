<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        

        <title>ADMIN LOGIN</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("bgpic2.png");
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
                font-size: 84px;
            }

            .links > a {
                color: #0A2633;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #f5f5b2;
                font-weight: lighter;
                font-variant: normal;
                font-family: cursive;
            }

            #footer {
                color: #f5f5b2;
                
                size: 20%;
                font-style: underline;
                font-family: cursive;
                
            }

            </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" >
            <?php if(Route::has('login')): ?>
                <div class="top-right links"">
                    <?php if(auth()->guard()->check()): ?>
                       
                        
                    <a href="<?php echo e(url('/home')); ?>" style="color: #19303A"><b>PROCEED TO LOGOUT</b></a>
                    
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

                <div class="links">
                    <a href="<?php echo e(url('/newapplicant')); ?>"><b>NEW APPLICANT</b></a>
                    <a href="<?php echo e(url('/listapplicant')); ?>">APPLICANTS LIST</a>
                    <a href="<?php echo e(url('/bank')); ?>">BANKS</a>
                    <a href="<?php echo e(url('/saving')); ?>">SAVINGS</a>
                    <a href="<?php echo e(url('/transaction')); ?>">TRANSACTIONS</a>
                    <a href="https://laravel-news.com">AVAILABLE FUNDS</a>
                    
                </div>
                <br><br><br>
                <div id="footer" style="color: #093649">
                    <b>
                   
                    <br><br>
                    ______________________________________<br>
                    BAI MOTIBAI KASARA BAUG BORIVALI TRUST
                </b>
                </div>
            </div>
        </div>
        
    </div>            
    </div>
    </body>
</html>
