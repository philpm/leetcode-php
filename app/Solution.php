<?php
/**
 * leetcode-php
 * User: Phil<qin_phil@qq.com>
 * DateTime: 2019/6/28 1:27 PM
 */

class Solution {

    /**
     * no:001
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
     * 你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。
     * https://leetcode-cn.com/problems/two-sum
     */
    function twoSum($nums, $target) {
        $map = array();
        $count = count($nums);

        for($i=0;$i<$count;$i++){
            $diff = $target-$nums[$i];
            if(array_key_exists($diff,$map)){
                return [$map[$diff],$i];
            }
            $map[$nums[$i]]=$i;
        }
    }

    function ack($num){
        return $num;
    }
}