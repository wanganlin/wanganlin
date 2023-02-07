<?php

declare(strict_types=1);

namespace app\service\user;

use app\model\Log;

class LogService
{
    /**
     * @var Log
     */
    private Log $log;

    /**
     * LogService constructor.
     *
     * @param  Log  $log
     */
    public function __construct(Log $log)
    {
        $this->log = $log;
    }
}
