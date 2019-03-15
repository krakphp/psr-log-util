<?php

namespace Krak\PsrLogUtil;

use Psr\Log\{AbstractLogger, LoggerInterface};

abstract class LoggerDecorator extends AbstractLogger
{
    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function log($level, $message, array $context = []) {
        $this->logger->log($level, $message, $context);
    }
}
