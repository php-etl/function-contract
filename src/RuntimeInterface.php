<?php declare(strict_types=1);

namespace Kiboko\Contract\Function;

interface RuntimeInterface
{
    public function prepare(SatelliteInterface $satellite): void;
    public function build(): array;
}
