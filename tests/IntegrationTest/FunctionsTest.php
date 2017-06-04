<?php

declare(strict_types=1);

namespace DI\Test\IntegrationTest;

class FunctionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function including_functions_twice_should_not_error()
    {
        include __DIR__ . '/../../src/functions.php';
        include __DIR__ . '/../../src/functions.php';
    }
}
