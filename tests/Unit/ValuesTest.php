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

it('returns all keys as a string from a pure enum')
    ->expect(EnumWithoutValues::valuesAsString())
    ->toBeString()
    ->toBe('IN_PROGRESS, DONE');

it('returns all values as a beautified string from a pure enum')
    ->expect(EnumWithoutValues::valuesAsString(beautify: true))
    ->toBeString()
    ->toBe('In Progress, Done');

it('returns all keys as a string  from a pure enum with a given separator')
    ->expect(EnumWithoutValues::valuesAsString(separator: ';'))
    ->toBeString()
    ->toBe('IN_PROGRESS;DONE');

it('returns all values from a backed enum')
    ->expect(EnumWithValues::values())
    ->toBeArray()
    ->toBe([
        'In Progress',
        'Done',
    ]);

it('returns all values as a string from a backed enum')
    ->expect(EnumWithValues::valuesAsString())
    ->toBeString()
    ->toBe('In Progress, Done');

it('returns all values as a string from a backed enum with a given separator')
    ->expect(EnumWithValues::valuesAsString(separator: ';'))
    ->toBeString()
    ->toBe('In Progress;Done');
