<?php

class SavingsAccount
{
    private float $annualInterestRate;
    private float $balance;

    public function __construct(float $startingBalance)
    {
        $this->balance = $startingBalance;
        $this->annualInterestRate = 0.0;
    }

    public function setAnnualInterestRate(float $annualInterestRate): void
    {
        $this->annualInterestRate = $annualInterestRate;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function addMonthlyInterest(): void
    {
        $monthlyInterest = ($this->annualInterestRate / 12) / 100;
        $this->balance += $this->balance * $monthlyInterest;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

echo "How much money is in the account?: ";
$startingBalance = floatval(readline());

echo "Enter the annual interest rate: ";
$annualInterestRate = floatval(readline());

echo "How long has the account been opened? ";
$months = intval(readline());

$savingsAccount = new SavingsAccount($startingBalance);
$savingsAccount->setAnnualInterestRate($annualInterestRate);

$totalDeposits = 0.0;
$totalWithdrawals = 0.0;

for ($month = 1; $month <= $months; $month++) {
    echo "Enter amount deposited for month $month: ";
    $deposit = floatval(readline());
    $totalDeposits += $deposit;
    $savingsAccount->deposit($deposit);

    echo "Enter amount withdrawn for month $month: ";
    $withdrawal = floatval(readline());
    $totalWithdrawals += $withdrawal;
    $savingsAccount->withdraw($withdrawal);

    $savingsAccount->addMonthlyInterest();
}

$totalInterestEarned = $savingsAccount->getBalance() - $startingBalance;
$endingBalance = $savingsAccount->getBalance();

echo "Total deposited: $" . number_format($totalDeposits, 2) . "\n";
echo "Total withdrawn: $" . number_format($totalWithdrawals, 2) . "\n";
echo "Interest earned: $" . number_format($totalInterestEarned, 2) . "\n";
echo "Ending balance: $" . number_format($endingBalance, 2) . "\n";
