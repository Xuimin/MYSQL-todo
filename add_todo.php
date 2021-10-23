<?php

    require_once 'connection.php';
    
    $todo_name = $_POST['todo_name'];
    $query = "INSERT INTO todos (name) VALUES('$todo_name')";

    // mysqli_query(connection, query);
    mysqli_query($cn, $query);
    mysqli_close($cn);
    header('Location: /');

?>
