<?php

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function __toString(): string
    {
        return "$this->name balance: $" . number_format($this->balance, 2) . "\n";
    }
}

echo "----------FIRST ACCOUNT--------------\n";
echo "Starting " . $bartos_account = new Account("Bartos account", 100.00);

$depositAmount = 20.00;
$bartos_account->deposit($depositAmount);

echo "Deposit: $" . number_format($depositAmount, 2) . "\n";
echo $bartos_account;

echo "----------FIRST MONEY TRANSFER--------------\n";
echo "Starting " . $matts_account = new Account("Matts account", 1000.00);
echo "Starting " . $my_account = new Account("My account", 0.00);

$withdrawAmount = 100.00;
$matts_account->withdraw($withdrawAmount);

$depositAmount = 100.00;
$my_account->deposit($depositAmount);
echo "-----------------------------------------------\n";
echo "Withdrawal from Matts account: $" . number_format($withdrawAmount, 2) . "\n";
echo "Deposit to My account: $" . number_format($depositAmount, 2) . "\n";
echo "-----------------------------------------------\n";
echo "Matts account balance: $" . number_format($matts_account->getBalance(), 2) . "\n";
echo "My account balance: $" . number_format($my_account->getBalance(), 2) . "\n";

echo "----------MONEY TRANSFER-----------------------\n";
function transfer(Account $from, Account $to, float $howMuch): void
{
    $from->withdraw($howMuch);
    $to->deposit($howMuch);
}

echo "Starting " . $accountA = new Account("A", 100.00);
echo "Starting " .$accountB = new Account("B", 0.00);
echo "Starting " .$accountC = new Account("C", 0.00);
echo "-----------------------------------------------\n";
$transferAmount1 = 50.00;
transfer($accountA, $accountB, $transferAmount1);

$transferAmount2 = 25.00;
transfer($accountB, $accountC, $transferAmount2);

echo "Transfer from A to B: $" . number_format($transferAmount1, 2) . "\n";
echo "Transfer from B to C: $" . number_format($transferAmount2, 2) . "\n";
echo "-----------------------------------------------\n";
echo "Account A balance: $" . number_format($accountA->getBalance(), 2) . "\n";
echo "Account B balance: $" . number_format($accountB->getBalance(), 2) . "\n";
echo "Account C balance: $" . number_format($accountC->getBalance(), 2) . "\n";


