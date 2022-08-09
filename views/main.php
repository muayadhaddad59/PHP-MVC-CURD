<html>

<head>
  <title>Shareboard</title>
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style>
    .body {
      background-color: black;
    }

    .h1 {
      color: white
    }
  </style>
</head>

<body class="body">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark bg-ligh">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" style="color:whitesmoke;font-size: 50;" href="#">School</a>
      </div>
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="nav navbar-nav " style="color:gray">
          <li class="nav-item active"><a href="<?php echo ROOT_URL; ?>">Home</a></li>
          <li class="nav-item active"><a href="<?php echo ROOT_URL; ?>students">students</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right" style="color:gray">
          <?php if (isset($_SESSION['is_logged_in'])) : ?>
            <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
          <?php else : ?>
            <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">

    <div class="row">
      <?php Messages::display(); ?>
      <?php require($view); ?>
    </div>

  </div><!-- /.container -->
</body>

</html>