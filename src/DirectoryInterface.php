<?php declare(strict_types=1);

namespace Kiboko\Contract\Function;

interface DirectoryInterface extends \RecursiveIterator
{
    public function getPath(): string;
}
