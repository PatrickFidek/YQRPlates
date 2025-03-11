<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profile.css') }}">
  <script src="{{ asset('js/profile.js') }}"></script>
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
@auth
<h2>Welcome, {{ auth()->user()->name }}!</h2>
<form action="/logout" method="POST">
  @csrf
  <button class="btn btn-lg largebtn" type="submit">Log Out</button>
</div>

@if (session('success'))
  <div class="flash-message" id="flash-message">
    {{ session('success') }}
</div>
@endif



<div id="about" class="container-fluid" style="width: 400px">
  <div class="row">
    <div class="text-center">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>
              <?php
              $title = "";
              if(auth()->user()->type == "customer"){
                $title = "Current Preferences";
}
              if(auth()->user()->type == "restaurant owner"){
                $title= "Restaurant Details";
              }
?>
          {{ $title }}
          </h1>
        </div>
        @if(auth()->user()->type == "restaurant owner")
        <div class="panel-body">
          <p>
            <strong>Name: </strong> 
                {{ auth()->user()->restaurant->name }}
              
          </p>
        </div>
        @endif
        <div class="panel-footer">
          <p>
            <strong>Price Range: </strong> 
              @if(auth()->user()->type == "customer")
                {{ auth()->user()->preference->price_range }}
              @endif
              @if(auth()->user()->type == "restaurant owner")
                {{ auth()->user()->restaurant->price_range }}
              @endif
          </p>
        </div>
        <div class="panel-footer">
          <p>
            <strong>Food Type: </strong> 
              @if(auth()->user()->type == "customer")
                {{ auth()->user()->preference->food_type }}
              @endif
              @if(auth()->user()->type == "restaurant owner")
                {{ auth()->user()->restaurant->food_type }}
              @endif
          </p>
        </div>
        <div class="panel-footer">
          <p>
            <strong>Restaurant Type: </strong> 
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
            {{ $types }}
          </p>
        </div>
        <div class="panel-footer">
          <p>
            <strong>Location: </strong> 
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
            {{ $areas }}
          </p>
        </div>
      </div>
      <!-- should say update prfences/update menu/restaurant depending on restaurant owner or customer -->
      <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/{{ auth()->user()->type == "customer" ? 'preferences' : 'uploadrestaurant' }}';">
        @if(auth()->user()->type == "customer")
          Update Preferences
        @endif
        @if(auth()->user()->type == "restaurant owner")
          Update Restaurant Details
        @endif
      </button>
    </div>
    </br>
    <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/dashboard';">View Dashboard</button>
    <br>
    <!-- this should only display if they are restaurant owner -->
    @if(auth()->user()->type == "restaurant owner")
      <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/promotions';">Add Promotion</button>
    @endif
  </div>
</div>
  @else
  <p>You need to be logged in order to view your profile</p>
  @endauth
</div>