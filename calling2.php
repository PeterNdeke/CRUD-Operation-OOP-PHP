<?php
require_once('classes/bankaccount.php');
require_once('classes/checkingaccount.php');
 
$sa = new CheckingAccount('12121424', 2000, 2.5);

echo 'Bank Account #'. $sa->getAccountNumber().'<br/>';
echo 'Balance is: #'.$sa->getBalance(). '<br/>';
echo 'Deducting fee'. '<br/>';
$sa->deductFee();
echo 'Balance is '.$sa->getBalance();
 
//echo 'Bank account #' . $sa->getAccountNumber() . '<br/>';
//echo 'Balance: $' . $sa->getBalance() . '<br/>';
// 
//echo 'Adding interest...' . '<br/>';
//$sa->addInterest();
// 
//echo 'Balance: $' . $sa->getBalance();