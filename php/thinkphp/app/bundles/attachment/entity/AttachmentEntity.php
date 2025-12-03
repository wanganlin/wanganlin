<?php

declare(strict_types=1);

namespace app\bundles\attachment\entity;

use Juling\Foundation\Support\ArrayHelper;

class AttachmentEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUserId = 'user_id'; // 上传用户ID

    const string getCategoryId = 'category_id'; // 分类ID

    const string getName = 'name'; // 文件名

    const string getOriginalName = 'original_name'; // 原始文件名

    const string getPath = 'path'; // 文件路径

    const string getUrl = 'url'; // 访问URL

    const string getStorageType = 'storage_type'; // 存储类型: local-本地;oss-阿里云;qiniu-七牛云;cos-腾讯云

    const string getFileType = 'file_type'; // 文件类型: image-图片;video-视频;audio-音频;document-文档

    const string getMimeType = 'mime_type'; // MIME类型

    const string getSize = 'size'; // 文件大小(字节)

    const string getExt = 'ext'; // 文件扩展名

    const string getWidth = 'width'; // 宽度(图片/视频)

    const string getHeight = 'height'; // 高度(图片/视频)

    const string getDuration = 'duration'; // 时长(音视频,秒)

    const string getMd5 = 'md5'; // MD5值

    const string getSha1 = 'sha1'; // SHA1值

    const string getDownloadCount = 'download_count'; // 下载次数

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getDeleted = 'deleted'; // 删除状态: 0-未删除;1-已删除

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    const string getDeletedTime = 'deleted_time'; // 删除时间

    private int $id;

    private int $userId;

    private int $categoryId;

    private string $name;

    private string $originalName;

    private string $path;

    private string $url;

    private string $storageType;

    private string $fileType;

    private string $mimeType;

    private int $size;

    private string $ext;

    private int $width;

    private int $height;

    private int $duration;

    private string $md5;

    private string $sha1;

    private int $downloadCount;

    private int $status;

    private int $deleted;

    private string $createdTime;

    private string $updatedTime;

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
