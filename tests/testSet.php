<?php
/*
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/15
 * Time: 17:15
 */

//1 : 基础用法
class test2 extends \Grace\Base\Set {

    function run()
    {
    }

}

//phpunit tests/testSet


class SetTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $test = new test2();
    }

    public function testAll()
    {
        $test = new test2();
        $test->mmd = 3445;
        $test['mc'] = 1;
        $test['mcd'] = 2;
        echo $test['mc'];
        echo $test['mcd'];
        echo count($test);
        unset($test['mcd']);
        foreach($test as $key=>$value){
            echo $key .':' .$value.'<br>';
        }
    }

}
