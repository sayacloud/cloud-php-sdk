<?php

namespace SayaCloud\Api\Payment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class PaymentCommentNew extends RequestAbstract
{

    protected $apiUri = '/payment/comment';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $payment_id;

    /**
     * @var int
     */
    protected $rating;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var string
     */
    protected $images;

    /**
     * @param int $payment_id
     */
    public function setPaymentId(int $payment_id): void
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @param string $images
     */
    public function setImages(string $images): void
    {
        $this->images = $images;
    }
}