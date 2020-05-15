<?php

namespace SayaCloud\Api\Adv;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class AdvUpdate extends RequestAbstract
{
    protected $apiUri = '/store-adv/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * enum = shop_slider, points_slider, adv
     * @var string
     */
    protected $position;

    /**
     * @var string
     */
    protected $image_url;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $link_url;

    /**
     * @var int
     */
    protected $rank;

    /**
     * enum = enabled, disabled
     * @var string
     */
    protected $state;

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @param string $image_url
     */
    public function setImageUrl(string $image_url): void
    {
        $this->image_url = $image_url;
    }

    /**
     * @param string $link_url
     */
    public function setLinkUrl(string $link_url): void
    {
        $this->link_url = $link_url;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}