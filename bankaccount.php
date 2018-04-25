<?php

class bankAccount{
 /**
 * bank account number
 * @var string bank account number
 */
 private $accountNumber;
 /**
 * total balance
 * @var float total balance
 */
 private $totalBalance;
 
 public function __construct($accountNumber,$initialBalance) {
     $this->accountNumber = $accountNumber;
     $this->totalBalance = $initialBalance;
     
 }

  /**
 * deposit money to the bank account
 * @param float $amount amount to deposit
 */
 public function deposit($amount){
 $this->totalBalance += $amount; 
 }
 
 /**
 * withdraw money from the bank account
 * @param double $amount
 */
 public function withdraw($amount){
 if($amount > $this->totalBalance)
 die('Not enough money to withdraw');
 
 $this->totalBalance -= $amount;
 }
 
 /**
 * returns total balance 
 * @return float total balance
 */
 public function getBalance(){
 return $this->totalBalance;
 }
 
 /**
 * return bacnk account number
 */
 public function getAccountNumber(){
 return $this->accountNumber;
 }
 
 /**
 * set bank account number
 * @param string $accountNumber
 */
 public function setAccountNumber($accountNumber){
 $this->accountNumber = $accountNumber;
 
 }
    
    
    
}
// create a new bank account object
//$account = new BankAccount();
// 
//$account->setAccountNumber('1243845355');
//echo sprintf("Bank account # %s<br/>",$account->getAccountNumber());
// 
//echo sprintf("Deposit $2000 to the bank account.<br/>");
//$account->deposit(2000);
//echo sprintf("Total balance %0.2f<br/>", $account->getBalance());
// 
//echo sprintf("Withdraw $100 from the bank account.<br/>");
//$account->withdraw(100);
//echo sprintf("Total balance %0.2f<br/>", $account->getBalance());
// 
//echo sprintf("Withdraw $2000 from the bank account.<br/>");
//$account->withdraw(2000);