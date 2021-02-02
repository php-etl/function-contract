<?php declare(strict_types=1);

namespace Kiboko\Contract\Function;

interface FactoryInterface
{
    public function __invoke(array $configuration): SatelliteBuilderInterface;
}
