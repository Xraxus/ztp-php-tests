<?php
/**
 * Example test.
 */

namespace Test\_01;

use App\_01\Example;
use PHPUnit\Framework\TestCase;

/**
 * Class ExampleTest.
 */
class ExampleTest extends TestCase
{
    /**
     * Test Example.
     */
    public function testExample()
    {
        $this->assertEquals(true, is_object(new Example()));
    }
}
