<?php declare(strict_types=1);

namespace Kiboko\Contract\Function;

use Psr\Log\LoggerInterface;

interface SatelliteInterface
{
    public function dependsOn(string ...$dependencies): self;

    public function withFile(FileInterface|DirectoryInterface ...$files): self;

    public function build(LoggerInterface $logger): void;

//    public function start(LoggerInterface $logger, NetworkInterface $network): void;

//    public function send(\JsonSerializable $payload): DeferredInterface;

//    public function stop(): void;

//    public function poll(LoggerInterface $logger): void;
}
