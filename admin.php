<?php 
 ?>
 <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="styleSlidebar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>My Menu</header>
      <a href="indexkhalid.php" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="#">
        <i class="fas fa-link"></i>
        <span>Shortcuts</span>
      </a>
      <a href="#">
        <i class="fas fa-stream"></i>
        <span>Overview</span>
      </a>
      <a href="#">
         <i class="fas fa-calendar"></i>
        <span>Events</span>
      </a>
      <a href="#">
        <i class="far fa-question-circle"></i>
        <span>About</span>
      </a>
      <a href="#">
        <i class="fas fa-sliders-h"></i>
        <span>Services</span>
      </a>
      <a href="#">
        <i class="far fa-envelope"></i>
        <span>Contact</span>
      </a>
    </div>
</body>
</html>