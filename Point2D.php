<?php


class Point2D
{
    public $x;
    public $y;

    public function __construct($x = 0.0, $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float|mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return float|mixed
     */

    /**
     * @param float|mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }


    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float|mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function getXY($array)
    {
       $array=[$this->x,$this->y];
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

    }
    public function toString()
    {
        echo 'X :'.$this->x . "</br>".'Y :' . $this->y.'<br>';
    }

}