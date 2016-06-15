<?php
/*
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/15
 * Time: 17:15
 */

//1 : »ù´¡ÓÃ·¨
class test2 extends \Grace\Base\Base {

    function run()
    {
    }

}

//phpunit tests/testBase


class SetTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $test = new test2();
    }

    public function testActions()
    {
        $test = new test2();
        $res = $test->actions();
        return $test->actions();
    }


    public function testTostring()
    {
        $test = new test2();
        echo $test;
        return $test->actions();
    }

    public function testInvoke()
    {
        $test = new test2(['md'=>9]);
        $ms =  $test('md');
        echo $ms;
    }


}

