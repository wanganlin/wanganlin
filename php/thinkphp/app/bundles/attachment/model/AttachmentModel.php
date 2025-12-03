<?php

declare(strict_types=1);

namespace app\bundles\attachment\model;

use think\Model;

class AttachmentModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'attachment';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'user_id',
        'category_id',
        'name',
        'original_name',
        'path',
        'url',
        'storage_type',
        'file_type',
        'mime_type',
        'size',
        'ext',
        'width',
        'height',
        'duration',
        'md5',
        'sha1',
        'download_count',
        'status',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ];
}
