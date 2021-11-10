<?php

class Task
{
    public $id;
    public $text;
    public $finished;

    public function __construct ($text)
    {
        $this->text = $text;
    }

    public function add ()
    {
        $mysql = new mysqli('localhost', 'root', 'root', 'fullstack');
        $query = "INSERT INTO tasks (text) values ('$this->text')";
        $mysql->query($query);
        $mysql->close();
    }

    public function del ()
    {
        // Реализовать метод del
    }

    public function finish ()
    {
        // Реализовать метод finish
    }

    public static function getTasks ()
    {
        $mysql = new \mysqli('localhost', 'root', 'root', 'fullstack');
        $query = 'SELECT * FROM tasks';
        $res = $mysql->query($query);
        $data = [];
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}