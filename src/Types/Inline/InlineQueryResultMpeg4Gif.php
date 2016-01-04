<?php

namespace TelegramBot\Api\Types\Inline;

/**
 * Class InlineQueryResultMpeg4Gif
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound).
 * By default, this animated MPEG-4 file will be sent by the user with optional caption.
 * Alternatively, you can provide message_text to send it instead of the animation.
 *
 * @package TelegramBot\Api\Types\Inline
 */
class InlineQueryResultMpeg4Gif extends AbstractInlineQueryResult
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['type', 'id', 'mpeg4_url', 'thumb_url'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'type' => true,
        'id' => true,
        'mpeg4_url' => true,
        'mpeg4_width' => true,
        'mpeg4_height' => true,
        'thumb_url' => true,
        'title' => true,
        'caption' => true,
        'message_text' => true,
        'parse_mode' => true,
        'disable_web_page_preview' => true
    ];

    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected $type = 'mpeg4_gif';

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     *
     * @var string
     */
    protected $mpeg4Url;

    /**
     * Optional. Video width
     *
     * @var int
     */
    protected $mpeg4Width;

    /**
     * Optional. Video height
     *
     * @var int
     */
    protected $mpeg4Height;

    /**
     * URL of the static thumbnail (jpeg or gif) for the result
     *
     * @var string
     */
    protected $thumbUrl;

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-200 characters
     *
     * @var string
     */
    protected $caption;

    /**
     * @return string
     */
    public function getMpeg4Url()
    {
        return $this->mpeg4Url;
    }

    /**
     * @param string $mpeg4Url
     */
    public function setMpeg4Url($mpeg4Url)
    {
        $this->mpeg4Url = $mpeg4Url;
    }

    /**
     * @return int
     */
    public function getMpeg4Width()
    {
        return $this->mpeg4Width;
    }

    /**
     * @param int $mpeg4Width
     */
    public function setMpeg4Width($mpeg4Width)
    {
        $this->mpeg4Width = $mpeg4Width;
    }

    /**
     * @return int
     */
    public function getMpeg4Height()
    {
        return $this->mpeg4Height;
    }

    /**
     * @param int $mpeg4Height
     */
    public function setMpeg4Height($mpeg4Height)
    {
        $this->mpeg4Height = $mpeg4Height;
    }

    /**
     * @return string
     */
    public function getThumbUrl()
    {
        return $this->thumbUrl;
    }

    /**
     * @param string $thumbUrl
     */
    public function setThumbUrl($thumbUrl)
    {
        $this->thumbUrl = $thumbUrl;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }
}
