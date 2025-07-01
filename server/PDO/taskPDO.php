<?php
require_once(__DIR__ . '/../  models/Task.php');

class TaskPDO
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

    }

    public function create(Task $task): void 
    {
        $sql = "INSERT INTO tasks (description,done)VALUES (: description, :done)";
        $command = $this->pdo->prepare($sql);

        $command->execute([
            'description' => $task->descripition,
            'done'        => $task->done
        ]);

    }

    public function get_all(): array
    {
        $sql = 'SELET id, description, done FROM tasks';
        $command = $this->pdo->query($sql);

        return $command->fetchALL();
    }

    public function get_id(int $id)
    {

    }

    public function update(Task $task): void
    {

    }

}