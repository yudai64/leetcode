/*
 * @lc app=leetcode id=136 lang=php
 *
 * [136] Single Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $hashtable = [];

        for ($i = 0; $i < count($nums); $i++) {
            $cur = $nums[$i];
            if (array_key_exists($cur, $hashtable)) {
                unset($hashtable[$cur]);
            }
            else $hashtable[$cur] = $i;
        }

        return array_keys($hashtable)[0];
    }
}
// @lc code=end

