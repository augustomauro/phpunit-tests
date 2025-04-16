<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;  // para poder evitar que las funciones se llamen "test_"

use App\Class\DistanceConverter;

class DistanceConverterTest extends TestCase
{
    #[Test] // para poder evitar que las funciones se llamen "test_"
    public function it_returns_same_value_if_no_conversion_defined()
    {
        // Given / Arrange => Dado / Preparar
        $distanceConverter =  new DistanceConverter();

        // When / Act => Cuando / Actuar
        $result = $distanceConverter->convert(100);

        // Then / Assert => Entonces / Afirmar
        $this->assertEquals(100, $result);
    }

    // $distanceConverter->fromMeter()->toKm()->convert(10);
    // $distanceConverter->fromMile()->toMeter()->convert(1);

    #[Test]
    public function it_returns_same_value_if_no_target_is_provided()
    {
        $distanceConverter = new DistanceConverter();
        $this->assertEquals(10, $distanceConverter->fromMeter()->convert(10));
    }

    #[Test]
    public function it_returns_same_value_if_no_target_is_not_provided()
    {
        $distanceConverter = new DistanceConverter();
        $this->assertEquals(10, $distanceConverter->toMeter()->convert(10));
    }

    #[Test]
    public function it_returns_same_value_on_same_source_and_target()
    {
        $distanceConverter = new DistanceConverter();
        $this->assertEquals(1, $distanceConverter->fromMeter()->toMeter()->convert(1));
    }

    #[Test]
    public function it_returns_correct_value_converting_meters_to_km()
    {
        $distanceConverter = new DistanceConverter();
        $this->assertEquals(10, $distanceConverter->fromMeter()->toKm()->convert(10000));
    }

    #[Test]
    public function it_returns_correct_value_converting_km_to_meters()
    {
        $distanceConverter = new DistanceConverter();
        $this->assertEquals(100000, $distanceConverter->fromKm()->toMeter()->convert(100));
    }

    #[Test]
    public function it_returns_correct_value_converting_meters_to_miles()
    {
        $distanceConverter = new DistanceConverter();
        // Para flotantes, conviene usar comparativas con delta [assertEqualsWithDelta() / assertNotEqualsWithDelta()]
        $this->assertEqualsWithDelta(6.213712, $distanceConverter->fromMeter()->toMile()->convert(10000), 0.0001);
    }

    #[Test]
    public function it_returns_correct_value_converting_miles_to_meters()
    {
        $distanceConverter = new DistanceConverter();
        // Para flotantes, conviene usar comparativas con delta [assertEqualsWithDelta() / assertNotEqualsWithDelta()]
        $this->assertEqualsWithDelta(1609.3444, $distanceConverter->fromMile()->toMeter()->convert(1), 0.0001);
    }
}