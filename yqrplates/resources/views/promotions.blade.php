<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
*,
*:before,
*:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

button.close {

    text-align: right;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

body {
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    background: #ffffff;
}

input,
button {
    border: none;
    outline: none;
    background: none;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}

.tip {
    font-size: 20px;
    margin: 40px auto 50px;
    text-align: center;
}

.cont {
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    width: 900px;
    height: 550px;
    margin: 0 auto 100px;
    background: #fff;
    box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.3), 10px 10px 15px rgba(70, 70, 70, 0.15), inset -10px -10px 15px rgba(255, 255, 255, 0.3), inset 10px 10px 15px rgba(70, 70, 70, 0.15);
}

.form {
    position: relative;
    width: 640px;
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    padding: 50px 30px 0;
}

.sub-cont {
    overflow: hidden;
    position: absolute;
    left: 640px;
    top: 0;
    width: 900px;
    height: 100%;
    padding-left: 260px;
    background: #ffff;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.cont.s--signup .sub-cont {
    -webkit-transform: translate3d(-640px, 0, 0);
    transform: translate3d(-640px, 0, 0);
}

button {
    display: block;
    margin: 0 auto;
    width: 260px;
    height: 36px;
    border-radius: 30px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
}

.img {
    overflow: hidden;
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 260px;
    height: 100%;
    padding-top: 360px;
}

.img:before {
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    width: 900px;
    height: 100%;
    background-image: url("ext.jpg");
    opacity: .8;
    background-size: cover;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #ff7e2e;
}

.cont.s--signup .img:before {
    -webkit-transform: translate3d(640px, 0, 0);
    transform: translate3d(640px, 0, 0);
}

.img__text {
    z-index: 2;
    position: absolute;
    left: 0;
    top: 50px;
    width: 100%;
    padding: 0 20px;
    text-align: center;
    color: #fff;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img__text h2 {
    margin-bottom: 10px;
    font-weight: normal;
}

.img__text p {
    font-size: 14px;
    line-height: 1.5;
}

.cont.s--signup .img__text.m--up {
    -webkit-transform: translateX(520px);
    transform: translateX(520px);
}

.img__text.m--in {
    -webkit-transform: translateX(-520px);
    transform: translateX(-520px);
}

.cont.s--signup .img__text.m--in {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.img__btn {
    overflow: hidden;
    z-index: 2;
    position: relative;
    width: 100px;
    height: 36px;
    margin: 0 auto;
    background: transparent;
    background-color: #ff7e2e;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
}

.img__btn:after {
    content: '';
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border: 2px solid #fff;
    border-radius: 30px;
}

.img__btn span {
    position: absolute;
    left: 0;
    top: 0;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s;
    transition: -webkit-transform 1.2s;
    transition: transform 1.2s;
    transition: transform 1.2s, -webkit-transform 1.2s;
}

.img__btn span.m--in {
    -webkit-transform: translateY(-72px);
    transform: translateY(-72px);
}

.cont.s--signup .img__btn span.m--in {
    -webkit-transform: translateY(0);
    transform: translateY(0);
}

.cont.s--signup .img__btn span.m--up {
    -webkit-transform: translateY(72px);
    transform: translateY(72px);
}

h2 {
    width: 100%;
    font-size: 26px;
    text-align: center;
}

label {
    display: block;
    width: 260px;
    margin: 25px auto 0;
    text-align: center;
}

label span {
    font-size: 12px;
    color: #cfcfcf;
    text-transform: uppercase;
}

input {
    display: block;
    width: 100%;
    margin-top: 5px;
    padding-bottom: 5px;
    font-size: 16px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
    text-align: center;
}

.forgot-pass {
    margin-top: 15px;
    text-align: center;
    font-size: 12px;
    color: #cfcfcf;
}

.submit {
    margin-top: 40px;
    margin-bottom: 20px;
    background: #ff7e2e;
    text-transform: uppercase;
}

.fb-btn {
    border: 2px solid #d3dae9;
    color: #8fa1c7;
}

.fb-btn span {
    font-weight: bold;
    color: #455a81;
}

.sign-in {
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.cont.s--signup .sign-in {
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
    -webkit-transition-duration: 1.2s;
    transition-duration: 1.2s;
    -webkit-transform: translate3d(640px, 0, 0);
    transform: translate3d(640px, 0, 0);
}

.sign-up {
    -webkit-transform: translate3d(-900px, 0, 0);
    transform: translate3d(-900px, 0, 0);
}

.cont.s--signup .sign-up {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 20px;
  }  
  .jumbotron {
    background-color: #ff7e2e;
    color: #fff;
    padding: 75px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #ff7e2e;
    font-size: 50px;
  }
  .logo {
    color: #ff7e2e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #79a263;
  }
  .carousel-indicators li {
    border-color: #ff7e2e;
  }
  .carousel-indicators li.active {
    background-color: #ff7e2e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
    margin-bottom: 20px;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #ff7e2e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #ff7e2e;
    background-color: #fff !important;
    color: #ff7e2e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #ff7e2e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #ff7e2e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #ff7e2e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #ff7e2e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #ff7e2e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }

  p {
    margin: 0 0 10px;
    color: red;
}
textarea {
  resize: none;
}

.modal-footer {
    padding: 15px;
    text-align: right;
    display: inline-flex;
    width: 100%;
    border-top: 1px solid #e5e5e5;
}


  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  #usertype option{
  width:120px;   
}

@media (min-width: 768px) {
    .col-sm-6 {
        width: 100%;
    }
}
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

<title>Promotions</title>title>

<div class="jumbotron text-center">
  <h1>Restaurant Name</h1> 
</div>


<div class="col-sm-6" style="width 5%">
      <h2>Promotions</h2><br>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <br>
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          
          <div class="item active">
            <h4>Promotion 1<br><span>Double line</span></h4>
<!-- Button trigger modal -->
<button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter">
Remove Promotion
</button>


<br>
<br>

          </div>
          <div class="item">
            <h4>Promotion 2</h4>
            <button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter">
Remove Promotion
</button>
            <br>
            <br>
          </div>
          <div class="item">
            <h4>Promotion 3</h4>
            <button type="button" class="submit" data-toggle="modal" data-target="#exampleModalCenter">
Remove Promotion
</button>
            <br>
            <br>
          </div>
          
        </div>
       

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div> 
        <!-- Modal -->
<br>
<br>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="padding-top: 15%;">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 10px">
          <span aria-hidden="true">&times;</span>
        </button>

        <h2 class="modal-title text-center" id="exampleModalLongTitle">Are you sure you want to remove?</h2>

      </div>
      <div class="modal-body">
        Continung will remove this promotion from your Restaurant
      </div>
      <div class="modal-footer">
        <button type="button" class="submit" data-dismiss="modal">Cancel</button>
        <button type="button" class="submit">Confirm Removal</button>
      </div>
    </div>
  </div>
</div>
<br>
<br>
        <div class="text-center">
            <label>
                <h3>Add New Promotion</h3>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="font-family: 'Open Sans', Helvetica, Arial, sans-serif;"></textarea>

            </label>

            <!-- this should only redirect if the birthday matches, and the password and confirm password match -->
            <button type="button" class="submit" background-color:#fff onclick="location.href='https://yqrplates.com/profile';">Add Promotion</button>
         
        </div>


                

