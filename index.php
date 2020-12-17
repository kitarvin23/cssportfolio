<?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
 ?>

<html>
    <head>
    <title>Arvin Kit Gallego</title>
    <link rel="stylesheet" href="style.css">
    </head>
 <body>
 
    <div class="banner">
        
        <div class="navbar">
        <img src="aboutpic.svg" class="logo" id="hoverme"></img>
    <ul>
        <li> <a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=css">CSS</a></li>
        <li><a href="index.php?page=svg">SVG</a></li>
        <li><a href="index.php?page=canvas">CANVAS</a></li>
        <li><a href="index.php?page=about">ABOUT THE AUTHOR</a></li>
    </ul>
    </div>

  
    </div>

    <?php
switch ($load) {
  case 'css':
    include('css.php');
    break;
  case 'svg':
      include('svg.php');
      break;
  case 'canvas':
          include('canvas.php');
          break;
  case 'about':
          include('about.php');
          break;
  default:
    include('home.php');
    break;
}
 ?>


</body>
</html>