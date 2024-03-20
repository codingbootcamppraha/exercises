<?php

namespace Exercises\Testing;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testMyFirstTestToCheckIfTrueIsTrue()
    {
        // do some testing, try something
        $result = true;

        $this->assertTrue($result);
    }

    public function testMySecondTestToCheckIfTrueIsTrue()
    {
        // do some testing, try something
        $result = true;

        $this->assertTrue($result);
    }

    public function testMultiplyResult()
    {
        $operand_a = 3;
        $operand_b = 4;

        $expected_result = 12;

        $actual_result = Math::multiply($operand_a, $operand_b);

        $this->assertSame($expected_result, $actual_result);
    }

    public function testDivideResult()
    {
        $this->assertSame(
            4,
            Math::divide(12, 3)
        );
    }

    public function testDivideDecimalResult()
    {
        $this->assertSame(
            13 / 3,
            Math::divide(13, 3)
        );
    }

    public function testDivideFirstArgumentNotNumericThrowsException()
    {
        $this->expectException('InvalidArgumentException');

        Math::divide('abc', 3);
    }

    public function testDivideSecondArgumentNotNumericThrowsException()
    {
        $this->expectException('InvalidArgumentException');

        Math::divide(12, 'abc');
    }

    public function testDivideByZeroThrowsException()
    {
        $this->expectException('DivisionByZeroError');

        Math::divide(12, 0);
    }
}