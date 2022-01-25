<?php

/**
* Write a function that validates a Universal Product Code (UPC).
*
* UPC codes are always 12 numeric digits.
*
* The final digit of a UPC is a check digit computed as follows:
*
* 1. Add the digits in the odd-numbered positions from the right 
* (first, third, fifth, etc. - not including the check digit) together and multiply by three.
* 
* 2. Add the digits (up to but not including the check digit) in the even-numbered positions
* (second, fourth, sixth,
* etc.) to the result.
*
* 3. Take the remainder of the result divided by 10 (ie. the modulo 10 operation). If the
* remainder is equal to 0 then use 0 as the check digit, 
* and if not 0 subtract the remainder from 10 to derive the check digit.
*
* Example 1:
* - Input: 012345678905
* - Output: true
*
* Example 2:
* - Input: 01234567a905
* - Output: false
*
* Example 3:
* - Input: 036000241457
* - Output: true
*
* Example 4:
* - Input: 01
* - Output: false
*
* Example 5:
* - Input: 010101010105
* - Output: true
*/

function isValid ($upc):bool {
    
    if (!is_numeric($upc) || strlen($upc) !== 12) {
        return false;
    }

    $digits = str_split($upc);
    
    $odds = 0;
    $evens = 0;
    $total = count($digits) -1;

    for ($i = 0; $i < $total; $i++) {
        if ($digits[$i] % 2 === 0) {
            $evens += $digits[$i];
            continue;
        }
        
        $odds += $digits[$i];
    } 

    $sum = ($evens * 3) + $odds;
    $remainder = $sum % 10;

    if ($remainder == 0 && $digits[11] == $remainder) {
        return true;
    }
            
    // $remainder = 10 - $remainder;	
    return $digits[11] == $remainder;
}

function runTests () {

    $test = [
        '012345678905' => true, 
        '01234567a905' => false,
        '036000241457' => true,
        '01' => false,
        '010101010105' => true
    ];
    
    foreach ($test as $key => $value) {
        
        echo 'Result: '; 
        echo isValid($key) ? 'true' : 'false';
        echo ' - Expected: ';
        echo $value ? 'true' : 'false';
        echo "\n";
    }
}

runTests();