<?php
$conn = new mysqli('localhost','root','','travel');
 $sql = "SELECT * FROM client";
 $result = $conn->query($sql);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Log-In</title>
  </head>
  <br><br>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info" href="adminlogin.php">Admin</a> <br><br>
          <a class="btn btn-info" href="guidereg.php">Guide Registration</a>
        </div>
        <div class="col-md-5">
          <h1>Log-in</h1>
          <hr>



<form action="clientconfirm.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" required="required" aria-describedby="emailHelp" placeholder="Enter Your Email">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" required="required" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a  href="insert.php">No Account ? Click Here</a>



        </div>

      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
