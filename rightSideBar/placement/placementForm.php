<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Placement Form </title>
    <link rel="stylesheet" href="placementForm.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="back">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
      <div class="back">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">

        <div class="form-content">
        <div class="signup-form">
          <div class="title">Placement Form </div>
        <form action="placementFormCheck.php" method="POST" enctype="multipart/form-data">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input  type="text" name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input  type="text" name="company" placeholder="Enter company name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" name="role" placeholder="Enter job role " required>
              </div>
              <label for="image">Photos/Video</label>
				   <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" multiple>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="publish">
              </div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
