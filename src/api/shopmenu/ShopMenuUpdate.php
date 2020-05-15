<?php

namespace SayaCloud\Api\Adv;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopMenuUpdate extends RequestAbstract
{
    protected $apiUri = '/store-menu/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * enum = custom_1, custom_2, default
     * @var string
     */
    protected $position;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var string
     */
    protected $menu;

    /**
     * @var string
     */
    protected $link;

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
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @param string $menu
     */
    public function setMenu(string $menu): void
    {
        $this->menu = $menu;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
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


}