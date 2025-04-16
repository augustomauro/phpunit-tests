<?php

namespace Tests;

use App\Class\FactorialService;
use PHPUnit\Framework\TestCase;

class FactorialServiceTest extends TestCase
{
    public function test_factorial_zero()
    {
        // Arrange
        $service = new FactorialService();
        // Act
        $result = $service->calculate(0);   // int
        // Assert
        $this->assertEquals(1, $result);
    }

    public function test_factorial_five()
    {
        // Arrange
        $service = new FactorialService();
        // Act
        $result = $service->calculate(5);   // int
        // Assert
        $this->assertEquals(5, $result);
    }
}