<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Stickers
{
    /**
     * Create a stickerset, bots only.
     *
     * @param array $user_id Stickerset owner @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $title Stickerset name, `1-64` chars
     * @param string $short_name Short name of sticker set, to be used in [sticker deep links »](https://core.telegram.org/api/links#stickerset-links). Can contain only english letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and, **if called by a bot**, must end in `"_by_<bot_username>"`. `<bot_username>` is case insensitive. 1-64 characters.
     * @param array $stickers Stickers @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $masks Whether this is a mask stickerset @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $animated Whether this is an animated stickerset @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $videos Whether this is a video stickerset @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $thumb Thumbnail @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $software Used when [importing stickers using the sticker import SDKs](https://core.telegram.org/import-stickers), specifies the name of the software that created the stickers
     *
     *
     * @return array
     */
    public function createStickerSet(array $user_id, string $title, string $short_name, array $stickers, array $masks = [], array $animated = [], array $videos = [], array $thumb = [], string $software = '');

    /**
     * Remove a sticker from the set where it belongs, bots only. The sticker set must have been created by the bot.
     *
     * @param array $sticker The sticker to remove @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function removeStickerFromSet(array $sticker);

    /**
     * Changes the absolute position of a sticker in the set to which it belongs; for bots only. The sticker set must have been created by the bot.
     *
     * @param array $sticker The sticker @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $position The new position of the sticker, zero-based
     *
     *
     * @return array
     */
    public function changeStickerPosition(array $sticker, int $position);

    /**
     * Add a sticker to a stickerset, bots only. The sticker set must have been created by the bot.
     *
     * @param array $stickerset The stickerset @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $sticker The sticker @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function addStickerToSet(array $stickerset, array $sticker);

    /**
     * Set stickerset thumbnail.
     *
     * @param array $stickerset Stickerset @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $thumb Thumbnail @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function setStickerSetThumb(array $stickerset, array $thumb);

    /**
     * Check whether the given short name is available.
     *
     * @param string $short_name Short name
     *
     *
     * @return array
     */
    public function checkShortName(string $short_name);

    /**
     * Suggests a short name for a given stickerpack name.
     *
     * @param string $title Sticker pack name
     *
     *
     * @return array
     */
    public function suggestShortName(string $title);
}