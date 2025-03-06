<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/resetpassword.css') }}">
<style>

</style>
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
  <h1>Reset Password</h1> 
</div>
    
        <div class="center">
            <label>
                <span>Email</span>
                <input type="email" />
            </label>
                        <label>
               
                <span>Confirm your birthday</span>
                <!-- This should only be displayed if the birthday doesnt match -->
                <p color="red">Birthday does not match</p>
                <input type="date" />
            </label>
            <label>
                <!-- this should only be displayed if the passwords dont match -->
                <p>Please make sure the password and confirm password match</p>
                <span>New Password</span>
                <input type="password" />
            </label>
                        <label>
                <span>Confirm New Password</span>
                <input type="confirm password" />
            </label>
            <!-- this should only redirect if the birthday matches, and the password and confirm password match -->
            <button type="button" class="submit" background-color:#fff onclick="location.href='https://yqrplates.com/passwordreset';">Reset Password</button>
         
        </div>


                

