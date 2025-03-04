<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    width: inherit;
  }
  h2 {
    font-size: 30px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  .jumbotron {
    background-color: #ff7e2e;
    color: #fff;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .largebtn {
    width: 85%;
    height: 25%;
    background-color: #79a263; 
    border-radius: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    float: none;
    margin: 0 auto;
  }
  .largebtn:hover{
    background-color: #fff;
    border-width: 3px;
    border: 3px solid #79a263;
  }
  .item{
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #ff7e2e;
    z-index: 9999;
    border: 0;
    font-size: 18px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #ff7e2e !important;
    background-color: #fff !important;
  }
  .navbar-default {
    border-color: transparent;
    color: #fff !important;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>

<title>YQR Plates</title>

<header>
    <nav class="p-6">
        <div class="flex justify-between items-center">
            <div class="flex justify-between flex-grow">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="signin">SIGN IN</a></li>
                        </u>
                      </div>
                    </div>
                </nav>
            </div>
        </div>
    </nav>
</header>
<div class="flex justify-between jumbotron text-center">
  <img src="{{ asset('images/YQRPlates.png') }}" alt="YQR Plates" height="325px">
</div>
<div class="container-fluid">
  <div class="row items-center">
    <div class="col-sm-2"></div>
    <div class="col-sm-4" >
      <div class="largebtn" onclick="location.href='https://yqrplates.com/suggestion';">
        <h2>Pick Your Plate</h2>
      </div>
    </div>
    <div class="col-sm-4" >
      <div class="largebtn" onclick="location.href='https://yqrplates.com/restaurants';">
        <h2>Restaurants</h2>
      </div>    
    </div> 
    <div class="col-sm-2"></div>
  </div>
</div>