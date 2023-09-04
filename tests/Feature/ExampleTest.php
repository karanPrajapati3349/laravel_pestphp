<?php

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

test('example', function () {
    expect(true)->toBeTrue();
});
it('does not contain debugger in resources folder', function () {
    $output = shell_exec("grep -r 'debugger;' resources/");
    $this->assertSame('', $output, 'Found debugger statements in resources folder');
});
it('does not contain alert in resources folder', function () {
    $output = shell_exec("grep -r 'alert(' resources/");
    $this->assertSame('', $output, 'Found alert statements in resources folder');
});

it('does not contain console.log in resources folder', function () {
    $output = shell_exec("grep -r 'console.log' resources/");
    $this->assertSame('', $output, 'Found console.log statements in resources folder');
});
test('Any dd statements in the project')
    ->expect(['dd'])
    ->not->toBeUsed();