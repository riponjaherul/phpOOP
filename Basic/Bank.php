<?php
class Bank{
    private $accountNumber = null;
    private $accountName = null;
    private $balance = 0;
    // For running every account member minimum balance is 500; 
    private $minBalance = 500;

    public function __construct(string $accountNumber,string $accountName)
    {
        $this->accountNumber = $accountNumber;
        $this->accountName = $accountName;
    }

    public function depositeAmount(float $amount)
    {
        $this->balance +=$amount;
    }

    public function deductAmount(float $amount)
    {
        if($this->balance < $this->minBalance){
            echo 'No Balance in this account!<br>';
            return;
        }
        if($amount > $this->balance-$this->minBalance){
            echo 'Requested Amount is greater than Balance!<br>';
            return;
        }
        $this->balance -=$amount;
    }

    public function checkBalance()
    {
        echo 'Acc. Number = '.$this->accountNumber.'<br>';
        echo 'Acc. Name = '.$this->accountName.'<br>';
        echo 'Balances = '.number_format($this->balance,2).'<br>';
    }
}

$bank = new Bank('101.102','Ripon');
$bank->depositeAmount(20000);
$bank->deductAmount(19600);
$bank->depositeAmount(10000);
$bank->deductAmount(19600);
$bank->checkBalance();
echo '<br>---------------<br>';
$bank = new Bank('101.103','Kafi');
$bank->depositeAmount(100000);
$bank->depositeAmount(23000);
$bank->deductAmount(18200);
$bank->checkBalance();