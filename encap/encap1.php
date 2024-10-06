<?php

class BankAccount {
private $accountNumber;
private $balance;
    function __construct($accNumber, $initailBalnce)
    {
        $this->accountNumber = $accNumber;
        $this->balance = $initailBalnce;
    }
    function deposit($amount)
    {
        $depositBankAccount = ($amount >0) ? $this->balance += $amount
        : "Invalid widthDraw account";
        return $depositBankAccount;

    }
    function getBalnace ()
    {
        return $this->balance;
    }
}
$user = new BankAccount(11111111, 500);

echo ("{$user->deposit(1)}<br>User balance {$user->getBalnace()}");

?>