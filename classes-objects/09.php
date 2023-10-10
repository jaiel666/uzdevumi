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

    public function show_user_name_and_balance()
    {
        $formatted_balance = number_format(abs($this->balance), 2);
        return $this->name . ', $' . $formatted_balance;
    }
}


$posBen = new BankAccount("Benson", 17.25);
echo $posBen->show_user_name_and_balance() . "\n";

$negBen = new BankAccount("Benson", -17.5);
echo $negBen->show_user_name_and_balance() . "\n";
