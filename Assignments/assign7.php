<?php

class Shape
{
    public string $shapeName;
    public string $color;
    public bool $filled;
    public float $legnth;
    public float $width;
    public float $diameter;

    public function __construct($shapeName, $color, $filled, $legnth, $width, $diameter)
    {
        $this->shapeName = $shapeName;
        $this->color = $color;
        $this->filled = $filled;
        $this->legnth = $legnth;
        $this->width = $width;
        $this->diameter = $diameter;
    }

    public function __set($name, $value)
    {
        switch ($name) {
            case "shapeName":
                $this->shapeName = $value;
                break;
            case 'color':
                $this->color = $value;
                break;
            case 'filled':
                $this->filled = $value;
                break;
            case 'legnth':
                $this->legnth = $value;
                break;
            case "width":
                $this->width = $value;
                break;
            case "diameter":
                $this->diameter = $value;
                break;
        }
    }

    public function __get($name)
    {
        switch ($name) {
            case "shapeName":
                return $this->shapeName;
                break;
            case 'color':
                return $this->color;
                break;
            case 'filled':
                return $this->filled;
                break;
            case 'legnth':
                return $this->legnth;
                break;
            case 'width':
                return $this->width;
                break;
            case "diameter":
                return $this->diameter;
                break;
            default:
                echo "Invalid Data";
                break;
        }
    }

    public function area()
    {
        if ($this->shapeName === "rectangle") {
            $legnth = $this->legnth;
            $width = $this->width;
            $area = $legnth * $width;
            return $area;
        } else if ($this->shapeName === "square") {
            $legnth = $this->legnth;
            $area = $legnth ** 2;
            return $area;
        } else if ($this->shapeName === "circle") {
            $diameter = $this->diameter;
            $area = pi() * $diameter ** 2;
            return $area;
        } else {
            echo "Invalid shape";
        }
    }

    public function circum()
    {
        if ($this->shapeName === "rectangle") {
            $legnth = $this->legnth;
            $width = $this->width;
            $circum = ($legnth + $width) * 2;
            return $circum;
        } else if ($this->shapeName === "square") {
            $legnth = $this->legnth;
            $circum = $legnth * 4;
            return $circum;
        } else if ($this->shapeName === "circle") {
            $diameter = $this->diameter;
            $circum = 2 * pi() * $diameter;
            return $circum;
        } else {
            echo "Invalid shape";
        }
    }

    public function printData(): void
    {
        if ($this->filled) {
            $fill = "is";
        } else {
            $fill  = "isnt";
        }
        echo "This is {$this->shapeName} <br> 
        color is {$this->color} <br>
        and it {$fill} filled <br>
        it`s area = {$this->area()} <br>
        it`s circumfurance = {$this->circum()} <br>";
    }
}

$rect = new Shape("rectangle", "black", false, 12, 16, 0);
$rect->color = "Orange";
$rect->filled = true;
echo "shapeName is {$rect->shapeName} <br>";
echo "Color is " . $rect->color . "<br>";
echo "Is filled " . $rect->filled . "<br>";
echo "Legnth = {$rect->legnth} <br>";
echo "area = {$rect->area()} <br>";
echo "circum = {$rect->circum()} <br>";
$rect->printData();
############################################################
echo "############################################################ <br>";
$sqr = new Shape("square", "blue", true, 6, 0, 0);
echo "shapeName is {$sqr->shapeName} <br>";
echo "Color is " . $sqr->color . "<br>";
echo "Is filled " . $sqr->filled . "<br>";
echo "Legnth = {$sqr->legnth} <br>";
echo "Width = {$sqr->width} <br> ";
echo "area = {$sqr->area()} <br>";
echo "circum = {$sqr->circum()} <br>";
$sqr->printData();
############################################################
echo "############################################################ <br>";
$circle = new Shape("circle", "blue", true, 0, 0, 3);
echo "shapeName is {$circle->shapeName} <br>";
echo "Color is " . $circle->color . "<br>";
echo "Is filled " . $circle->filled . "<br>";
echo "diameter = {$circle->diameter} <br>";
echo "area = {$circle->area()} <br>";
echo "circum = {$circle->circum()} <br>";
$circle->printData();
