<?php
/**
 * Tests for VictoriaMetrics
 */

use PHPUnit\Framework\TestCase;
use Victoriametrics\Victoriametrics;

class VictoriametricsTest extends TestCase {
    private Victoriametrics $instance;

    protected function setUp(): void {
        $this->instance = new Victoriametrics(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Victoriametrics::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
