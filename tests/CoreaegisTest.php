<?php
/**
 * Tests for CoreAegis
 */

use PHPUnit\Framework\TestCase;
use Coreaegis\Coreaegis;

class CoreaegisTest extends TestCase {
    private Coreaegis $instance;

    protected function setUp(): void {
        $this->instance = new Coreaegis(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coreaegis::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
