<?php
class Bank{
    private $balance;

    public function __construct(float $amount = 0)
    {
        if($amount<0){
            echo 'Amount is less than zero!';
            return;
        }
        $this->balance = $amount;
    }

    public function getBalance():string
    {
        if($this->balance===0){
            echo 'No Balance Available!';
            return 0;
        }
        return number_format($this->balance,2);
    }

    public function depositAmount(float $amount)
    {
        if($amount<0){
            echo 'Amount is less than zero!';
            return;
        }
        $this->balance += $amount;
        return $this;
    }

    public function deductAmount(float $amount)
    {
        if($amount<0 || $amount>$this->balance){
            echo 'Invalid deduct amount!';
            return;
        }
        $this->balance -= $amount;
        return $this;
    }
}

try{
    $bank = new Bank(100000);
    echo $bank->depositAmount(200000)->deductAmount(14000)->getBalance();
}catch(Exception $e){
    echo $e->getMessage();
}