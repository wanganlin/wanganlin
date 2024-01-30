<?php

declare(strict_types=1);

namespace app\foundation\database\contract;

use think\Model;

interface RepositoryInterface
{
    public function model(): Model;
}
