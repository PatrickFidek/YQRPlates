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
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
              @guest  
                <li>
                    <a href="signin">SIGN IN</a>
                </li>
              @endguest
              @auth
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


  <h1>Pick Your Plate</h1>
  
  @if(auth()->user()->type == "customer")
</div>
<?php
$generated;
$userRestaurants = [];
$allRestaurants = [];
foreach($restaurants as $restaurant){
$allRestaurants[] = $restaurant;
if(
  (ucwords($restaurant->food_type) == ucwords(auth()->user()->preference->food_type)) &&
  (ucwords($restaurant->price_range) == ucwords(auth()->user()->preference->price_range))
  &&(($restaurant->south_east && auth()->user()->preference->south_east) || 
  ($restaurant->south_west && auth()->user()->preference->south_west) ||
  ($restaurant->north_east && auth()->user()->preference->north_east) || 
  ($restaurant->north_west && auth()->user()->preference->north_west)) 
  &&(($restaurant->dine_in && auth()->user()->preference->dine_in) ||
   ($restaurant->take_out && auth()->user()->preference->take_out) ||
   ($restaurant->delivery && auth()->user()->preference->delivery) ||
   ($restaurant->drive_thru && auth()->user()->prefernece->drive_thru))
  )
  {
  $userRestaurants[] = $restaurant;
}
}
if(!empty($userRestaurants)){
  $arrayLength = count($userRestaurants);
  $randomIndex = rand(0, $arrayLength - 1);
  $randomUserRestaurant = $userRestaurants[$randomIndex]->id;
}

$count = count($allRestaurants);
$randomNumber = rand(0, $count);
$generated = $allRestaurants[$randomNumber]->id;
?> 

<form id="testForm" method="POST" action="{{ url()->current() }}">
  @csrf
<input type="hidden" name="generated" id="generatedInput" value="{{ $generated }}">

<div class="container-fluid">
  <div class="text-center">
    <button style="
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
" onClick="updateButtonLink(event)" id="allButton">
    <img src="{{ asset('images/Generate.png') }}" alt="Click to Generate" height="325px" id="allImage">
    </button>

</form>
@auth
@if(!empty($userRestaurants))  
  </div>
  <div style="text-align: center; padding-top: 15px">

    <p style="font-size: 18px">Use Preferences</p>
    <form action="POST" action="{{ url()->current() }}">
    <label class="switch">

      <input type="checkbox" id="preferences" onchange="updateGeneratedValue()">
      <span class="slider round"></span>
    </label>
</form>

  </div>
  @else
  <p style="font-size: 18px">You have no restaurants that match your preferences</p>
    @endif
  @endauth
</div>
@endif
@if(auth()->user()->type == "restaurant owner")
<h1>Only Customers Can Use The Suggestion Generator</h1>
</div>
@endif
</div>

<script>
  function updateGeneratedValue() {
    const checkbox = document.getElementById('preferences');
    const generatedInput = document.getElementById('generatedInput');
    @if(!empty($userRestaurants))
    if (checkbox.checked) 
      generatedInput.value = "{{ $randomUserRestaurant }}";
    @endif
     else 
      generatedInput.value = "{{ $generated }}";
  }
  function updateButtonLink(event) {
    const generatedInput = document.getElementById('generatedInput').value;
    window.location.href = '/restaurants/details/' + generatedInput;
    event.preventDefault();
  }
</script>