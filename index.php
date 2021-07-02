<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SCP Database Main Page</title>
  </head>
  <body class="container">
    <?php include "app/connection.php"?>

    
    <!-- Menu Row -->

    <div class="row">

        <div class="col">

          <ul class="nav navbar-dark bg-dark">

            <?php foreach($result as $page): ?>
              <li><a href="index.php?page='<?php echo $page['item']; ?>'" class="nav-link"><?php echo $page['item']; ?></li>
            <?php endforeach; ?>

            <li><a href="form.php" class="nav-link">Enter a new database Record</a></li>

          </ul>

        </div>

    </div>

    <!-- database content here -->

    <div class="row">

        <div class="col">
          <?php

            if(isset($_GET['page']))
            {
              //  Removing single quotes from entry
              $item = trim($_GET['page'], "'");

              //  Run SQL cmd to select record based on get value
              $record = $connection->query("select * from pages where item='$item'") or die($connection->error());

              //  Convert record into an array for us to echo out the individual fields on screen
              $row = $record->fetch_assoc();

              //  Create variables that hold data from all table fields
              $class = $row['class'];
              $containment = $row['containment'];
              $description = $row['description'];

              //  variables to hold our update and delete url strings

              $id = $row['id'];
              $update = "update.php?update=" . $id;
              $delete = "app/connection.php?delete=" . $id;

              //  Display info on screen
              echo "
                <h1>{$item}</h1>
                <h2>{$class}</h2>
                <p>{$containment}</p>
                <p>{$description}</p>

              ";

              //  Display update and delete bottons
              echo "
                <p>
                
                <a href='{$update}' class='btn btn-warning'>Update</a>

                <a href='{$delete}' class='btn btn-danger'>Delete</a>

                </p>

              ";
            }
            else
            {
              //  if this is the first time this page has been accessed, display content below
              echo  "
                <h1>Welcome to this database driven website</h1>
                <h2>This website is used to catalogue SCP</h2>
                <p class='text-center'>Use the links above to navigate to the pages stored within the database and view the SCP information stored within</p>

              ";
            }

          ?>
        </div>

    </div>

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