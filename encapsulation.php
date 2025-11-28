<?php

class BankAccount
{
    private $blance;
    public function __construct($initalBlance)
    {
        $this->blance = $initalBlance;
    }

    public function deposite($amount)
    {
        if ($amount > 0) {
            $this->blance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->blance) {
            $this->blance -= $amount;
        }
    }
    public function getblance()
    {
        return $this->blance;
    }
}


$bank = new BankAccount(5000);
$bank->deposite(80);
$bank->withdraw(70);
echo $bank->getblance();