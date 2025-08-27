<?php

declare(strict_types=1);

/**
 * IDE-only stub to hint that test closures are bound to PHPUnit\Framework\TestCase.
 * Many language servers understand @phpstan-closure-this / @psalm-closure-this.
 */
namespace {
    if (!function_exists('it')) {
        /**
         * @param string $description
         * @param \Closure $closure
         * @phpstan-closure-this \PHPUnit\Framework\TestCase
         * @psalm-closure-this \PHPUnit\Framework\TestCase
         */
        function it(string $description, \Closure $closure): void {}
    }
    
    if (!function_exists('test')) {
        /**
         * @param string $description
         * @param \Closure $closure
         * @phpstan-closure-this \PHPUnit\Framework\TestCase
         * @psalm-closure-this \PHPUnit\Framework\TestCase
         */
        function test(string $description, \Closure $closure): void {}
    }
    
    if (!function_exists('beforeEach')) {
        /** @phpstan-closure-this \PHPUnit\Framework\TestCase @psalm-closure-this \PHPUnit\Framework\TestCase */
        function beforeEach(\Closure $closure): void {}
    }
    
    if (!function_exists('afterEach')) {
        /** @phpstan-closure-this \PHPUnit\Framework\TestCase @psalm-closure-this \PHPUnit\Framework\TestCase */
        function afterEach(\Closure $closure): void {}
    }
    
    if (!function_exists('beforeAll')) {
        /** @phpstan-closure-this \PHPUnit\Framework\TestCase @psalm-closure-this \PHPUnit\Framework\TestCase */
        function beforeAll(\Closure $closure): void {}
    }
    
    if (!function_exists('afterAll')) {
        /** @phpstan-closure-this \PHPUnit\Framework\TestCase @psalm-closure-this \PHPUnit\Framework\TestCase */
        function afterAll(\Closure $closure): void {}
    }
}