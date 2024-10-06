<?php 

class BankAcc{
    private $balance;
    function getBalance ()
    {
        return $this->balance;
    }
    function deposit ($amount)
    {
        if($amount >0)
        {
            return $this->balance += $amount;
        }
        
    }


}
class SavingAcc extends BankAcc{
    private $interestRate;
    function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;

    }
    function addInterest()
    {
        $interest = $this->interestRate * $this->getBalance();
        return $this->deposit($interest);
    }

}
    $user = new BankAcc();
    echo($user->deposit(1000));
    

?>