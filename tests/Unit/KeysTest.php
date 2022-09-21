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
    ->expect(EnumWithValues::keysAsString())
    ->toBeString()
    ->toBe('IN_PROGRESS, DONE');

it('can return all keys from a backed enum as a beautified string')
    ->expect(EnumWithValues::keysAsString(beautify: true))
    ->toBeString()
    ->toBe('In Progress, Done');

it('can return all keys from a backed enum with a given string separator')
    ->expect(EnumWithValues::keysAsString(separator: ';'))
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
    ->expect(EnumWithoutValues::keysAsString())
    ->toBeString()
    ->toBe('IN_PROGRESS, DONE');

it('can return all keys from a pure enum as a beautified string')
    ->expect(EnumWithoutValues::keysAsString(beautify: true))
    ->toBeString()
    ->toBe('In Progress, Done');

it('can return all keys from a pure enum with a given string separator')
    ->expect(EnumWithoutValues::keysAsString(separator: ';'))
    ->toBeString()
    ->toBe('IN_PROGRESS;DONE');
