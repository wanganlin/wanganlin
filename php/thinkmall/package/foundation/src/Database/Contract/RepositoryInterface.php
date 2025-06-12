<?php

declare(strict_types=1);

namespace Juling\Foundation\Database\Contract;

use think\Model;

interface RepositoryInterface
{
    public function model(): Model;
}
