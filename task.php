<?php

class Task
{
    public $id;

    public function __construct ($id)
    {
        $this->id = $id;
    }

    public static function add ($text)
    {
        $mysql = new mysqli('localhost', 'root', 'root', 'fullstack');
        $query = "INSERT INTO tasks (text) values ('$text')";
        $mysql->query($query);
        $mysql->close();
    }

    public function del ()
    {
        $user = $pass = 'root';
        $mysql = new PDO('mysql:host=localhost;dbname=fullstack;port=3307', $user, $pass);
        $query = 'DELETE FROM tasks WHERE id = :id';
        $res = $mysql->prepare($query);
        $res->execute([
            ':id' => $this->id
        ]);
    }

    public function toggle ($toggle)
    {
        $user = $pass = 'root';
        $mysql = new PDO('mysql:host=localhost;dbname=fullstack;port=3307', $user, $pass);
        $query = 'UPDATE tasks SET finished = :toggle WHERE id = :id';
        $res = $mysql->prepare($query);
        $res->execute([
            ':id' => $this->id,
            ':toggle' => $toggle
        ]);
    }

    public static function getTasks ()
    {
        $user = $pass = 'root';
        $mysql = new PDO('mysql:host=localhost;dbname=fullstack;port=3307', $user, $pass);
        $query = 'SELECT * FROM tasks ORDER BY id ASC';
        $res = $mysql->query($query);
        $data = [];
        foreach ($res as $row) {
            $data[] = $row;
        }
        return $data;
    }
}