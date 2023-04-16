/*
 * @lc app=leetcode id=169 lang=php
 *
 * [169] Majority Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $hashtable = [];

        foreach ($nums as $num) {
            if (array_key_exists($num, $hashtable)) $hashtable[$num]++;
            else $hashtable[$num] = 1;

            if ($hashtable[$num] > count($nums)/2) {
                return $num;
            }
        }
    }
}
// @lc code=end

