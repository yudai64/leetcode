/*
 * @lc app=leetcode id=217 lang=php
 *
 * [217] Contains Duplicate
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $hashtable = [];

        foreach ($nums as $num) {
            if (array_key_exists($num, $hashtable)) {
                return true;
            }
            else {
                $hashtable[$num] = true;
            }
        }

        return false;
    }
}
// @lc code=end

