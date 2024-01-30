<?php

declare(strict_types=1);

namespace app\foundation\response;

abstract class Transformer
{
    public function transformCollection($data): array
    {
        return array_map([$this, 'transform'], $data);
    }

    /**
     * @return mixed
     */
    abstract public function transform($item);
}
