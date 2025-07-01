<?php
class task
{
    public int $id;
    public string $descripition;
    public int $done;


    public function __construct($descripition, $done = 0, $id = null)
    {
        $this->$id = $id;
        $this->descripition = $descripition;
        $this->done = $done;
    }
}
