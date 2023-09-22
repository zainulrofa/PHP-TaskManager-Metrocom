<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
    <link href="<?=BASURL?>/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid mx-5">
    <a class="navbar-brand" href="<?=BASURL?>">Task Manager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?=BASURL?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASURL?>/task">Task</a>
        </li>
      </ul>
    </div>
  </div>
</nav>