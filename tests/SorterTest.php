<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Sorter;

final class SorterTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertEquals(Sorter::wordsAlpha("lemon orange banana apple"),"elmno aegnor aaabnn aelpp");
        $this->assertEquals(Sorter::wordsAlpha("лимон апельсин банан яблоко"),"илмно аеилнпсь аабнн бклооя");
        $this->assertEquals(Sorter::wordsAlpha("αβγαβγ αβγαβγαβγ"),"ααββγγ αααβββγγγ");
    }
}