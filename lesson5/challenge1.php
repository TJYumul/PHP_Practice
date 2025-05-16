<?php

class BankTransaction {
  public $bank_name;
  public $transaction;
  private $account_no;
  private $amount;
  private $savings_amount = 10000;

  public function __construct($bank_name, $transaction, $account_no, $amount) {
    $this->bank_name = $bank_name;
    $this->transaction = strtoupper($transaction);
    $this->account_no = $account_no;
    $this->amount = $amount;
  }

  public function getInfo() {
    echo '<pre>';
    echo "Bank Name: {$this->bank_name}\n";
    echo "Customer Account No: {$this->account_no}\n";
    echo "Type of Transaction: {$this->transaction}\n";
    echo "Current Balance: {$this->savings_amount}\n";
    echo "Amount: {$this->amount}\n";
    echo '</pre>';
  }

  public function newBalance() {
    echo '<pre>';
    if ($this->transaction == 'D') {
      $this->savings_amount += $this->amount;
      echo "New Balance: {$this->savings_amount}\n";
    } elseif ($this->transaction == 'W') {
      $this->savings_amount -= $this->amount;
      echo "New Balance: {$this->savings_amount}\n";
    } else {
      echo "Unable to process this transaction! Invalid Transaction type!\n";
    }
    echo '</pre>';
  }
}

// Create 3 instances
echo '<pre>Object: customer1</pre>';
$customer1 = new BankTransaction("BDO", "W", "ACNO0000001", 3000);
$customer1->getInfo();
$customer1->newBalance();

echo '<pre>Object: customer2</pre>';
$customer2 = new BankTransaction("BPI", "D", "ACNO0000002", 3000);
$customer2->getInfo();
$customer2->newBalance();

echo '<pre>Object: customer3</pre>';
$customer3 = new BankTransaction("METROBANK", "AB", "ACNO0000003", 3000);
$customer3->getInfo();
$customer3->newBalance();
