<?php

namespace Tests;

use App\Class\FibonacciService;
use PHPUnit\Framework\TestCase;

class FibonacciServiceTest extends TestCase
{
    public function test_when_n_is_zero()
    {
        // Arrange
        $service = new FibonacciService();
        
        // Act
        $result = $service->calculate(0);

        // Assert
        $this->assertEquals(0, $result);
    }

    public function test_when_n_is_one()
    {
        // Arrange
        $service = new FibonacciService();
        
        // Act
        $result = $service->calculate(1);

        // Assert
        $this->assertEquals(1, $result);
    }

    public function test_when_n_is_two()
    {
        // Arrange
        $service = new FibonacciService();
        
        // Act
        $result = $service->calculate(2);

        // Assert
        $this->assertEquals(1, $result);
    }

    public function test_when_n_is_five()
    {
        // Arrange
        $service = new FibonacciService();
        
        // Act
        $result = $service->calculate(5);

        // Assert
        $this->assertEquals(5, $result);
    }

    public function test_when_n_is_six()
    {
        // Arrange
        $service = new FibonacciService();
        
        // Act
        $result = $service->calculate(6);

        // Assert
        $this->assertEquals(8, $result);
    }

    public function test_when_n_is_seven()
    {
        // Arrange
        $service = new FibonacciService();
        
        // Act
        $result = $service->calculate(7);

        // Assert
        $this->assertEquals(13, $result);
    }

    public function test_when_n_is_ten()
    {
        // Arrange
        $service = new FibonacciService();
        
        // Act
        $result = $service->calculate(10);

        // Assert
        $this->assertEquals(55, $result);
    }
}