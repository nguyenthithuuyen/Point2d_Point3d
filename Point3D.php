<?php

include_once('Point2D.php');

class Point3D extends Point2D
{
    public $z;

    public function __construct($x = 0.0, $y = 0.0, $z = 0.0)
    {
        $this->z = $z;
        parent::__construct($x, $y);
    }

    /**
     * @return float|mixed
     */
    public function getZ()
    {
        return $this->x;
    }

    /**
     * @param float|mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getXYZ($array)
    {
        $array = [$this->x,$this->y,$this->z];


    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function toString()
    {
        echo 'X :'.$this->x . "</br>".'Y :' . $this->y . "</br>" .'Z :'. $this->z;
    }
}