<?php

namespace Exercises\Testing;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testBoolean()
    {
        $this->assertTrue(true);
    }


    public function testMultiplyResult()
    {
        $a = 3;
        $b = 4;

        $result = Math::multiply($a, $b);

        $expected_result = 12;

        $this->assertSame($result, $expected_result);
    }


    public function testDivideResult()
    {
        $this->assertSame(
            Math::divide(15, 3), // result
            5                    // expected result
        );
    }


    /**
     * tests if calling Math::divide with non-numeric first argument
     * throws an exception of type InvalidArgumentException
     */
    public function testDivideFirstArgumentNotNumericThrowsException()
    {
        // expect that the FOLLOWING code will throw InvalidArgumentException
        $this->expectException('InvalidArgumentException');

        Math::divide('abc', 3);
    }


    public function testDivideSecondArgumentNotNumericThrowsException()
    {
        $this->expectException('InvalidArgumentException');

        Math::divide(15, 'abc');
    }

    public function testDivideByZeroThrowsException()
    {
        $this->expectException('DivisionByZeroError');

        Math::divide(15, 0);
    }
}