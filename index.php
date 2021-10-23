<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">

<?php require_once 'connection.php'; ?>
<div class="container">
    <h2 class="mt-5 mb-2">
        ToDos List
    </h2>

    <!-- INPUT TODOS -->
    <form method="POST" 
    action="add_todo.php">
        <div class="input-group">
            <input type="text" 
            name="todo_name"
            placeholder="Add todos...">
            <button class="btn btn-success">
                Add ToDo
            </button>
        </div>
    </form>

    <?php
        $query = "SELECT * FROM todos";
        $result = mysqli_query($cn, $query);
        $todos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <!-- SEARCH TODOS -->
    <form method="POST" 
    action="">
        <div class="input-group">
            <input type="text" 
            name="search"
            placeholder="Search here...">
            <button class="btn btn-primary">
                Search
            </button>
        </div>
    </form>

    <?php 
        if(isset($_POST['search'])) {
            $keyword = $_POST['search'];
            $search_query = "SELECT * FROM todos WHERE name LIKE '%$keyword%' ";
            $result = mysqli_query($cn, $search_query);
            // var_dump($result);
            // die();
            $todos = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    ?>


    <!-- SHOW TODOS -->
    <h2 class="mt-5">List of Todos</h2>
    <ol>
        <?php if(count($todos) > 0): ?>
        <?php foreach($todos as $todo): ?>
        <li>
            <?php echo $todo['name']; ?>
            <a href="edit_form.php?id=<?php echo $todo['id'] ?>" 
            class="btn btn-warning my-1">
                Edit
            </a>

            <a href="delete_todo.php?id=<?php echo $todo['id'] ?>" 
            class="btn btn-danger my-1">
                Delete
            </a>
        </li>
        <?php endforeach; ?>
        <?php else: ?>
            <h2>No todo to show</h2>
        <?php endif; ?>
    </ol>
</div>