<?php

    $cn = mysqli_connect('localhost', 'root', '', 'todolist');

    if(mysqli_connect_errno()) {
        echo 'Failed to Connect to MYSQL' . mysqli_connect_error();
        die();
    }

?>