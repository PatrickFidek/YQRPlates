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
    <link rel="stylesheet" type="text/css" href="https://yqrplates.com/css/newsignin.css">
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f8f8;
        }
        .signin--container {
            display: flex;
            width: 800px;
            height: 645px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .left {
            flex: 1;
            padding: 50px;
            text-align: center;
        }
        .right {
            width: 250px;
            background: #ff7e2e;;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        @import 'tailwindcss';


    </style>
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
<body>
    <div class="signin--container">
        <div class="left">
            <h2>WELCOME TO YQR PLATES</h2>
            <form>
                <label>
                <span>Email
                <input type="email" required>
                </label>
                <label>
                <span>Password</span>
                <input type="password" required>
                </label>
                <a href="#" style="display: block; font-size: 12px; color: #999; margin-top: 5px;">Forgot password?</a>
                <button class="submit" type="submit" style="    border: 1px solid white;">Sign In</button>
            </form>
        </div>
        <div class="right text-center">
        <h3>If you already have an account, sign in <h3>
            <button class="submit" style="width: 142px; border: 1px solid white;" onclick="location.href='https://yqrplates.com/signin';">SIGN IN</button>
        </div>
    </div>
</body>
</html>
