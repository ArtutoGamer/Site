<?php
require_once './inc/page.php';

$page = new Page();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Endless website">
    <meta name="author" content="Artuto">
    <title>Endless - Home</title>
    <link href="https://bootswatch.com/4/darkly/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Endless</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle" style="">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="colapse navbar-colapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron">
    <h2>Home</h2>

    <div class="text-success">
        Hello!
    </div>
    <br>
    <a href="../" class="btn btn-primary">Click me! :D</a>
</div>
</body>
</html>

<?php $page->printFooter(); ?>
