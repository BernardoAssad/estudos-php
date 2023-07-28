<?php

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL;

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hello all, I said hello") . PHP_EOL;
