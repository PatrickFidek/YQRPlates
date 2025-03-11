<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/promotion.css') }}">
  <script src="{{ asset('js/promotions.js') }}"></script>
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
<title>Promotions</title>title> <div class="jumbotron text-center">
  <h1>Restaurant Name</h1>
</div>
<div id="about" class="container-fluid" style="width: 400px">
  <div class="row">
    <div class="panel panel-default text-center">
      <div class="panel-heading">
        <h1>Add Promotion</h1>
      </div>
      <form action="/promotions" method="POST"> 
        @csrf
        <div class="panel-body">
          <p>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="font-family: 'Open Sans', Helvetica, Arial, sans-serif;"></textarea>
          </p>
        </div>
        <div class="panel-footer">
          <button type="submit" class="submit" background-color:#fff onclick="location.href='https://yqrplates.com/profile';">Add Promotion</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div>
  <div id="pricing" class="container-fluid">
    <h2>Current Promotions</h2>
    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Promo 1</h1>
          </div>
          <div class="panel-body">
            <p>
              <strong>Food was amazing!!</strong>
            <p>
          </div>
          <div class="panel-footer">
            <button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter" style="width: 100%"> Remove Promotion </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Promo 1</h1>
          </div>
          <div class="panel-body">
            <p>
              <strong>Food was amazing!!</strong>
            <p>
          </div>
          <div class="panel-footer">
            <button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter" style="width: 100%"> Remove Promotion </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Promo 1</h1>
          </div>
          <div class="panel-body">
            <p>
              <strong>Food was amazing!!</strong>
            <p>
          </div>
          <div class="panel-footer">
            <button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter" style="width: 100%"> Remove Promotion </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Promo 1</h1>
          </div>
          <div class="panel-body">
            <p>
              <strong>Food was amazing!!</strong>
            <p>
          </div>
          <div class="panel-footer">
            <button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter" style="width: 100%"> Remove Promotion </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="padding-top: 15%;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 10px">
              <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title text-center" id="exampleModalLongTitle">Are you sure you want to remove</h2>
            <h3 class="text-center">promo 1?</h3>
          </div>
          <div class="modal-body text-center">
            <p>
              <strong>Doing so will remove this promotion from your restaurant</strong>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="submit" data-dismiss="modal" style="width: 25%">Cancel</button>
            <button type="button" class="submit" style="width: 40%">Confirm Removal</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
