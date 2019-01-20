<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WallImage</title>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.6.2.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js"></script>

    <script src="main.js"></script>

    <link rel="stylesheet" href="styling.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

  <div class="ImageContainer" id="ImageContainer" style="background-position: 0px 0px">
    <!--<img src="" alt="AbyssImage" style="" class="WallImage drag" id="WallImage" id="scrollable_image" onscroll="scroll_event(event)" onmousemove="mouse_event(event)">-->
    <div id="drag_indicator" class="drag_box drag" onmousedown="mousedown()" onmouseup="mouseup()"><?php for($i = 0; $i < 150; $i++) echo "<br>"?></div>
    <div id="mouse_point"></div>
    <div id="translation_point"></div>
    <div id="middle_point"></div>
  </div>

  </body>


</html>