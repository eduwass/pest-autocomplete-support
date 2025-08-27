<?php

declare(strict_types=1);

/**
 * IDE-only stub for better autocomplete on visit() chains.
 * This file is not autoloaded by runtime; it only informs the language server.
 */
namespace {
    if (!function_exists('visit')) {
        /**
         * @param array<int,string>|string $url
         * @param array<string,mixed> $options
         * @return \Pest\Browser\Api\Webpage
         */
        function visit(array|string $url, array $options = []) {}
    }
}
