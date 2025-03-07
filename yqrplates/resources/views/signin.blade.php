<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/signin.css') }}">
  <script src="{{ asset('js/signin.js') }}"></script>
</head>
<title>Sign In</title>
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
<br>
<br>
<br>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome to YQR Plates</h2>
    <label>
      <form action="/signin" method="POST"> @csrf <span>Email</span>
        <input name="signin_email" type="email" value="{{ old('signin_email')}}"/> @if ($errors->has('signin_email')) <div id="email-error" class="error-message">
            {{$errors->first('signin_email')}}
          </div> @endif </label>
    <label>
      <span>Password</span>
      <input name="signin_password" type="password"/> @if ($errors->has('signin_password')) <div id="password-error" class="error-message">
            {{$errors->first('signin_password')}}
          </div> @endif </label>
    <a href="https://www.yqrplates.com/resetpassword">
      <p class="forgot-pass">Forgot password?</p>
    </a>
    <td>
      <?echo "$error";?>
    </td>
    <button type="submit" class="submit" background-color:#fff>
      <input type="submit" value="Sign In" style="border-bottom: none;" />
    </button>
    </form>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h3>Don't have an account? Please Sign up! <h3>
      </div>
      <div class="img__text m--in">
        <h3>If you already have an account, sign in <h3>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Create your Account</h2>
      <form action="/register" method="POST"> @csrf <label>
          <span>Name</span>
          <input name="name" type="text" value="{{ old('name')}}" /> @if ($errors->has('name')) <div id="name-error" class="error-message">
            {{$errors->first('name')}}
          </div> @endif </label>
        <label>
          <span>Email</span>
          <input name="email" type="email" value="{{ old('email')}}" /> @if ($errors->has('email')) <div id="email-error" class="error-message">
            {{$errors->first('email')}}
          </div> @endif </label>
        <label>
          <span>Birthday</span>
          <input name="birthday" type="date" value="{{ old('birthday')}}" /> @if ($errors->has('birthday')) <div id="birthday-error" class="error-message">
            {{$errors->first('birthday')}}
          </div> @endif </label>
        <label>
          <span>Password</span>
          <input name="password" type="password" value="{{ old('password')}}" /> @if ($errors->has('password')) <div id="password-error" class="error-message">
            {{$errors->first('password')}}
          </div> @endif </label>
        <label>
          <span>Confirm Password</span>
          <input name="password_confirmation" type='password' value="{{ old('password_confirmation')}}" />
        </label>
        <label>
          <span>Customer or Restaurant Owner</span>
          <select name="type" id="type" class="select">
            <option value="none" selected disabled hidden></option>
            <option value="customer">Customer</option>
            <option value="restaurant owner">Restaurant Owner</option>
          </select>
          <div class="error-message"></div>
        </label>
        <!-- based on if customer or restaurant owner is selected this should redirect to either preferences or uploadrestaurant -->
        <button type="submit" class="submit">Sign Up</button>
      </form>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  document.querySelector('.img__btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.cont').classList.toggle('s--signup');
  });
  $('input[type="checkbox"]').on('change', function() {
    $('input[type="checkbox"]').not(this).prop('checked', false);
  });
  $(document).ready(function() {
    $('registration-form').submit(function(e) {
      e.preventDefault();

      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: $(this).serialize(),
        success: function(response) {
          window.location.href = '/preferences';
        },
        error: function(xhr) {
          var errors = xhr.responseJSON.errors;
          $('.error-message').empty();

          $.each(errors, function(key, value) {
            $('#' + key + '-error').text(value[0]);
          });
        }
      });
    });
  });
</script>