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

<title>Promotions</title>
 <div class="jumbotron text-center">
@auth
  <h1>{{ auth()->user()->restaurant->name }}</h1>
 </div>
<!--@if(auth()->user()->type == "restaurant owner")-->
 <div id="about" class="container-fluid" style="width: 400px">
  <div class="row">
    <div class="panel panel-default text-center">
      <div class="panel-heading">
        <h1>Add Promotion</h1>
      </div>
      <form action="{{ url('/promotions') }}" method="POST"> 
        @csrf
        <div class="panel-body">
          <p>
            <textarea name="promotion_entry" value="{{ old('promotion_entry')}}" class="form-control" id="exampleFormControlTextarea1" rows="3" style="font-family: 'Open Sans', Helvetica, Arial, sans-serif;"></textarea>
            @if ($errors->has('promotion_entry')) 
              <div id="promotion-error" class="error-message">
                {{$errors->first('promotion_entry')}}
              </div> 
            @endif 
          </p>
        </div>
        <div class="panel-footer">
          <button type="submit" class="submit" background-color:#fff>Add Promotion</button>
        </div>
      </form>
    </div>
   </div>
   </div>
  </div>
<div>
<!--@endif-->
<!--@endauth
@guest
<div class="container text-center">
  <p>Please <a href="/signin">sigin in</a> to add or manage promotions.</p>
</div>
@endguest
@auth -->
  <div id="pricing" class="container-fluid">
    <h2>Current Promotions</h2>
    <div class="row">
     @forelse($promotions as $promotion)
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Promotions</h1>
          </div>
          <div class="panel-body">
            <p>
              <strong>{{ $promotion->promotion }}</strong>
            </p>
          </div>
          <div class="panel-footer">
            <button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter"  data-id="{{ $promotion->id }}" 
            data-text="{{ $promotion->promotion }}" style="width: 100%"> Remove Promotion </button>
           </form>
          </div>
        </div>
      </div>
      @empty
        <div class="col-xs-12 text-center">
          <p>No promotions added yet.</p>
        </div>
      @endforelse
    </div>
 @else
  <p>You need to be logged in the view your promotions.</p>
  <button class="btn btn-lg largebtn" onclick="window.location.href='/signin'">Sign in</button>
@endauth  
</div>
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="padding-top: 15%;">
        <div class="modal-content">
        <form method="POST" action="{{ url('/promotions')}}">
          @csrf
          @method('DELETE')
          <input type="hidden" name="promotion_id" id="deletePromotionId"> 
        <!--  <input type="hidden" name="restaurant_id" value="{{ auth()->user()->restaurant->id }}"> -->

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 10px">
              <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title text-center" id="exampleModalLongTitle">Are you sure you want to remove</h2>
            <h3 class="text-center" id="promotionText"></h3>
          </div>
          <div class="modal-body text-center">
            <p>
              <strong>Doing so will remove this promotion from your restaurant</strong>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="submit" data-dismiss="modal" style="width: 25%">Cancel</button>
            <button type="submit" class="submit" style="width: 40%">Confirm Removal</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--
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

-->

<!-- 
   Modal
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
-->
  <script>
    $('#exampleModalCenter').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var id = button.data('id');
      var text = button.data('text');
      
      var modal = $(this);
      modal.find('#deletePromotionId').val(id);
      modal.find('#promotionText').text(text);
    });
  </script>


