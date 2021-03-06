<?php

$base = dirname(__DIR__);
$vendorDir = dirname(dirname($base));

if (file_exists($file = $base . '/vendor/autoload.php')) {
	include $file;
} elseif (file_exists($file = $vendorDir . '/autoload.php')) {
	include $file;
} else {
	throw new Exception("You don't have an autoload.");

}
