<?php

declare(strict_types=1);

namespace app\bundles\attachment\response\attachment;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'AttachmentResponse')]
class AttachmentResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'userId', description: '上传用户ID', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'categoryId', description: '分类ID', type: 'integer')]
    private int $categoryId;

    #[OA\Property(property: 'name', description: '文件名', type: 'string')]
    private string $name;

    #[OA\Property(property: 'originalName', description: '原始文件名', type: 'string')]
    private string $originalName;

    #[OA\Property(property: 'path', description: '文件路径', type: 'string')]
    private string $path;

    #[OA\Property(property: 'url', description: '访问URL', type: 'string')]
    private string $url;

    #[OA\Property(property: 'storageType', description: '存储类型: local-本地;oss-阿里云;qiniu-七牛云;cos-腾讯云', type: 'string')]
    private string $storageType;

    #[OA\Property(property: 'fileType', description: '文件类型: image-图片;video-视频;audio-音频;document-文档', type: 'string')]
    private string $fileType;

    #[OA\Property(property: 'mimeType', description: 'MIME类型', type: 'string')]
    private string $mimeType;

    #[OA\Property(property: 'size', description: '文件大小(字节)', type: 'integer')]
    private int $size;

    #[OA\Property(property: 'ext', description: '文件扩展名', type: 'string')]
    private string $ext;

    #[OA\Property(property: 'width', description: '宽度(图片/视频)', type: 'integer')]
    private int $width;

    #[OA\Property(property: 'height', description: '高度(图片/视频)', type: 'integer')]
    private int $height;

    #[OA\Property(property: 'duration', description: '时长(音视频,秒)', type: 'integer')]
    private int $duration;

    #[OA\Property(property: 'md5', description: 'MD5值', type: 'string')]
    private string $md5;

    #[OA\Property(property: 'sha1', description: 'SHA1值', type: 'string')]
    private string $sha1;

    #[OA\Property(property: 'downloadCount', description: '下载次数', type: 'integer')]
    private int $downloadCount;

    #[OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer')]
    private int $status;

    #[OA\Property(property: 'deleted', description: '删除状态: 0-未删除;1-已删除', type: 'integer')]
    private int $deleted;

    #[OA\Property(property: 'createdTime', description: '创建时间', type: 'string')]
    private string $createdTime;

    #[OA\Property(property: 'updatedTime', description: '更新时间', type: 'string')]
    private string $updatedTime;

    #[OA\Property(property: 'deletedTime', description: '删除时间', type: 'string')]
    private string $deletedTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getOriginalName(): string
    {
        return $this->originalName;
    }

    public function setOriginalName(string $originalName): void
    {
        $this->originalName = $originalName;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getStorageType(): string
    {
        return $this->storageType;
    }

    public function setStorageType(string $storageType): void
    {
        $this->storageType = $storageType;
    }

    public function getFileType(): string
    {
        return $this->fileType;
    }

    public function setFileType(string $fileType): void
    {
        $this->fileType = $fileType;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getExt(): string
    {
        return $this->ext;
    }

    public function setExt(string $ext): void
    {
        $this->ext = $ext;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getMd5(): string
    {
        return $this->md5;
    }

    public function setMd5(string $md5): void
    {
        $this->md5 = $md5;
    }

    public function getSha1(): string
    {
        return $this->sha1;
    }

    public function setSha1(string $sha1): void
    {
        $this->sha1 = $sha1;
    }

    public function getDownloadCount(): int
    {
        return $this->downloadCount;
    }

    public function setDownloadCount(int $downloadCount): void
    {
        $this->downloadCount = $downloadCount;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getDeleted(): int
    {
        return $this->deleted;
    }

    public function setDeleted(int $deleted): void
    {
        $this->deleted = $deleted;
    }

    public function getCreatedTime(): string
    {
        return $this->createdTime;
    }

    public function setCreatedTime(string $createdTime): void
    {
        $this->createdTime = $createdTime;
    }

    public function getUpdatedTime(): string
    {
        return $this->updatedTime;
    }

    public function setUpdatedTime(string $updatedTime): void
    {
        $this->updatedTime = $updatedTime;
    }

    public function getDeletedTime(): string
    {
        return $this->deletedTime;
    }

    public function setDeletedTime(string $deletedTime): void
    {
        $this->deletedTime = $deletedTime;
    }
}
