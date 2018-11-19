<?php
require_once __DIR__.'/vendor/autoload.php';

use App\Sorter;

echo Sorter::wordsAlpha("lemon orange banana apple");
echo "<br>";
echo Sorter::wordsAlpha("лимон апельсин банан яблоко");
echo "<br>";
echo Sorter::wordsAlpha("αβγαβγ αβγαβγαβγ");
