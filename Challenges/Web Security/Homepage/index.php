<?php
if (!isset($_GET['page'])) {
    header('Location: index.php?page=3');
    exit();
}
$page = (int) $_GET['page'];
switch ($page) {
    case 1:
        $content = 'flagisT3rr1b13W3b51t3';
        break;
    case 2:
        $content = 'This website is still under construction!';
        break;
    case 3:
        $content = "Welcome to my very first website! It's under construction right now, I just hope I didn't drop you off on the wrong page...";
        break;
    case 4:
        $content = 'This website is still under construction!';
        break;
}

echo <<<HTML
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <title>Websecurity1</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="web1.css"/>
  </head>
  <body>
  <div class="container">
      <header>
          <h1>Ricky's Website &#128526</h1>
      </header>
      <div id="intro" class="content" style="display: block;" >
          $content
      </div>
  </div>
  </body>
  </html>
  HTML;
?>


