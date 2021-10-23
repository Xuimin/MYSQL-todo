<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">

<?php 
    require_once 'connection.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM todos WHERE id = $id";
    // $result = mysqli_query($cn, $query);
    // var_dump($query);
    $todo = mysqli_fetch_assoc(mysqli_query($cn, $query));
?>

<div class="container">
    <h2 class="mt-5">
        Edit Todo
    </h2>
    
    <form method="POST "
    action="edit_todo.php">
        <div class="input-group">
            <input type="hidden" 
            name="id" 
            value="<?php echo $id ?>">
        
            <input type="text" 
            name="todo_name" 
            value="<?php echo $todo['name'] ?>">
        
            <button class="btn btn-warning">
                Edit
            </button>
        </div>
    </form>
</div>