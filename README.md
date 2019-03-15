# PSR Log Util

This library contains a set of utilities and decorators for PSR-3 Compatible loggers.

## Installation

Install with composer at `krak/psr-log-util`

## Usage

### TemplateLogger

The TemplateLogger is a decorator that allows you to wrap a template around your log messages.

```php
<?php

use Krak\PsrLogUtil\TemplateLogger;

$logger = new SomePsr3Logger();
$logger = new TemplateLogger('Acme: %s', $logger);
$logger->info("Hi");
// should output something like: Acme: Hi
```

This can be very useful for prefixing certian logs to make them easier to search later on.
