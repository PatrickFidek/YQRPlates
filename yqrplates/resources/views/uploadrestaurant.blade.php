<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/uploadrestaurant.css') }}">
  <title>Upload Restaurant</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="{{ asset('js/uploadrestaurant.js') }}"></script>
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
  <h1>Enter Restaurant</h1>
</div>
<div class="center">
  <label>
    <span>Restaurant Name</span>
    <input name="name" type="text"/>
  </label>
  <br>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
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
    <div class="col-sm-4">
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
    <div class="col-sm-4">
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
    <div class="col-sm-4">
      <label>
        <span>Price Range</span>
        <div class="row d-flex justify-content-center mt-100">
          <select id="choices-multiple-remove-button" onChange="priceRange(this)">
            <option value="option" hidden></option>
            <option value="Price Range">Price Range</option>
            <option value="Price Range">Price Range</option>
            <option value="Price Range">Price Range</option>
          </select>
        </div>
      </label>
    </div>
    <div class="col-sm-2"></div>
  </div>
  <label>
    <span id="noMenu">Upload Menu</span>
    <div class="dropzone text-center" style="height: 20%; width: 100%" id="noMenu2">
      <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" id="displayImage" />
      <embed id="pdf" src="#" width="100%" height="100%" style="display: none" />
      <img id="image" src="#" alt="your image" style="display: none; width: 100%; height 100%; max-height: 160px" />
      <label>
        <span id="prompt">Upload or drop file here</span>
        <input type="file" class="upload-input" id="imgInp" height="100%" width="100%" />
      </label>
    </div>
  </label>
  <button type="button" class="submit" background-color:#fff>Continue</button>
</div>
<script>
  function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
  }

  function isImage(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
      case 'jpg':
      case 'gif':
      case 'bmp':
      case 'png':
        //etc
        return true;
    }
    return false;
  }

  function isPDF(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
      case 'pdf':
        return true;
    }
    return false;
  }
  imgInp.onchange = evt => {
    const [file] = imgInp.files
    console.log(file)
    if (isPDF(file.name)) {
      pdf.src = URL.createObjectURL(file)
      prompt.style.display = "none"
      pdf.style.display = "";
      image.style.display = "none"
      displayImage.style.display = "none"
    }
    if (isImage(file.name)) {
      image.src = URL.createObjectURL(file)
      prompt.style.display = "none"
      pdf.style.display = "none";
      image.style.display = "";
      displayImage.style.display = "none"
    }
  }
  $(document).ready(function() {
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
      removeItemButton: true,
      maxItemCount: 5,
      searchResultLimit: 5,
      renderChoiceLimit: 5,
    });
  })(jQuery);
</script>