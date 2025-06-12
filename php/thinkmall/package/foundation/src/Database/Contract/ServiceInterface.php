<?php

declare(strict_types=1);

namespace Juling\Foundation\Database\Contract;

interface ServiceInterface
{
    public function getRepository(): CurdRepositoryInterface;
}
