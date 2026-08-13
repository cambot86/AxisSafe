<?php
/**
 * Tests for AxisSafe
 */

use PHPUnit\Framework\TestCase;
use Axissafe\Axissafe;

class AxissafeTest extends TestCase {
    private Axissafe $instance;

    protected function setUp(): void {
        $this->instance = new Axissafe(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Axissafe::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
