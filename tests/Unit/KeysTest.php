<?php

use EnumHelpers\Tests\Fixtures\EnumWithoutValues;
use EnumHelpers\Tests\Fixtures\EnumWithValues;

it('can return all keys from a backed enum')
    ->expect(EnumWithValues::keys())
    ->toBeArray()
    ->toBe([
        'IN_PROGRESS',
        'DONE',
    ]);

it('can return all keys from a backed enum as string')
    ->expect(EnumWithValues::keys(asString: true))
    ->toBeString()
    ->toBe('IN_PROGRESS, DONE');

it('can return all keys from a backed enum as a beautified string')
    ->expect(EnumWithValues::keys(asString: true, beautify: true))
    ->toBeString()
    ->toBe('In Progress, Done');

it('can return all keys from a backed enum with a given string separator')
    ->expect(EnumWithValues::keys(asString: true, separator: ';'))
    ->toBeString()
    ->toBe('IN_PROGRESS;DONE');

it('can return all keys from a pure enum')
    ->expect(EnumWithoutValues::keys())
    ->toBeArray()
    ->toBe([
        'IN_PROGRESS',
        'DONE',
    ]);

it('can return all keys from a pure enum as string')
    ->expect(EnumWithoutValues::keys(asString: true))
    ->toBeString()
    ->toBe('IN_PROGRESS, DONE');

it('can return all keys from a pure enum as a beautified string')
    ->expect(EnumWithoutValues::keys(asString: true, beautify: true))
    ->toBeString()
    ->toBe('In Progress, Done');

it('can return all keys from a pure enum with a given string separator')
    ->expect(EnumWithoutValues::keys(asString: true, separator: ';'))
    ->toBeString()
    ->toBe('IN_PROGRESS;DONE');
