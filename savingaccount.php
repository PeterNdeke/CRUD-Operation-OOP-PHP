<?php

class SavingAccount extends bankAccount{
    
 /**
 * monthly interest rate
 * @var float
 */
 private $interestRate; 
  /**
 * init saving account with account no, initial amount and
 * interest rate
 * @param string $accountNo
 * @param float $initialAmount
 * @param float $interestRate
 */
public function __construct($accountNo,$initialAmount,$interestRate) {
    parent::__construct($accountNo,$initialAmount);
    $this->interestRate = $interestRate;
}
/**
 *  Add interest to the balance
 */
public function addInterest(){
    $amount = parent::getBalance() * $this->interestRate / 100;
    parent::deposit($amount);
    
}
    
}