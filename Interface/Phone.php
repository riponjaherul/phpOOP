<?php
interface Phone{
    function makeCall(int $number);
    function sendMessage(int $number, string $message);
}

class IOS implements Phone{
    public function makeCall(int $number)
    {
        echo "$number Calling....<br>";
    }

    public function sendMessage(int $number,string $message)
    {
        echo "Message - $message from number - $number....<br>";
    }
}

try{
    $ios = new IOS;
    $ios->makeCall(121);
    $ios->sendMessage(121,'Hi! How are you?');
}catch(Exception $e){
    echo $e->getMessage();
}