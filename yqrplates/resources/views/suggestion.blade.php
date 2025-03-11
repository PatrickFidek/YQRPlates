<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/suggestion.css') }}">
  <script src="{{ asset('js/suggestion.js') }}"></script>
</head>


<title>Suggestion Generator</title>
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

<?php
foreach($restaurants as $restaurant)
$userRestaurants = [];
if($restaurant->food_type == auth()->user()->preference->food_type && 
$restaurant->price_range == auth()->user()->preference->price_type 
&& ($restaurant->south_west && auth()->user()->south_west 
||  $restaurant->south_east && auth()->user()->south_east 
|| $restaurant->north_west && auth()->user()->north_west
|| $restaurant->north_east && auth()->user()->north_east)
&& ($restaurant->dine_in && auth()->user()->dine_in
|| $restaurant->drive_thru && auth()->user()->drive_thru
|| $restaurant->take_out && auth()->user()->take_out
|| $restaurant->delivery && auth()->user()->delivery)
)
$userRestaurants[] = $restaurant;
?>

<div class="jumbotron text-center">
  @auth
  @if(auth()->user()->type == "customer")
  <h1>Pick Your Plate</h1>
</div>
<div class="container-fluid">
  <div class="text-center">
    <img src="{{ asset('images/Generate.png') }}" alt="Click to Generate" height="325px">
  </div>
  <div style="text-align: center; padding-top: 15px">
    <!-- THIS SHOULD ONLY APPEAR IF THEY ARE SIGNED IN! -->
    <p style="font-size: 18px">Use Prefrences</p>
    <label class="switch">
      <input type="checkbox">
      <span class="slider round"></span>
    </label>
  </div>
</div>
@endif
@if(auth()->user()->type == "restaurant owner")
<h1>Only Customers Can Use The Suggestion Generator</h1>
</div>
@endif
@else
<h1>Please sign in to use suggestion generator</h1>
</div>
@endauth