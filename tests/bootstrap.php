<?php

// Load the Elgg test bootstrapper
$engine = dirname(__DIR__, 4) . '/engine';

if (!is_dir($engine)) {
	$engine = dirname(__DIR__, 4) . '/vendor/elgg/elgg/engine';
}

require_once "{$engine}/tests/phpunit/bootstrap.php";
