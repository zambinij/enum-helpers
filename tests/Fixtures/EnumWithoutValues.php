<?php

namespace EnumHelpers\Tests\Fixtures;

use EnumHelpers\Enums\Values;

enum EnumWithoutValues
{
    use Values;

    case IN_PROGRESS;
    case DONE;
}
