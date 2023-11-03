<?php

$content = 'No robot soliciting allowed!';

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

