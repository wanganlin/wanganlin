<?php

declare(strict_types=1);

namespace app\foundation\database\contract;

interface ServiceInterface
{
    public function getRepository(): CurdRepositoryInterface;
}
