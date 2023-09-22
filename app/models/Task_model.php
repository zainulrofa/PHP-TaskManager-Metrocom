<?php

class Task_model
{
    private $table = 'tasks';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTask()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY update_at DESC');
        return $this->db->resultSet();
    }

    public function getTaskById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addDataTask($data)
    {
        $query = "INSERT INTO tasks (title, description, status)
                    VALUES
                (:title, :description, :status)";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataTask($id)
    {
        $query = "DELETE FROM tasks WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataTask($data)
    {
        $query = "UPDATE tasks SET 
        title = :title,
        description = :description,
        status = :status WHERE id = :id
        ";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchDataTask()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tasks WHERE CONCAT(title, status) LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
