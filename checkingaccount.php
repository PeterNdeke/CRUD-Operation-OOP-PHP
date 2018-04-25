<?php
 
class CheckingAccount extends bankAccount{
 
 /**
 * monthly fee
 * @var float
 */
 private $fee;
 
 /**
 * init checking account with account no, initial amount and
 * monthly fee
 * @param string $accountNo
 * @param float $initialAmount
 * @param float $fee
 */
 public function __construct($accountNo,$initialAmount,$fee){
     parent::__construct($accountNo, $initialAmount);
     $this->fee= $fee;  
 }
 
 /**
 *  Deduct monthly fee from balance
 */
 public function deductFee(){
     parent::withdraw($this->fee);
 }
}
