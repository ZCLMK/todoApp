<?php include_once(index.html); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo List App</title>
  <link rel="stylesheet" type="text/css" href="resources/css/reset.min.css">
  <link rel="stylesheet" type="text/css" href="resources/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
  <!-- roboto font embed -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<body>
<div class="wrapper--outer">
  <div class="wrapper--todo">
    
    <header>
      <input type="text" placeholder="Tapez une activité" id ="item">
      <div id="button--div">
        <button id ="add"><svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g>
        <path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg>
    </div>
    </button>
    </header>

    <div class="container">
      <ul class="todo" id ="todo"></ul>
      <!-- completed -->
      <ul class="todo" id="completed"></ul>
    </div>
  </div>
</div>
    
  
    <!-- JS -->
  <script src="resources/js/main.js"></script>    
</body>
</html>