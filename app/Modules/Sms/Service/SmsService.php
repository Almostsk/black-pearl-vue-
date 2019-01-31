<?php

namespace App\Modules\Sms\Service;

use App\Modules\Sms\Repository\SmsRepository;

class SmsService
{
    /**
     * @var SmsRepository
     */
    private $smsRepository;

    public function __construct(SmsRepository $smsRepository)
    {
        $this->smsRepository = $smsRepository;
    }
}