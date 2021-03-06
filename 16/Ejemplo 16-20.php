<!DOCTYPE html>
<html>
  <head>
    <title>DOM: parent</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>
    <ul class='memo'>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>
    <script>
      $('li').parent()  .css('font-weight', 'bold')
      $('li').parent('.memo').css('list-style-type', 'circle')
    </script>
  </body>
</html>


