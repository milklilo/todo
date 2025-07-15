<?php
class task
{
    public ?int $id = null;
    public string $descripition;
    public int $done;

    public function __construct($descripition, $done = 0, $id)
    {
        $this->$id = $id;
        $this->descripition = $descripition;
        $this->done = $done;
    }
}
