
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer {
      
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; 
      margin: auto;
      min-height:200px;
  }

  
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
  </style>
</head>
<body>

<nav class="navbar navbar-default" style="background-color: rgb(35,162,218);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/" style="color: white">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo e(url('/newapplicant')); ?>" style="color: white">New Applicant</a></li>
        <li><a href="<?php echo e(url('/listapplicant')); ?>"  style="color: white">Applicants List</a></li>
        <li>
           <div class="dropdown">
             <button class="dropbtn">Banks
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="<?php echo e(url('/new_bank')); ?>">New Bank</a>
                 <a href="<?php echo e(url('/list_bank')); ?>">Bank Detail</a>
                 <a href="<?php echo e(url('/Ajax')); ?>">Ajax</a>
              </div>
          </div> 
        </li>
        <li><div class="dropdown">
             <button class="dropbtn">Savings
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="<?php echo e(url('/new_saving')); ?>">Add A Savings Account</a>
                 <a href="<?php echo e(url('/list_savings')); ?>">Accounts Details</a>
                 
              </div></li>
        <li><div class="dropdown">
             <button class="dropbtn">Transactions
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="<?php echo e(url('/new_fd')); ?>">Add FD Account</a>
                 <a href="<?php echo e(url('/new_expense')); ?>">Local Expense</a>
                 
              </div></li>
        <li><a href="/" target="iframe" style="color: white">Available funds</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(url('/home')); ?>" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="carousal.png" alt="Image" style="max-width:27%; height: auto;">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="carousal1.png" alt="Image" style="max-width: 58%; height: auto;">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <center>
      <img src="medical_aid.png" class="img-responsive"  style="max-width:35%; height:auto;"  alt="Image">
      <p>Medical Aid</p>
      </center>
    </div>
    <div class="col-sm-4"> 
      <center>
      <img src="edu.png" class="img-responsive"  style="max-width:35%; height:auto;"  alt="Image">
      <p>Support Education</p>    
      </center>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center" style="background-color:rgb(35,162,218);">
 <marquee> <div style="font-weight: bold; font-size: 20px">
 BAI MOTIBAI KASARA BAUG BORIVALI CHARITABLE TRUST
</div>
</marquee>
</footer>

</body>
</html>
