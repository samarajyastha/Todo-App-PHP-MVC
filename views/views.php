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
            <div class="col-md-6">
                <div class="card">
                    <h2>Task List</h2>
                    <div class="task-group">
                        <div class="task-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <span class="badge bg-success">Success</span>
                            <a href="#"><i class="fa fa-pencil p-1"></i></a>
                            <a href="#"><i class="fa fa-trash text-danger p-1"></i></a>
                        </div>
                        <div class="task-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <span class="badge bg-success">Success</span>
                            <a href="#"><i class="fa fa-pencil p-1"></i></a>
                            <a href="#"><i class="fa fa-trash text-danger p-1"></i></a>
                        </div>
                        <div class="task-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <span class="badge bg-success">Success</span>
                            <a href="#"><i class="fa fa-pencil p-1"></i></a>
                            <a href="#"><i class="fa fa-trash text-danger p-1"></i></a>
                        </div>
                        <div class="task-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <span class="badge bg-success">Success</span>
                            <a href="#"><i class="fa fa-pencil p-1"></i></a>
                            <a href="#"><i class="fa fa-trash text-danger p-1"></i></a>
                        </div>
                        <div class="task-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <span class="badge bg-success">Success</span>
                            <a href="#"><i class="fa fa-pencil p-1"></i></a>
                            <a href="#"><i class="fa fa-trash text-danger p-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h2>Add Tasks</h2>
                    <p>Keep track of your tasks.</p>
                    <form action="<?php echo URLROOT; ?>/views/views" method="POST">
                        <div class="form-group">
                            <label for="title">
                                Title: <sup>*</sup>
                            </label>
                            <input type="text" name="title" id="title" class="form-control form-control-lg " autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="description">
                                Description:
                            </label>
                            <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add Task" class="btn btn-success ">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>