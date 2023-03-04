/*
 * @lc app=leetcode id=66 lang=php
 *
 * [66] Plus One
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $digit = $digits[$i] + 1;
            if ($digit < 10) {
                $digits[$i] = $digit;
                return $digits;
            }
            $digits[$i] = $digit - 10;
        }

        array_unshift($digits, 1);

        return $digits;
    }
}
// @lc code=end

