<?php

namespace Krak\PsrLogUtil;

use Psr\Log\{LoggerInterface};

final class TemplateLogger extends LoggerDecorator
{
    private $template;

    public function __construct(string $template, LoggerInterface $logger) {
        parent::__construct($logger);
        $this->template = $template;
    }

    public function log($level, $message, array $context = []) {
        parent::log($level, sprintf($this->template, $message), $context);
    }
}
