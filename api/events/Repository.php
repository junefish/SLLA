<?php
final class Repository
{
    protected $mysql;
    public function __construct($mysql)
    {
        $this->mysql = $mysql;
    }

    public function DeleteEvent(string $id)
    {
        return 'thing';
    }
}

?>