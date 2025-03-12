<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/restaurantdetails.css') }}">
  <script src="{{ asset('js/restaurantdetails.js') }}"></script>
  <style>
    .largebtn {
      background-color: #ff7e2e !important;
      color: #fff;
      width: 250px;
      border-radius: 25px;
      display: flex;
      justify-content: center;
      align-items: center;
      float: none;
      margin: 0 auto;
    }

    .largebtn:hover {
      background-color: #fff !important;
      border-width: 3px;
      border: 3px solid #79a263;
    }
  </style>
</head>
<!-- This could also be the restaurant name -->
<title>{{ $restaurant->name }}</title>
<html>
  <body>
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
                    <li>
                      <a href="signin">SIGN IN</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </nav>
    </header>
    <div class="jumbotron text-center">
      <h1>{{ $restaurant->name }}</h1>
    </div>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-3">
          <span class="glyphicon glyphicon-apple logo-small"></span>
          <h4>{{ ucwords($restaurant->food_type) }}</h4>
        </div>
        <div class="col-sm-3">
          <span class="glyphicon glyphicon-cutlery logo-small"></span>
          <h4> <?php
              $count = 0;
              $separator = ", ";
              $types = "";
              if($restaurant->dine_in){
                $types .= "Dine-in";
                $count++;
              }
              if($restaurant->take_out){
                if($count > 0){
                  $types .= ", ";
                }
                $types .= "Take-out";
                $count++;
              }
              if($restaurant->delivery){
                if($count > 0){
                  $types .= ", ";
                }
                $types .= "Delivery";
                $count++;
              }
              if($restaurant->drive_thru){
                if($count > 0){
                  $types .= ", ";
                }
                $types .= "Drive-thru";
                $count++;
              }
            ?> {{ $types }}
          </h4>
        </div>
        <div class="col-sm-3">
          <span class="glyphicon glyphicon-usd logo-small"></span>
          <h4>{{ ucwords($restaurant->price_range) }}</h4>
        </div>
        <div class="col-sm-3">
          <span class="glyphicon glyphicon-map-marker logo-small"></span>
          <h4> <?php
              $count = 0;
              $separator = ", ";
              $areas = "";
              if($restaurant->south_east){
                $areas .= "South-East";
                $count++;
              }
              if($restaurant->south_west){
                if($count > 0){
                  $areas .= $separator;
                }
                $areas .= "South-West";
                $count++;
              }
              if($restaurant->north_east){
                if($count > 0){
                  $areas .= $separator;
                }
                $areas .= "North-East";
                $count++;
              }
              if($restaurant->north_west){
                if($count > 0){
                  $areas .= $separator;
                }
                $areas .= "North-West";
              }
            ?> {{ $areas }}
          </h4>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center bg-grey">
      <div class="row text-center">
        <div class="align-center">
          <a class="largebtn btn btn-lg" href="{{ $restaurant->menu_link }}" target="_blank">View Menu</a>
        </div>
        <br>
        <h2>Promotions</h2>
        
        @if($restaurant->promotions->isEmpty()) 
        <h4>No Promotions Available</h4>
        @else
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <ol class="carousel-indicators">
            @for($i = 0; $i < count($restaurant->promotions); $i++)

            @if($i == 0)
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            @else
            <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
            @endif
            @endfor
          </ol>
          <div class="carousel-inner" role="listbox">
          @foreach($restaurant->promotions as $promotion)
          @if($loop->first) 
            <div class="item active">
              <h4>{{ $promotion->promotion }}</h4>
            </div> 
            @else
            <div class="item">
              <h4>{{ $promotion->promotion }}
            </div>
            @endif
            @endforeach
           
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
    @endif
    </div> 
  </body>
</html>