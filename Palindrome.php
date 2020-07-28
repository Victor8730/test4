<?php

class Palindrome
{
    public static function isPalindrome($word)
    {
        return (strcasecmp($word, strrev($word)) == 0) ? 'paligone' : 'not paligone';
    }
}

echo Palindrome::isPalindrome('Silis');