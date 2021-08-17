<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="views/style.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
            if (!empty($_GET['message'])) {
            ?>
                <div class="alert alert-success alert-dismissible fade show " role="alert">
                    Task added successfully.
                    <button type="button" class="close btn " data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php
            } ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h2>Task List</h2>
                    <div class="task-group">
                        <?php foreach ($data['tasks'] as $task) : ?>
                            <div class="task-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?php echo $task->title; ?></h5>
                                    <small><i class="far fa-calendar"></i> <?php echo date('M j, Y h:i A', strtotime($task->created_at)); ?></small>
                                </div>
                                <p class="mb-1"><?php echo $task->description; ?></p>
                                <span class="badge <?php echo $task->status ? 'bg-success' : 'bg-dark'; ?>"><?php echo $task->status ? 'Completed' : 'Pending'; ?></span>
                                <a href="#"><i class="fa fa-pencil p-1"></i></a>
                                <a href="#"><i class="fa fa-trash text-danger p-1"></i></a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h2>Add Tasks</h2>
                    <p>Keep track of your tasks.</p>
                    <form action="<?php echo URLROOT; ?>/addTask" method="POST">
                        <div class="form-group">
                            <label for="title">
                                Title: <sup>*</sup>
                            </label>
                            <input type="text" name="title" id="title" class="form-control form-control-lg " autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="description">
                                Description:<sup>*</sup>
                            </label>
                            <textarea name="description" id="description" rows="5" required class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add Task" class="btn btn-success ">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script>
        $(document).ready(() => {
            $('.close').on('click', () => {
                $('.alert').alert('close');
            })
        })
    </script>
</body>

</html>