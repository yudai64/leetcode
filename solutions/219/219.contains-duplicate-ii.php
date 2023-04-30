/*
 * @lc app=leetcode id=219 lang=php
 *
 * [219] Contains Duplicate II
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $hashtable = [];

        foreach ($nums as $key => $num) {
            if (array_key_exists($num, $hashtable) && ($key - $hashtable[$num] <= $k)) {
                return true;
            }
            $hashtable[$num] = $key;
        }

        return false;
    }
}
// @lc code=end

