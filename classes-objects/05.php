<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function displayDate()
    {
        return $this->month . '/' . $this->day . '/' . $this->year;
    }
}

$date = new Date(10, 5, 2023);
echo "Initial Date: " . $date->displayDate() . "\n";

$date->setMonth(10);
$date->setDay(6);
$date->setYear(2023);

echo "Modified Date: " . $date->displayDate() . "\n";
