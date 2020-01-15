<?php
class Faculty{
    protected $address = null;
    public function details(string $address = null)
    {
        $this->address = $address;
    }
}

class CSEFaculty extends Faculty{
    public function details(string $roomnumber)
    {
        echo 'Address : '.$this->address.'<br>';
        echo 'Room Number : '.$roomnumber.'<br>';
    }
}

// $f = new Faculty;
// $f->details('Dhaka');
$cse = new CSEFaculty();
$cse->details('302');