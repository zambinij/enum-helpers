<?php

namespace EnumHelpers\Tests\Fixtures;

use EnumHelpers\Enums\Values;

enum EnumWithValues: string
{
    use Values;

    case IN_PROGRESS = 'In Progress';
    case DONE = 'Done';
}
