
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
      blah.src = URL.createObjectURL(file)
      ttt.style.display = "none"
      blah.style.display = "";
      blah2.style.display = "none"
      test.style.display = "none"
    }
    if (isImage(file.name)) {
      blah2.src = URL.createObjectURL(file)
      ttt.style.display = "none"
      blah.style.display = "none";
      blah2.style.display = "";
      test.style.display = "none"
    }
  }

  function updateCSSClassStyle(className, property, value) {
  // Loop through all the stylesheets

  for (let sheet of document.styleSheets) {
 
    try {
      
      // Iterate over the CSS rules in each stylesheet
      for (let rule of sheet.cssRules) {
       
        if (rule.selectorText === className) {
          
          rule.style[property] = "inline-block"; // Update the style of the class
        }
      }
    } catch (e) {
      // This handles cross-origin issues that may arise with external stylesheets
      console.error(e);
    }
  }
}

function updateCSSClassStyle2(className, property, value) {
  // Loop through all the stylesheets

  for (let sheet of document.styleSheets) {
 
    try {
      
      // Iterate over the CSS rules in each stylesheet
      for (let rule of sheet.cssRules) {
       
        if (rule.selectorText === className) {
          
          rule.style[property] = "none"; // Update the style of the class
        }
      }
    } catch (e) {
      // This handles cross-origin issues that may arise with external stylesheets
      console.error(e);
    }
  }
}
  function priceRange(dropdown){

    if(dropdown.value === ""){
      updateCSSClassStyle2('.choices__list--single', 'display', 'none');
    }
    else{
    updateCSSClassStyle('.choices__list--single', 'display', 'inline-block');
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