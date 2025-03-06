<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/restaurantdetails.css') }}">
</head>

<!-- This could also be the restaurant name -->
<title>Restaurant Details</title>

<header>
  <nav class="p-6">
    <div class="flex justify-between items-center">
      <div class="flex justify-between flex-grow">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://yqrplates.com">YQR PLATES</a>
            </div>
            <!-- THIS SHOULD ONLY SHOW SIGN IN IF THEY ARENT SIGNED IN IF NOT IT SHOULD HAVE A LINK TO THEIR PROFILE -->
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signin">SIGN IN</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </nav>
</header>

<div class="jumbotron text-center">
  <h1>Wok Box</h1> 
</div>

<div class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-apple logo-small"></span>
      <h4>Asian</h4>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>Dine-In, Take-Out</h4>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>$10 - $15</h4>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-map-marker logo-small"></span>
      <h4>Harbour Landing, East, North</h4>
    </div>
  </div>
</div>

<div class="container-fluid text-center bg-grey">
  <div class="row">
    <div class="col-sm-6">
      <h2>Menu</h2>
      <div class="row text-center">
        <div class="col-sm-12 text-center">
          <div class="align-center">
            <!-- this needs to be the restaurant menu file name -->
            <a href="{{ asset('menus/menufile.pdf') }}" download> <h3>Download </h3></a>
            <embed src="{{ asset('menus/menufile.pdf') }}" width="600px" height="200px" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <h2>Promotions</h2><br>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>Promotion 1<br><span>Double line</span></h4>
          </div>
          <div class="item">
            <h4>Promotion 2</h4>
          </div>
          <div class="item">
            <h4>Promotion 3</h4>
          </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div> 

<script>
$(document).ready(function(){
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
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
