<?php
  session_start();
  if($_SESSION['Active'] == false){
    header("location:login.php");
	  exit;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Logged in</title>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Test Page</h3>
      </div>

      <div class="jumbotron">
        <h1>Status: logged in</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin eros id erat porta, at cursus sem consequat. Aliquam sem ex, consectetur non sodales quis, blandit quis ex. Sed nec dapibus ante. Donec facilisis eget neque vulputate lobortis. Phasellus ultrices, enim vitae finibus sagittis, lacus mauris elementum metus, vitae lobortis tortor lectus ac purus. Aliquam rutrum felis ante, vitae ornare nulla pharetra ac. Sed molestie tellus elit, sed pulvinar nunc auctor eu</p>
        <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
