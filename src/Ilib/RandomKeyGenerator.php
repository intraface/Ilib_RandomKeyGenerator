<?php
/**
 * Class to generate a random key - e.g. for passwords
 *
 * This class doesn't return any characters whick can be mistaken.
 * Won't return 0 (zero) or o (as in Ole) or 1 (one) or l (lars),
 * because they can be mistaken on print.
 *
 * PHP version 5
 *
 * @category  Utility
 * @package   Ilib_RandomKeyGenerator
 * @author    Lars Olesen <lars@legestue.net>
 * @copyright 2007 The authors
 * @license   GPL http://www.opensource.org/licenses/gpl-license.php
 * @version   @package-version@
 * @link      http://public.intraface.dk/index.php?package=Ilib_RandomKeyGenerator
 */

/**
 * Class to generate a random key - e.g. for passwords
 *
 * @category  Utility
 * @package   Ilib_RandomKeyGenerator
 * @author    Lars Olesen <lars@legestue.net>
 * @copyright 2007 Authors
 * @license   GPL http://www.opensource.org/licenses/gpl-license.php
 * @version   @package-version@
 * @link      http://public.intraface.dk/index.php?package=Ilib_RandomKeyGenerator
 */
class Ilib_RandomKeyGenerator
{
    /**
     * @var integer
     */
    private $length;

    /**
     * @var string
     */
    private $chars = 'abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789';

    /**
     * Constructor
     *
     * @param integer $length Length of the string to generate
     *
     * @return void
     */
    function __construct()
    {
    }

    /**
     * Makes a random key - e.g. for passwords
     *
     * Won't return 0 (zero) or o (as in Ole) or 1 (one) or l (lars), because they can be mistaken on print.
     *
     * @return string random key only letters
     */
    function generate($length = 6)
    {
        srand((double)microtime() * 1000000);
        $how_many = strlen($this->chars);
        $i        = 0;
        $pass     = '';

        while ($i < $length) {
            $num  = rand() % $how_many;
            $tmp  = substr($this->chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return $pass;
    }
}