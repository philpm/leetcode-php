<?php
/**
 * leetcode-php
 * User: Phil<qin_phil@qq.com>
 * DateTime: 2019/6/28 3:01 PM
 */


namespace App\tests;
require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Solution.php';

use PHPUnit\Framework\TestCase;


class SolutionTest extends TestCase
{
    public function testTwoSum()
    {
        $obj = new \Solution();
        $this->assertEquals([0, 1], $obj->twoSum([2, 7, 11, 15], 9));
    }

    public function testAck()
    {
        $obj = new \Solution();
        $this->assertEquals(5, $obj->ack(5));
        $this->assertEquals(3, $obj->ack(5));
    }
}