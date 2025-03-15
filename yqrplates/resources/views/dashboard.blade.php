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
              @auth
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="profile">PROFILE</a>
                </li>
                @endauth
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </nav>
</header>

<div class="jumbotron text-center">
  @auth
      <h2>{{ auth()->user()->name }}'s Dashboard</h2>
    </div>
    <div id="portfolio" class="container-fluid text-center">
      <div class="row text-center ">
        <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>{{ auth()->user()->dashboard->d_neighborhoods }}</h1>
              @if(auth()->user()->type == "restaurant owner")
                <p>Customers</p>
              @endif
                  @if(auth()->user()->type == "customer")
                <p>Restaurants</p>
              @endif
            </div>
            <div class="panel-body">
              <h3><strong>Neighborhood</strong></h3>
              <p><strong>
              <?php
                $count = 0;
                $separator = ", ";
                $areas = "";
                $object = auth()->user()->type == "customer" ? auth()->user()->preference : auth()->user()->restaurant;
                if ($object->south_east) {
                  $areas .= "South-East";
                  $count++;
                }
                if ($object->south_west) {
                  if ($count > 0) {
                    $areas .= $separator;
                  }
                  $areas .= "South-West";
                  $count++;
                }
                if ($object->north_east) {
                  if ($count > 0) {
                    $areas .= $separator;
                  }
                  $areas .= "North-East";
                  $count++;
                }
                if ($object->north_west) {
                  if ($count > 0) {
                    $areas .= $separator;
                  }
                  $areas .= "North-West";
                }
                if($areas == "")
                  $areas = "None";
                ?>
                {{ $areas }}
              </strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>{{ auth()->user()->dashboard->d_food_type }}</h1>
              @if(auth()->user()->type == "restaurant owner")
                <p>Customers</p>
              @endif
              @if(auth()->user()->type == "customer")
                <p>Restaurants</p>
              @endif
              <p></p>
            </div>
            <div class="panel-body">
              <h3><strong>Food Type</strong></h3>
              <p><strong>
                @if(auth()->user()->type == "customer")
                  {{ auth()->user()->preference->food_type }}
                @endif
                @if(auth()->user()->type == "restaurant owner")
                  {{ auth()->user()->restaurant->food_type }}
                @endif
              </strong></p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row text-center ">
        <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>{{ auth()->user()->dashboard->d_restaurant_types }}</h1>
              @if(auth()->user()->type == "restaurant owner")
                <p>Customers</p>
              @endif
              @if(auth()->user()->type == "customer")
                <p>Restaurants</p>
              @endif
            </div>
            <div class="panel-body">
              <h3><strong>Restaurant Type</strong></h3>
              <p><strong>
              <?php
                $count = 0;
                $separator = ", ";
                $types = "";
                $object = auth()->user()->type == "customer" ? auth()->user()->preference : auth()->user()->restaurant;
                if ($object->dine_in) {
                  $types .= "Dine-in";
                  $count++;
                }
                if ($object->take_out) {
                  if ($count > 0) {
                    $types .= ", ";
                  }
                  $types .= "Take-out";
                  $count++;
                }
                if ($object->delivery) {
                  if ($count > 0) {
                    $types .= ", ";
                  }
                  $types .= "Delivery";
                  $count++;
                }
                if ($object->drive_thru) {
                  if ($count > 0) {
                    $types .= ", ";
                  }
                  $types .= "Drive-thru";
                  $count++;
                }
                if($types == "")
                  $types = "None";
                ?>
                {{ $types }}
              </strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>{{ auth()->user()->dashboard->d_price_range }}</h1>
              @if(auth()->user()->type == "restaurant owner")
                <p>Customers</p>
              @endif
              @if(auth()->user()->type == "customer")
                <p>Restaurants</p>
              @endif
            </div>
            <div class="panel-body">
              <h3><strong>Price Range</strong></h3>
              <p><strong>
                @if(auth()->user()->type == "customer")
                  {{ auth()->user()->preference->price_range }}
                @endif
                @if(auth()->user()->type == "restaurant owner")
                  {{ auth()->user()->restaurant->price_range }}
                @endif
              </strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
@else
  <p>You need to be logged in order to view your dashboard</p>
  <button class="btn btn-lg largebtn" onclick="window.location.href='/signin'">Sign in</button>
</div>
@endauth
