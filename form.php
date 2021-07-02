<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SCP Database Form Page</title>
  </head>
  <body class="container">

    <h1>Web Application</h1>
    <p><a href="index.php" class="btn btn-dark">Back to Index Page</a></p>
    <h2>Use the form to enter a new page record into the database.</h2>

    <form class="form-group" method="post" action="app/connection.php">

    <label>Item</label>
    <br>
    <input type="text" class="form-control" name="item" placeholder="Item" required>
    <br><br>
    <label>Class</label>
    <br>
    <input type="text" class="form-control" name="class" placeholder="Class" required>
    <br><br>
    <label>Containment</label>
    <br>
    <input class="form-control"  name="containment" placeholder="Containment Procedures..." rows="5" required>
    <br><br>
    <label>Description</label>
    <br>
    <input class="form-control" name="Description" placeholder="Description" rows="5" required>
    <br><br>
    <label>Image</label>
    <br>
    <input type="text" class="form-control" name="img" placeholder="Image">
    <br><br>
    <hr width="75%">
    <input type="submit" class="btn btn-gray" name="submit" value="Submit SCP Data">

    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>