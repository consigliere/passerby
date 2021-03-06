<?php
/**
 * Service.php
 * Created by @anonymoussc on 01/03/2019 5:55 PM.
 */

/**
 * Copyright(c) 2019. All rights reserved.
 * Last modified 6/7/19 7:23 AM
 */

namespace App\Components\Passerby\Services;

use App\Components\Signal\Shared\{
    ErrorLog, Signal
};
use App\Components\Signature\Services\SignatureService as BaseService;

/**
 * Class Service
 * @package App\Components\Passerby\Services
 */
class Service extends BaseService
{
    use Signal, ErrorLog;
}