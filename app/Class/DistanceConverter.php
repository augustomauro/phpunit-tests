<?php

namespace App\Class;

class DistanceConverter
{
    private $fromUnit;
    private $toUnit;

    public function convert($distance)
    {
        // Refactoring
        // if ($this->fromUnit == $this->toUnit || !$this->fromUnit || !$this->toUnit) {
        //     return $distance;
        // }
        if ($this->fromUnit == 'meter') {
            return $this->convertFromMeter($distance);  // Refactoring
            // switch ($this->toUnit) {
            //     case 'km':
            //         return $distance / 1000;
            //         break;

            //     case 'mile':
            //         return $distance * 0.000621371;
            //         break;
                
            //     default:
            //         return $distance;
            //         break;
            // }
        }
        if ($this->fromUnit == 'km') {
            return $this->convertFromKm($distance); // Refactoring
            // switch ($this->toUnit) {
            //     case 'meter':
            //         return $distance * 1000;
            //         break;

            //     case 'mile':
            //         return ($distance * 1000) / 0.000621371;
            //         break;
                
            //     default:
            //         return $distance;
            //         break;
            // }
        }
        if ($this->fromUnit == 'mile') {
            return $this->convertFromMile($distance);   // Refactoring
            // switch ($this->toUnit) {
            //     case 'meter':
            //         return $distance * (1 / 0.000621371);
            //         break;

            //     case 'km':
            //         return ($distance * (1 / 0.000621371)) * 1000;
            //         break;
                
            //     default:
            //         return $distance;
            //         break;
            // }
        }
        return $distance;
    }

    // Refactoring:
    private function convertFromMeter($distance)
    {
        switch ($this->toUnit) {
            case 'km':
                return $distance / 1000;
                break;

            case 'mile':
                return $distance * 0.000621371;
                break;
            
            default:
                return $distance;
                break;
        }
    }

    // Refactoring:
    private function convertFromKm($distance)
    {
        switch ($this->toUnit) {
            case 'meter':
                return $distance * 1000;
                break;

            case 'mile':
                return ($distance * 1000) / 0.000621371;
                break;
            
            default:
                return $distance;
                break;
        }
    }

    // Refactoring:
    private function convertFromMile($distance)
    {
        switch ($this->toUnit) {
            case 'meter':
                return $distance * (1 / 0.000621371);
                break;

            case 'km':
                return ($distance * (1 / 0.000621371)) * 1000;
                break;
            
            default:
                return $distance;
                break;
        }
    }

    public function fromMeter()
    {
        $this->fromUnit = 'meter';
        return $this;
    }

    public function fromKm()
    {
        $this->fromUnit = 'km';
        return $this;
    }

    public function fromMile()
    {
        $this->fromUnit = 'mile';
        return $this;
    }

    public function toMeter()
    {
        $this->toUnit = 'meter';
        return $this;
    }

    public function toKm()
    {
        $this->toUnit = 'km';
        return $this;
    }

    public function toMile()
    {
        $this->toUnit = 'mile';
        return $this;
    }
}