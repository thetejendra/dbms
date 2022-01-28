var settingsmenu = document.querySelector(".settings-menu");
var darkBtn = document.getElementById("dark-btn");

function settingsMenuToggle(){
    settingsmenu.classList.toggle("settings-menu-height"); 
}

darkBtn.onclick = function(){
    darkBtn.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");

    if(localStorage.getItem("theme")=="light"){
        localStorage.setItem("theme","dark");
    }
    else{
        localStorage.setItem("theme","light"); 
    }
}

if(localStorage.getItem("theme")=="light"){
    darkBtn.classList.remove("dark-btn-on");
    document.body.classList.remove("dark-theme"); 
}
else if(localStorage.getItem("theme")=="dark"){
    darkBtn.classList.add("dark-btn-on");
    document.body.classList.add("dark-theme"); 
}
else{
    localStorage.setItem("theme", "light");
}
// localStorage.setItem("theme", "light");
// localStorage.getItem("theme");


// for input image/video
const input = document.querySelector('input');
const preview = document.querySelector('.preview');

input.style.opacity = 0;
input.addEventListener('change', updateImageDisplay);
function updateImageDisplay() {
    while(preview.firstChild) {
      preview.removeChild(preview.firstChild);
    }
  
    const curFiles = input.files;
    if(curFiles.length === 0) {
      const para = document.createElement('p');
      para.textContent = 'No files currently selected for upload';
      preview.appendChild(para);
    } else {
      const list = document.createElement('ol');
      preview.appendChild(list);
  
      for(const file of curFiles) {
        const listItem = document.createElement('li');
        const para = document.createElement('p');
        if(validFileType(file)) {
          para.textContent = `File name ${file.name}, file size ${returnFileSize(file.size)}.`;
          const image = document.createElement('img');
          image.src = URL.createObjectURL(file);
  
          listItem.appendChild(image);
          listItem.appendChild(para);
        } else {
          para.textContent = `File name ${file.name}: Not a valid file type. Update your selection.`;
          listItem.appendChild(para);
        }
  
        list.appendChild(listItem);
      }
    }
  }

  // https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types
const fileTypes = [
    "image/apng",
    "image/bmp",
    "image/gif",
    "image/jpeg",
    "image/pjpeg",
    "image/png",
    "image/svg+xml",
    "image/tiff",
    "image/webp",
    "image/x-icon"
  ];
  
  function validFileType(file) {
    return fileTypes.includes(file.type);
  }
  
  function returnFileSize(number) {
    if(number < 1024) {
      return number + 'bytes';
    } else if(number >= 1024 && number < 1048576) {
      return (number/1024).toFixed(1) + 'KB';
    } else if(number >= 1048576) {
      return (number/1048576).toFixed(1) + 'MB';
    }
  }

  //Getting value from "ajax.php".

function fill(Value) {

  //Assigning value to "search" div in "search.php" file.

  $('#search').val(Value);

  //Hiding "display" div in "search.php" file.

  $('#display').hide();

}

$(document).ready(function() {

  //On pressing a key on "Search box" in "search.php" file. This function will be called.

  $("#search").keyup(function() {

      //Assigning search box value to javascript variable named as "name".

      var name = $('#search').val();

      //Validating, if "name" is empty.

      if (name == "") {

          //Assigning empty value to "display" div in "search.php" file.

          $("#display").html("");

      }

      //If name is not empty.

      else {

          //AJAX is called.

          $.ajax({

              //AJAX type is "Post".

              type: "POST",

              //Data will be sent to "ajax.php".

              url: "ajax.php",

              //Data, that will be sent to "ajax.php".

              data: {

                  //Assigning value of "name" into "search" variable.

                  search: name

              },

              //If result found, this funtion will be called.

              success: function(html) {

                  //Assigning result to "display" div in "search.php" file.

                  $("#display").html(html).show();

              }

          });

      }

  });

});