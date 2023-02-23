/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashmap  = [];
        
        foreach($nums as $key => $value) {
            $hashmap[$value] = $key;
        }

        foreach($nums as $key => $value) {
            $diff = $target - $value;
            if ($hashmap[$diff] && $hashmap[$diff] > $key) {
                return [$key, $hashmap[$diff]];
            }
        }
    }
}
// @lc code=end

