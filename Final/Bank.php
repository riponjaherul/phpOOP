<?php
class Bank{
    private $accountList = [];
    private $totalAmount = 0;

    public function createAccount(User $user){
        /**
         * Create Account with related information and save total balance in bank
         */
        $this->accountList[$user->accountNumber][] = $user->userName;
        $this->accountList[$user->accountNumber][] = $user->balance;
        $this->totalAmount += $user->balance;
    }

    // This method declare as Final, so any child can not override this method
    public final function viewBalance()
    {
        echo "Total Balance = $this->totalAmount";
    }
}

class User extends Bank{
    public $userName;
    public $accountNumber;
    public $balance;

    public function __construct(string $name, string $accountNumber,float $depositAmount)
    {
        $this->userName = $name;
        $this->accountNumber = $accountNumber;
        $this->balance = $depositAmount;
    }
}
$bank = new Bank();
$user1 = new User('Ripon',101,20000);
$user2 = new User('Kafi',102,28000);
$user3 = new User('Touhid',103,19000);
$bank->createAccount($user1);
$bank->createAccount($user2);
$bank->createAccount($user3);
$bank->viewBalance();