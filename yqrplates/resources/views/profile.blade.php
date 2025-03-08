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
  <button class="btn btn-lg largebtn" type="button">Log Out</button>
</div>
<div id="about" class="container-fluid" style="width: 400px">
  <div class="row">
    <div class="text-center">
      <div class="panel panel-default text-center">
        <!-- should say their restaurant and list details of it if restaurant owner -->
        <div class="panel-heading">
          <h1>Current Prefences</h1>
        </div>
        <div class="panel-body">
          <p>
            <strong>Price Range:</strong> $10 - $15
          </p>
        </div>
        <div class="panel-footer">
          <p>
            <strong>Food Type:</strong> Asian
          </p>
        </div>
        <div class="panel-footer">
          <p>
            <strong>Restaurant Type:</strong> Dine-in, Take-out
          </p>
        </div>
        <div class="panel-footer">
          <p>
            <strong>Location:</strong> South Albert, East, North
          </p>
        </div>
      </div>
      <!-- should say update prfences/update menu/restaurant depending on restaurant owner or customer -->
      <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/preferences';">Update Preferences</button>
    </div>
    </br>
    <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/dashboard';">View Dashboard</button>
    <br>
    <!-- this should only display if they are restaurant owner -->
    <button class="btn btn-lg largebtn" type="button" onclick="location.href='https://yqrplates.com/promotions';">Add Promotion</button>
  </div>
</div>
  @else
  <p>You need to be logged in the view your profiles.</p>
  @endauth
</div>