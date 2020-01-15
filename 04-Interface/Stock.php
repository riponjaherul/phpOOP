<?php
interface Stock{
    function addStock(int $numberOfItem);
    function deleteStock(int $numberOfItem);
    function viewStock();
}

class MyStock implements Stock{
    private $totalItem = 0;
    public function addStock(int $numberOfItem)
    {
        $this->totalItem += $numberOfItem;
    }

    public function deleteStock(int $numberOfItem)
    {
        if($numberOfItem>$this->totalItem){
            echo 'Invalid Quantity<br>';
            return;
        }
        $this->totalItem -= $numberOfItem;
    }

    public function viewStock()
    {
        echo "Total Item = $this->totalItem";
    }
}

$myStock = new MyStock();
$myStock->addStock(20);
$myStock->addStock(20);
$myStock->deleteStock(41);
$myStock->viewStock();