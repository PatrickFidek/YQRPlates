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
    }

    h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
    }

    h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
    }

    .jumbotron {
      background-color: #ff7e2e;
      color: #fff;
      padding: 75px;
      font-family: Montserrat, sans-serif;
    }

    .container-fluid {
      padding: 60px 50px;
    }

    .bg-grey {
      background-color: #f6f6f6;
    }

    .logo-small {
      color: #ff7e2e;
      font-size: 50px;
    }

    .logo {
      color: #ff7e2e;
      font-size: 200px;
    }

    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
    }

    .carousel-control.right,
    .carousel-control.left {
      background-image: none;
      color: #ff7e2e;
    }

    .carousel-indicators li {
      border-color: #ff7e2e;
    }

    .carousel-indicators li.active {
      background-color: #ff7e2e;
    }

    .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
    }

    .item span {
      font-style: normal;
    }

    .panel {
      border: 1px solid #ff7e2e;
      border-radius: 0 !important;
      transition: box-shadow 0.5s;
    }

    .panel:hover {
      box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
    }

    .panel-footer .btn:hover {
      border: 1px solid #ff7e2e;
      background-color: #fff !important;
      color: #ff7e2e;
    }

    .panel-heading {
      color: #fff !important;
      background-color: #ff7e2e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
    }

    .panel-footer {
      background-color: white !important;
    }

    .panel-footer h3 {
      font-size: 32px;
    }

    .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
    }

    .panel-footer .btn {
      margin: 15px 0;
      background-color: #ff7e2e;
      color: #fff;
    }

    .navbar {
      margin-bottom: 0;
      background-color: #ff7e2e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
    }

    .navbar li a,
    .navbar .navbar-brand {
      color: #fff !important;
    }

    .navbar-nav li a:hover,
    .navbar-nav li.active a {
      color: #ff7e2e !important;
      background-color: #fff !important;
    }

    .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
    }

    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #ff7e2e;
    }

    .slideanim {
      visibility: hidden;
    }

    .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
    }

    .largebtn {
    background-color: #79a263; 
    color: #303030;
    width: 250px;
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

    @keyframes slide {
      0% {
        opacity: 0;
        transform: translateY(70%);
      }

      100% {
        opacity: 1;
        transform: translateY(0%);
      }
    }

    @-webkit-keyframes slide {
      0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
      }
    }

    @media screen and (max-width: 768px) {
      .col-sm-4 {
        text-align: center;
        margin: 25px 0;
      }

      .btn-lg {
        width: 100%;
        margin-bottom: 35px;
      }
    }

    @media screen and (max-width: 480px) {
      .logo {
        font-size: 150px;
      }
    }

  </style>
</head>

<title>Profile</title>

<header>
    <nav class="p-6">
        <div class="flex justify-between items-center">
            <div class="flex justify-between flex-grow">
            <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://yqrplates.com">YQR PLATES</a>
    </div>
  </div>
</nav>
            </div>
        </div>
    </nav>
</header>

<div class="jumbotron text-center">
  <h1>User's Name</h1>
</div>

<div id="about" class="container-fluid" style="width: 400px">
  <div class="row">
    <div class="text-center">
            <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Current Prefences</h1>
        </div>
        <div class="panel-body">
          <p><strong>Price Range:</strong> $10 - $15</p>
        </div>
        <div class="panel-footer">
          <p><strong>Food Type:</strong> Asian</p>
        </div>
        <div class="panel-footer">
          <p><strong>Restaurant Type:</strong> Dine-in, Take-out</p>
        </div>
        <div class="panel-footer">
        	<p><strong>Location:</strong> South Albert, East, North</p>
        </div>
      </div> 
         <!-- should say update prfences/update menu depending on restaurant owner or customer -->
      <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/preferences';">Update Preferences</button>
    </div>
      </br>
     	
      <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/dashboard';">View Dashboard</button>
      <br>
      <!-- this should only display if they are restaurant owner -->
      <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/promotions';">Add Promotion</button>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function() {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    $(window).scroll(function() {
      $(".slideanim").each(function() {
        var pos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
    });
  })
</script>