<?php
class Circle
{
    private float $raduis;
    public function __construct(float $raduis)
    {
        $this->raduis = $raduis;
    }

    private function Area(): float
    {
        return pi() * pow($this->raduis, 2);
    }

    private function Pirimeter()
    {
        return 2 * pi() * $this->raduis;
    }

    public function __get($name)
    {
        switch ($name) {
            case 'Area':
                return $this->Area();
                break;
            case "Pirimeter":
                return $this->Pirimeter();
                break;
        }
    }
}


$circ = new Circle(4.44);
echo $circ->Pirimeter;
