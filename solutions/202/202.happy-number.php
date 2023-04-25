/*
 * @lc app=leetcode id=202 lang=php
 *
 * [202] Happy Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $array = [];
        while ($n !== 1) {
            $cur = 0;
            while ($n > 0) {
                $r = $n % 10;
                $cur += $r * $r;
                $n = (int)($n / 10);
            }

            if (array_key_exists($cur, $array)) return false;
            else {
                $array[$cur] = $cur;
                $n = $cur;
            }
        }

        return true;
    }
}
// @lc code=end

