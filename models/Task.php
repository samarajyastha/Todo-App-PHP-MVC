<?php
class Task
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get Tasks
    public function getTask()
    {
        $this->db->query('SELECT * from tasks ORDER BY tasks.created_at DESC');
        $results = $this->db->resultSet();
        return $results;
    }

    //Create a Task
    public function addTask($data)
    {
        $this->db->query('INSERT INTO tasks (title, description, status) VALUES (:title, :description, :status)');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':status', $data['status']);

        // Execute
        $this->db->execute();
    }


    //Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    // Get result set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Update a task
    public function updateTask($data)
    {
    }

    // Delete a task
    public function deleteTask($id)
    {
    }
}
