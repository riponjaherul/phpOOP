<?php
abstract class Phone{
    abstract function makeCall(int $num);
    abstract function sendMessage(int $num,string $msg);

    public function checkVersion()
    {
        echo "This phone are allowed [IOS > 3.0.0] and [Android > 5.0.0] version<br>";
    }
}

class IOS extends Phone{
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
    $ios->checkVersion();
    $ios->makeCall(121);
    $ios->sendMessage(121,'Hi! How are you?');
}catch(Exception $e){
    echo $e->getMessage();
}