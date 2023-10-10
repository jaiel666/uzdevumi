<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function show_user_name_and_balance(): string
    {

        $formattedBalance = number_format($this->balance, 2);

        $result = $this->name . ', $';

        if ($this->balance >= 0) {
            $result .= $formattedBalance;
        } else {
            $result .= '-' . abs($formattedBalance);
        }


        return $result;
    }
}

$positiveBen = new BankAccount("Benson", 17.25);
echo $positiveBen->show_user_name_and_balance() . "\n";

$negativeBen = new BankAccount("Benson", -17.5);
echo $negativeBen->show_user_name_and_balance() . "\n";
