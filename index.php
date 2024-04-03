<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Pan Tadeusz</title>
</head>
<body>
  <header class="container">
    <h1 class="text-center">Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h1>
    <h2 class="text-end">Adam Mickiewicz</h2>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="list-group">
          <a class="list-group-item list-group-item-success"><i class="bi bi-list-columns"></i>Spis treści</a>
          <a href="./" class="list-group-item list-group-item-action"><i class="bi bi-house-fill"></i>Strona główna</a>
          <?php
          for ($i = 1; $i <= 12; $i++) {
            // echo ('<a href="./k'.$i.'.html" class="list-group-item list-group-item-action"><i class="bi bi-bookmark-fill"></i>Księga '.$i.'</a>');
            echo("<a href='./?k=$i' class='list-group-item list-group-item-action'><i class='bi bi-bookmark-fill'></i>Księga $i</a>");
          }
          ?>
          </div>
        </div>
        <div class="col-9">
          <?php
          if(isset($_GET['k'])) {
            include_once("k".$_GET['k'].".html");
          } 
          elseif(!empty($argv[1])) {
            include_once("k".$_GET['k'].".html");
          } 
          else {
            echo"<img src='./pantadeusz.jpeg' alt='Pan Tadeusz' class='img-fluid rounded'>";
          }
          ?>
          </div>
        </div>
        <footer class="container fixed-bottom alert alert-success text-end">
          (c) Sebastian Słowakiewicz | Akademia nauk stosowanych w Nowym Targu
        </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </body>
      </html>

