
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
        <li><a href="{{ url('/newapplicant') }}" target="iframe" style="color: white">New Applicant</a></li>
        <li><a href="{{ url('/listapplicant') }}" target="iframe" style="color: white">Applicants List</a></li>
        <li>
           <div class="dropdown">
             <button class="dropbtn">Banks
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="{{ url('/new_bank') }}">New Bank</a>
                 <a href="{{ url('/list_bank') }}">Bank Detail</a>
                 <a href="#">Ajax</a>
              </div>
          </div> 
        </li>
        <li>
          <div class="dropdown">
             <button class="dropbtn">Savings
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="{{ url('/new_saving') }}">ADD A SAVINGS ACCOUNT</a>
                 <a href="{{ url('/list_savings') }}">ACCOUNTS' DETAILS</a>
                 
              </div>
        </li>
        <li><div class="dropdown">
             <button class="dropbtn">Transactions
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="{{ url('/new_fd') }}">ADD FD ACCOUNT</a>
                 <a href="{{ url('/new_expense') }}">LOCAL EXPENSE</a>
                 <a href="{{ url('/list_disbursements') }}">SANCTION DETAILS</a>
                 <a href="{{ url('/fd_list') }}">FD LIST</a>
                 
              </div></li>
        <li><a href="/" target="iframe" style="color: white">Available funds</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>



