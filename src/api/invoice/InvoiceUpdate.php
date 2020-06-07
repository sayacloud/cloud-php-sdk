<?php

namespace SayaCloud\Api\Invoice;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class InvoiceUpdate extends RequestAbstract
{

    protected $apiUri = '/invoice/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $payment_id;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $id_code;

    /**
     * @var string
     */
    protected $bank_name;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $electronic_invoice;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param int $payment_id
     */
    public function setPaymentId(int $payment_id): void
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @param int $buyer_id
     */
    public function setBuyerId(int $buyer_id): void
    {
        $this->buyer_id = $buyer_id;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $id_code
     */
    public function setIdCode(string $id_code): void
    {
        $this->id_code = $id_code;
    }

    /**
     * @param string $bank_name
     */
    public function setBankName(string $bank_name): void
    {
        $this->bank_name = $bank_name;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param string $electronic_invoice
     */
    public function setElectronicInvoice(string $electronic_invoice): void
    {
        $this->electronic_invoice = $electronic_invoice;
    }

}