<?php

namespace Krak\PsrLogUtil;

use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

final class TemplateLoggerTest extends TestCase
{
    public function test_can_apply_template_to_log() {
        $logger = $this->createMock(LoggerInterface::class);
        $logger->expects($this->once())->method('log')->with('info', 'Prefix: foo', []);
        $logger = new TemplateLogger('Prefix: %s', $logger);
        $logger->info("foo");
    }
}
