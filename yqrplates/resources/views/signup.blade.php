<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/signup.css') }}">
    <title>Sign Up</title>
  </head>
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
  <div style="width: 50%; margin: 0 auto">
    <div class="signup--container">
      <div class="left text-center">
        <h3>If you already have an account, sign in <h3>
            <button class="submit">SIGN IN</button>
      </div>
      <div class="right">
        <h2>CREATE YOUR ACCOUNT</h2>
        <form>
          <label>
            <span>Name</span>
            <input type="text" required>
          </label>
          <label>
            <span>Email</span>
            <input type="email" required>
          </label>
          <label>
            <span>Birthday</span>
            <input type="date" required>
          </label>
          <label>
            <span>Password</span>
            <input type="password" required>
          </label>
          <label>
            <span>Confirm Password</span>
            <input type="password" required>
          </label>
          <label>
            <span>Customer or Restaurant Owner</span>
            <select name="type" id="type" class="select">
              <option value="none" selected disabled hidden></option>
              <option value="customer">Customer</option>
              <option value="restaurant owner">Restaurant Owner</option>
            </select>
          </label>
          <button type="submit" class="submit">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</html>