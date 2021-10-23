<?php

    require_once 'connection.php';
    
    $id = $_GET['id'];
    $query = "DELETE FROM todos WHERE id = $id";

    mysqli_query($cn, $query);
    mysqli_close($cn);
    header('Location: /');

?>