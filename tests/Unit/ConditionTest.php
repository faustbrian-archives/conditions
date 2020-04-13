<?php

declare(strict_types=1);

/*
 * This file is part of kodekeep/conditions.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Conditions\Tests\Unit;

use KodeKeep\Conditions\Condition;
use KodeKeep\Conditions\Tests\TestCase;

/**
 * @coversNothing
 */
class ConditionTest extends TestCase
{
    /** @test */
    public function contains(): void
    {
        $this->assertTrue(Condition::contains('Hello World', 'World'));
        $this->assertFalse(Condition::contains('Hello World', 'Planet'));
    }

    /** @test */
    public function does_not_contain(): void
    {
        $this->assertTrue(Condition::doesNotContain('Hello World', 'Planet'));
        $this->assertFalse(Condition::doesNotContain('Hello World', 'World'));
    }

    /** @test */
    public function is(): void
    {
        $this->assertTrue(Condition::is('a', 'a'));
        $this->assertFalse(Condition::is('a', 'b'));
    }

    /** @test */
    public function is_not(): void
    {
        $this->assertTrue(Condition::isNot('a', 'b'));
        $this->assertFalse(Condition::isNot('a', 'a'));
    }

    /** @test */
    public function starts_with(): void
    {
        $this->assertTrue(Condition::startsWith('Hello World', 'Hello'));
        $this->assertFalse(Condition::startsWith('Hello World', 'World'));
    }

    /** @test */
    public function ends_with(): void
    {
        $this->assertTrue(Condition::endsWith('Hello World', 'World'));
        $this->assertFalse(Condition::endsWith('Hello World', 'Hello'));
    }

    /** @test */
    public function has_no_value(): void
    {
        $this->assertTrue(Condition::hasNoValue(''));
        $this->assertFalse(Condition::hasNoValue('Hello World'));
    }

    /** @test */
    public function has_any_value(): void
    {
        $this->assertTrue(Condition::hasAnyValue('abc'));
        $this->assertFalse(Condition::hasAnyValue(''));
    }
}
