<?php
/**
 * Created by PhpStorm.
 * User: Everson Araújo
 * Date: 23/11/15
 * Time: 16:25
 */

namespace App\Utils;

class StringUtils
{

    const UPPER     = 'UPPER';
    const LOWWER    = 'LOWWER';

    public static function clean ($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    public static function removeSpecialChars ($params) {
        $string = is_array($params) ? implode('-', $params ) : $params;
        $string = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities($string));
        return preg_replace("/ /", "-", $string);
    }

    public static function getFirstWord($sentence) {
        $array = explode(' ',trim($sentence));
        return (empty($array)) ? '' : $array[0];
    }

    public static function random($size = 7, $withNumbers = true, $case = '', $prefix = '') {

        $characters = $withNumbers ? '123456789' : '';

        if ($case == self::UPPER) {
            $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } else if ($case == self::LOWWER) {
            $characters .= 'abcdefghijklmnopqrstuwxyz';
        } else {
            $characters .= 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        $charactersLength = strlen($characters);

        for ($i = 0; $i < $size; $i++) {
            $prefix .= $characters[rand(0, $charactersLength - 1)];
        }

        return $prefix;
    }

    public static function randomNumbers ($size = 7, $prefix = '') {

        $characters = '0123456789';
        $length = strlen($characters);

        for ($i = 0; $i < $size; $i++) {
            $prefix .= $characters[rand(0, $length - 1)];
        }

        return $prefix;
    }

    public static function generateToken () {
	    return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }

    public static function is_base64($s)
    {
        return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
    }
}
