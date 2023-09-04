<?php

test('example', function () {
    expect(true)->toBeTrue();
});

test('Any dd statements in the project')
    ->expect(['dd'])
    ->not->toBeUsed();
