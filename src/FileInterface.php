<?php declare(strict_types=1);

namespace Kiboko\Contract\Function;

interface FileInterface extends AssetInterface
{
    public function getPath(): string;
}
