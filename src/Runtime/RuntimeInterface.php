<?php declare(strict_types=1);

namespace Kiboko\Contract\Function\Runtime;

use Kiboko\Contract\Function\SatelliteInterface;

interface RuntimeInterface
{
    public function prepare(SatelliteInterface $satellite): void;
    public function build(): array;
}
