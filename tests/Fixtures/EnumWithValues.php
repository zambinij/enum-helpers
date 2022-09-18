<?php

namespace EnumHelpers\Tests\Fixtures;

use EnumHelpers\Traits\Keys;
use EnumHelpers\Traits\Values;

enum EnumWithValues: string
{
    use Values, Keys;

    case IN_PROGRESS = 'In Progress';
    case DONE = 'Done';
}
