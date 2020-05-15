<!DOCTYPE html>
<html lang="de">

<head>
  <title><?php echo htmlspecialchars($results['pageTitle']) ?></title>
  <!--    <link rel="stylesheet" type="text/css" href="style.css" /> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>
  <!--
  <header>
    <p><b>WELCOME TO APE BLOG!</b></p>
    <hr>
    <p><a href="./?action=home">Home</a></p>
    <p><a href="./?action=about">About Me</a></p>
    <hr>

  </header>
-->
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <span class="navbar-brand">Ape Blog</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./?action=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./?action=about">About Me</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
  