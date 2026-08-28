<?php
/**
 * Tests for ShiftXeno
 */

use PHPUnit\Framework\TestCase;
use Shiftxeno\Shiftxeno;

class ShiftxenoTest extends TestCase {
    private Shiftxeno $instance;

    protected function setUp(): void {
        $this->instance = new Shiftxeno(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shiftxeno::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
