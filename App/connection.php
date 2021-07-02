<?php

    //  Database credentials
    $user = "a3004608_scpuser";
    $pw = "Toiohomai1234";
    $db = "a3004608_scp";

    //  Database connection object (address, user, pw, db)
    $connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli.error($connection));

    //  Create variable that stores all records from our database
    $result = $connection->query("select * from scp") or die($connection->error());

    //  first check if form has been submitted with data
    if(isset($_POST['submit']))
    {
        //  Create variables from out posted form values
        $item = $_POST['item'];
        $class = $row['class'];
        $containment = $row['containment'];
        $description = $row['description'];

        //  Create an insert command
        $sql = "insert into pages(item, class, containment, description)
        values('$item', '$class', '$containment','$description')";
        
        //  Display success or error message
        if($connection->query($sql) === TRUE)
        {
            echo "
                <h1>Record added successfully</h1>
                <p><a href='../index.php'>Back to index page</p>";
        }
        else
        {
            echo "
                <h1>Error submitting data</h1>
                <p>{$connection->error()}</p>
                <p><a href='../index.php'>Back to index page</p>";
        }
    }

    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];

        //  Create delete sql command
        $del = "delete from pages where id=$id";

        //  Run the cmd and then display appropriate success or error msg
        if($connection->query($del) === TRUE)
        {
            echo "<p>Record was deleted. <a href='../index.php'>Return to the Index Page</a></p>";
        }
        else
        {
            echo "
                <p>There was an error deleting this record.</p>
                <p{$connection->error()}></p>
                <p><a href='../index.php'>Return to the Index Page</a></p>
            ";
        }
    }

    //  update form check if update button has been clicked
    if(isset($_POST['update']))
    {
        //  Create variables from out posted form values
        $id = $_POST['id'];
        $item = $_POST['item'];
        $class = $row['class'];
        $containment = $row['containment'];
        $description = $row['description'];

        //  Create an update command
        $update = "
        
            update pages set item='$item', class='$class', containment='$containment', description='$description'
            where id='$id'
        
        ";
        
        //  Display success or error message
        if($connection->query($update) === TRUE)
        {
            echo "
                <h1>Record updated successfully</h1>
                <p><a href='../index.php'>Back to index page</p>";
        }
        else
        {
            echo "
                <h1>Error updating data</h1>
                <p>{$connection->error()}</p>
                <p><a href='../index.php'>Back to index page</p>";
        }
    }
?>