<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/preferences.css') }}">

<title>Preferences</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('js/preferences.js') }}"></script>

</head>

<header>
  <nav class="p-6">
    <div class="flex justify-between items-center">
      <div class="flex justify-between flex-grow">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://yqrplates.com">YQR PLATES</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </nav>
</header>

<div class="jumbotron text-center">
  <h1>Enter Preferences</h1>
</div>

<div class="center">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4" >
      <label>
        <span>Neighbourhood</span>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
        <div class="row d-flex justify-content-center mt-100">
            <select id="choices-multiple-remove-button" multiple>
              <option value="Neighborhood 1">Neighboorhood 1</option>
              <option value="Neighborhood 2">Neighborhood 2</option>
              <option value="Neighborhood 3">Neighborhood 3</option>
            </select>
        </div>
      </label>
    </div>
    <div class="col-sm-4" >
      <label>
        <span>Food Type</span>
        <div class="row d-flex justify-content-center mt-100">
            <select id="choices-multiple-remove-button" multiple>
              <option value="Food Type">Food Type 1</option>
              <option value="Food Type">Food Type</option>
              <option value="Food Type">Food Type</option>
            </select>
        </div>
      </label>  
    </div>
    <div class="col-sm-2"></div>
  </div>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4" >
      <label>
        <span>Restaurant Type</span>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
        <div class="row d-flex justify-content-center mt-100">
            <select id="choices-multiple-remove-button" multiple>
              <option value="Restaurant Type">Restaurant Type</option>
              <option value="Restaurant Type">Restaurant Type</option>
              <option value="Restaurant Type">Restaurant Type</option>
            </select>
        </div>
      </label>
    </div>
    <div class="col-sm-4" >
      <label>
        <span>Price Range</span>
        <div class="row d-flex justify-content-center mt-100">
            <select id="choices-multiple-remove-button" multiple>
          <option value="Price Range">Price Range</option>
          <option value="Price Range">Price Range</option>
          <option value="Price Range">Price Range</option>
            </select>
        </div>
      </label>  
    </div>
    <div class="col-sm-2"></div>
  </div>

  <button type="button" class="submit" background-color:#fff>Continue</button>
</div>