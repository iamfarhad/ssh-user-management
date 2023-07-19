<?php

namespace App\Enums;

enum UserStatus: string
{
    case NEW = 'NEW';

    case EXPIRED = 'EXPIRED';

    case ACTIVE = 'ACTIVE';

}
