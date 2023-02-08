<?php

namespace App\Support;

abstract class Transformer
{
    /**
     * @param $data
     * @return array
     */
    public function transformCollection($data): array
    {
        return array_map([$this, 'transform'], $data);
    }

    /**
     * @param $item
     * @return mixed
     */
    abstract public function transform($item);
}
