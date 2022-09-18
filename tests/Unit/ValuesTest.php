<?php

use EnumHelpers\Tests\Fixtures\EnumWithoutValues;
use EnumHelpers\Tests\Fixtures\EnumWithValues;

it('returns all keys from a pure enum')
    ->expect(EnumWithoutValues::values())
    ->toBeArray()
    ->toBe([
        'IN_PROGRESS',
        'DONE',
    ]);

it('returns all keys as string from a pure enum')
    ->expect(EnumWithoutValues::values(asString: true))
    ->toBeString()
    ->toBe('IN_PROGRESS, DONE');

it('returns all values as beautified string from a pure enum')
    ->expect(EnumWithoutValues::values(asString: true, beautify: true))
    ->toBeString()
    ->toBe('In Progress, Done');

it('returns all values from a backed enum')
    ->expect(EnumWithValues::values())
    ->toBeArray()
    ->toBe([
        'In Progress',
        'Done',
    ]);

it('returns all values as string from a backed enum')
    ->expect(EnumWithValues::values(asString: true))
    ->toBeString()
    ->toBe('In Progress, Done');
