<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard.css') }}">
  <script src="{{ asset('js/dashboard.js') }}"></script>
</head>

<title>Dashboard</title>

<header>
  <nav class="p-6">
    <div class="flex justify-between items-center">
      <div class="flex justify-between flex-grow">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://yqrplates.com">YQR PLATES</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="profile">PROFILE</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </nav>
</header>

@auth
<div class="jumbotron text-center">
  <h2>{{ auth()->user()->name }}'s Dashboard</h2>
</div>
@if(auth()->user()->type == "customer")
  <?php
  $food_types = 0;
  $restaurant_types = 0;
  $neighborhoods = 0;
  $price_ranges = 0;
  foreach($restaurants as $restaurant){
    if($restaurant->food_type == auth()->user()->preference->food_type)
      $food_types++;
    if($restaurant->price_range == auth()->user()->preference->price_range)
      $price_ranges++;
    if($restaurant->south_west && auth()->user()->preference->south_west)
      $neighborhoods++;
    elseif($restaurant->south_east && auth()->user()->preference->south_east)
      $neighborhoods++;
    elseif($restaurant->north_west && auth()->user()->preference->north_west)
      $neighborhoods++;
    elseif($restaurant->north_east && auth()->user()->preference->north_east)
      $neighborhoods++;
    if ($restaurant->dine_in && auth()->user()->preference->dine_in)
      $restaurant_types++;
    elseif ($restaurant->drive_thru && auth()->user()->preference->drive_thru)
      $restaurant_types++;
    elseif ($restaurant->delivery && auth()->user()->preference->delivery)
      $restaurant_types++;
    elseif ($restaurant->take_out && auth()->user()->preference->take_out)
      $restaurant_types++;
  }
  ?>
@endif
@if(auth()->user()->type == "restaurant owner")
<?php
$food_types = 0;
$restaurant_types = 0;
$neighborhoods = 0;
$price_ranges = 0;
foreach($preferences as $preference){
  if($preference->food_type == auth()->user()->restaurant->food_type)
      $food_types++;
  if($preference->price_range == auth()->user()->restaurant->price_range)
        $price_ranges++;
  if($preference->south_west && auth()->user()->restaurant->south_west)
        $neighborhoods++;
  elseif($preference->south_east && auth()->user()->restaurant->south_east)
        $neighborhoods++;
  elseif($preference->north_west && auth()->user()->restaurant->north_west)
        $neighborhoods++;
  elseif($preference->north_east && auth()->user()->restaurant->north_east)
        $neighborhoods++;
        if ($preference->dine_in && auth()->user()->restaurant->dine_in)
        $restaurant_types++;
elseif ($preference->drive_thru && auth()->user()->restaurant->drive_thru)
        $restaurant_types++;
elseif ($preference->delivery && auth()->user()->restaurant->delivery)
        $restaurant_types++;
elseif ($preference->take_out && auth()->user()->restaurant->take_out)
        $restaurant_types++;
}
?>
@endif
<div id="portfolio" class="container-fluid text-center">
  <div class="row text-center ">
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>  {{ $neighborhoods }}</h1>
          @if(auth()->user()->type == "restaurant owner")
            <p>Customers</p>
          @endif
          @if(auth()->user()->type == "customer")
            <p>Restaurants</p>
          @endif
        </div>
        <div class="panel-body">
          <h3>
            <strong>Neighborhood</strong>
          </h3>
          <p>
            <strong>       
              <?php
                $count = 0;
                $separator = ", ";
                $areas = "";
                $object = auth()->user()->type == "customer" ? auth()->user()->preference : auth()->user()->restaurant;
                if($object->south_east){
                  $areas .= "South-East";
                  $count++;
                }
                if($object->south_west){
                  if($count > 0){
                    $areas .= $separator;
                  }
                  $areas .= "South-West";
                  $count++;
                }
                if($object->north_east){
                  if($count > 0){
                    $areas .= $separator;
                  }
                  $areas .= "North-East";
                  $count++;
                }
                if($object->north_west){
                  if($count > 0){
                    $areas .= $separator;
                  }
                  $areas .= "North-West";
                }
              ?>
            {{ $areas }}</strong>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>  {{ $food_types }}</h1>
          @if(auth()->user()->type == "restaurant owner")
          <p>Customers</p>
          @endif
          @if(auth()->user()->type == "customer")
          <p>Restaurants</p>
          @endif
          <p></p>
        </div>
        <div class="panel-body">
          <h3>
            <strong>Food Type</strong>
          </h3>
          <p>
            <strong>              
              @if(auth()->user()->type == "customer")
                {{ auth()->user()->preference->food_type }}
              @endif
              @if(auth()->user()->type == "restaurant owner")
                {{ auth()->user()->restaurant->food_type }}
              @endif
            </strong>
          </p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row text-center ">
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>  {{ $restaurant_types }}</h1>
          @if(auth()->user()->type == "restaurant owner")
          <p>Customers</p>
          @endif
          @if(auth()->user()->type == "customer")
          <p>Restaurants</p>
          @endif
        </div>
        <div class="panel-body">
          <h3>
            <strong>Restaurant Type</strong>
          </h3>
          <p>
            <strong>            
              <?php
              $count = 0;
              $separator = ", ";
              $types = "";
              $object = auth()->user()->type == "customer" ? auth()->user()->preference : auth()->user()->restaurant;
              if($object->dine_in){
                $types .= "Dine-in";
                $count++;
              }
              if($object->take_out){
                if($count > 0){
                  $types .= ", ";
                }
                $types .= "Take-out";
                $count++;
              }
              if($object->delivery){
                if($count > 0){
                  $types .= ", ";
                }
                $types .= "Delivery";
                $count++;
              }
              if($object->drive_thru){
                if($count > 0){
                  $types .= ", ";
                }
                $types .= "Drive-thru";
                $count++;
              }
            ?>
            {{ $types }}</strong>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>  {{ $price_ranges }}</h1>
          @if(auth()->user()->type == "restaurant owner")
          <p>Customers</p>
          @endif
          @if(auth()->user()->type == "customer")
          <p>Restaurants</p>
          @endif
        </div>
        <div class="panel-body">
          <h3>
            <strong>Price Range</strong>
          </h3>
          <p>
            <strong>        
              @if(auth()->user()->type == "customer")
                {{ auth()->user()->preference->price_range }}
              @endif
              @if(auth()->user()->type == "restaurant owner")
                {{ auth()->user()->restaurant->price_range }}
              @endif
            </strong>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
  @else
  <p>You need to be logged in order to view your dashboard</p>

  @endauth
</div>
