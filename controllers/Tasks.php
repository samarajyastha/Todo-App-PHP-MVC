<?php
class Tasks extends Controller
{
    public function __construct()
    {
        $this->taskModel = $this->model('Task');
    }

    public function index()
    {
        $tasks = $this->taskModel->getTask();
        $data = [
            'tasks' => $tasks
        ];
        $this->view('index', $data);
    }

    public function addTask()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'status' => '0',
            ];
            $this->taskModel->addTask($data);
            $location = URLROOT;
            header("Location: $location?message=Task Added Successfully");
        }
    }

    public function deleteTask($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->taskModel->deleteTask($id);
            $location = URLROOT;
            header("Location: $location?message=Task Deleted Successfully");
        }
    }
}
