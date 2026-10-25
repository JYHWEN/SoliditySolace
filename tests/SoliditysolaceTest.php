<?php
/**
 * Tests for SoliditySolace
 */

use PHPUnit\Framework\TestCase;
use Soliditysolace\Soliditysolace;

class SoliditysolaceTest extends TestCase {
    private Soliditysolace $instance;

    protected function setUp(): void {
        $this->instance = new Soliditysolace(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditysolace::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
