<?php
/**
 * Tests for BridgeCross
 */

use PHPUnit\Framework\TestCase;
use Bridgecross\Bridgecross;

class BridgecrossTest extends TestCase {
    private Bridgecross $instance;

    protected function setUp(): void {
        $this->instance = new Bridgecross(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bridgecross::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
