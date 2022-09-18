<?php

namespace EnumHelpers\Tests\Fixtures;

use EnumHelpers\Traits\Keys;
use EnumHelpers\Traits\Values;

enum EnumWithoutValues
{
    use Values, Keys;

    case IN_PROGRESS;
    case DONE;
}
