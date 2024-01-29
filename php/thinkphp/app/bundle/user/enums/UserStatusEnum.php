<?php

declare(strict_types=1);

namespace app\bundle\user\enums;

enum UserStatusEnum: string
{
    const SYSTEM_TOKEN = 'token';

    const CONSOLE_MODULE = 'console';

    const USER_MODULE = 'user';

}
