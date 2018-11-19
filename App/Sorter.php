<?php
namespace App;

class Sorter
{
    public static function wordsAlpha(string $string) : string
    {
        $words = explode(' ',$string);
        foreach($words as $word) {
            $letters = preg_split('//u', $word, null, PREG_SPLIT_NO_EMPTY);
            sort($letters);
            $sorted[] = implode($letters);
        }
        return implode(' ', $sorted);
    }
}