<?php
/**
 * Test class requires Sebastian Bergmann's PHPUnit
 *
 * PHP version 5
 *
 * @category  Utility
 * @package   Ilib_RandomKeyGenerator
 * @author    Lars Olesen <lars@legestue.net>
 * @copyright 2007 Authors
 * @license   GPL http://www.opensource.org/licenses/gpl-license.php
 * @version   <package-version>
 * @link      http://public.intraface.dk
 */
require_once dirname(__FILE__) . '/../src/Ilib/RandomKeyGenerator.php';

/**
 * Test class
 *
 * @category  Utility
 * @package   Ilib_RandomKeyGenerator
 * @author    Lars Olesen <lars@legestue.net>
 * @copyright 2007 Authors
 * @license   GPL http://www.opensource.org/licenses/gpl-license.php
 * @version   <package-version>
 * @link      http://public.intraface.dk
 */
class RandomKeyGeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testDoesNotReturnZeroAnd0OrOneOrl()
    {
        $length = 6;
        $generator = new Ilib_RandomKeyGenerator();
        $key = $generator->generate($length);
        $chrs = array('1', 'l', '0', 'O', 'o');

        foreach ($chrs as $chr) {
            $this->assertFalse(strpos($key, $chr));
        }
    }

    public function testDoesReturnTheCorrectLength()
    {
        $length = 30;
        $generator = new Ilib_RandomKeyGenerator();
        $this->assertEquals($length, strlen($generator->generate($length)));

    }
}
