<?php
trait DataBaseInfo{
    public function getRecords()
    {
        return 'Get all records of Database!';
    }
}

class DB{
    use DataBaseInfo;
    public function saveData()
    {
        return $this->getRecords();
    }
}

$db = new DB;
echo $db->saveData();