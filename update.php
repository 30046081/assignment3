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
    <h2>Use the form to update an existing page record in the database.</h2>

    <?php 
    
        include 'app/connection.php';
        $id = $_GET['update'];
        $record = $connection->query("select * from pages where id=$id") or die($connection>error());
        $row = $record->fetch_assoc();

    
    ?>

    <form class="form-group" method="post" action="app/connection.php">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Item</label>
    <br>
    <input type="text" class="form-control" name="item" value="<?php echo $row['item']; ?>" >
    <br><br>
    <label>Class</label>
    <br>
    <input type="text" class="form-control" name="class" value="<?php echo $row['class']; ?>" >
    <br><br>
    <label>Containment</label>
    <br>
    <textarea class="form-control"  name="containment" placeholder="<?php echo $row['containment']; ?>" rows="5"><?php echo $row['containment']; ?></textarea>
    <br><br>
    <label>Description</label>
    <br>
    <textarea class="form-control" name="Description" placeholder="<?php echo $row['description']; ?>" rows="5"><?php echo $row['description']; ?></textarea>
    <br><br>
    <label>Image</label>
    <br>
    <input type="text" class="form-control" name="img" value="<?php echo $row['img']; ?>">
    <br><br>
    <hr width="75%">
    <input type="submit" class="btn btn-warning" name="update" value="Update SCP Data">

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