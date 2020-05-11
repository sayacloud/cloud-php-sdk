<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopUpdate extends RequestAbstract
{
    protected $apiUri = '/shop/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * required
     * @var int
     */
    protected $id;

    /**
     * enum = 'official','third'
     * @var string
     */
    protected $type;

    /**
     * 管理员用户ID
     * @var int
     */
    protected $admin_id;

    /**
     * required
     * @var string
     */
    protected $shop_name;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $lat;

    /**
     * @var string
     */
    protected $lng;

    /**
     * enum = 'allday','custom'
     * @var string
     */
    protected $business_time;

    /**
     * @var string
     */
    protected $work_days;

    /**
     * @var string
     */
    protected $hour_start;

    /**
     * @var string
     */
    protected $hour_end;

    /**
     * @var string
     */
    protected $introduction;

    /**
     * @var string
     */
    protected $service_tel;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var int
     */
    protected $rank;

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param string $shop_name
     */
    public function setShopName(string $shop_name)
    {
        $this->shop_name = $shop_name;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo)
    {
        $this->logo = $logo;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @param string $lat
     */
    public function setLat(string $lat)
    {
        $this->lat = $lat;
    }

    /**
     * @param string $lng
     */
    public function setLng(string $lng)
    {
        $this->lng = $lng;
    }

    /**
     * @param string $business_time
     */
    public function setBusinessTime(string $business_time)
    {
        $this->business_time = $business_time;
    }

    /**
     * @param string $work_days
     */
    public function setWorkDays(string $work_days)
    {
        $this->work_days = $work_days;
    }

    /**
     * @param string $hour_start
     */
    public function setHourStart(string $hour_start)
    {
        $this->hour_start = $hour_start;
    }

    /**
     * @param string $hour_end
     */
    public function setHourEnd(string $hour_end)
    {
        $this->hour_end = $hour_end;
    }

    /**
     * @param string $introduction
     */
    public function setIntroduction(string $introduction)
    {
        $this->introduction = $introduction;
    }

    /**
     * @param string $service_tel
     */
    public function setServiceTel(string $service_tel)
    {
        $this->service_tel = $service_tel;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $website
     */
    public function setWebsite(string $website)
    {
        $this->website = $website;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank)
    {
        $this->rank = $rank;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param int $admin_id
     */
    public function setAdminId(int $admin_id)
    {
        $this->admin_id = $admin_id;
    }


}