<?php

namespace App\Utils;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;

function createLogger(string $type) {
  $logger = new Logger($type);
  // フォーマット
  $output = "%message%\n";
  $formatter = new LineFormatter($output);
  // StreamHandlerでファイルにログを出力
  $stream = new StreamHandler(LoggerType::getLogfilePath($type), Logger::INFO);
  $stream->setFormatter($formatter);
  $logger->pushHandler($stream);
  return $logger;
}

class LoggerType
{
  const APPLY = 'apply';
  const FAILURE = 'failure';

  public static function getLogfilePath(string $type): ?string {
    if ($type === 'apply') {
      return '/var/www/test/test1.log';
    }
    if ($type === 'failure') {
      return '/var/www/test/test2.log';
    }
    return null;
  }
}
