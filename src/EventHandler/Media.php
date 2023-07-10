<?php declare(strict_types=1);

namespace danog\MadelineProto\EventHandler;

use danog\MadelineProto\Ipc\IpcCapable;
use danog\MadelineProto\MTProto;
use JsonSerializable;

/**
 * Represents a generic media.
 */
abstract class Media extends IpcCapable implements JsonSerializable
{
    /** Media filesize */
    public readonly int $size;

    /** Media file name */
    public readonly string $fileName;

    /** Media file extension */
    public readonly string $fileExt;

    /** Media creation date */
    public readonly int $creationDate;

    /** Media MIME type */
    public readonly string $mimeType;

    /** Time-to-live of media */
    public readonly ?int $ttl;

    /** @var list<array> Thumbnails */
    public readonly array $thumbs;

    /** @var list<array> Video thumbnails */
    public readonly array $videoThumbs;

    /** Whether the media should be hidden behind a spoiler */
    public readonly bool $spoiler;

    /** Media location */
    private readonly array $location;

    /** @internal */
    public function __construct(
        MTProto $API,
        array $rawMedia,
    ) {
        parent::__construct($API);
        [
            'name' => $name,
            'ext' => $this->fileExt,
            'mime' => $this->mimeType,
            'size' => $this->size,
            'InputFileLocation' => $this->location
        ] = $API->getDownloadInfo($rawMedia);
        $this->fileName = "$name.".$this->fileExt;

        $this->creationDate = ($rawMedia['document'] ?? $rawMedia['photo'])['date'];
        $this->ttl = $rawMedia['ttl_seconds'] ?? null;
        $this->spoiler = $rawMedia['spoiler'] ?? false;
    }

    public function jsonSerialize(): mixed
    {
        $v = \get_object_vars($this);
        unset($v['API'], $v['session']);
        $v['_'] = static::class;
        return $v;
    }
}
