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

    // Update a task
    public function updateTask($data)
    {
        $this->db->query('UPDATE tasks SET title = :title, description = :description WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);

        // Execute
        $this->db->execute();
    }

    // Delete a task
    public function deleteTask($id)
    {
        $this->db->query('DELETE FROM tasks WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        // Execute
        $this->db->execute();
    }
}
