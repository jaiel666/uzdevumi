<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(Point $p1, Point $p2)
    {
        $x1 = $p1->x; //  5
        $y1 = $p1->y; //  2
        $p1->x = $p2->x; // 5 -> -3
        $p1->y = $p2->y;  // 2 -> 6
        $p2->x = $x1; // -3 -> 5
        $p2->y = $y1; // 6 -> 2
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")\n";
echo "(" . $p2->x . ", " . $p2->y . ")";
