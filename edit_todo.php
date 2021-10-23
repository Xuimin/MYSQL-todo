<?php 

    require_once 'connection.php';
    
    $id = $_POST['id'];
    $todo_name = $_POST['todo_name'];
    $query = "UPDATE todos SET name = '$todo_name' WHERE id = $id";

    mysqli_query($cn, $query);
    mysqli_close($cn);
    header('Location: /')
?>