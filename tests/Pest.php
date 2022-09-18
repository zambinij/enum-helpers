<?php

use EnumHelpers\Enums\Tests\TestCase;
use EnumHelpers\Enums\Values;

uses(TestCase::class)->in('Unit');

enum EnumWithValues: string
{
    use Values;

    case IN_PROGRESS = 'In Progress';
    case DONE = 'Done';
}

enum EnumWithoutValues
{
    use Values;

    case IN_PROGRESS;
    case DONE;
}
