/*
 * @lc app=leetcode id=168 lang=php
 *
 * [168] Excel Sheet Column Title
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $answer = '';

        while ($columnNumber > 0) {
            $remainder = $columnNumber % 26;
            $columnNumber = intdiv($columnNumber, 26);
            if ($remainder === 0) {
                $remainder = 26;
                $columnNumber -= 1;
            }
            $answer = chr($remainder+64) . $answer;
        }

        return $answer;
    }
}
// @lc code=end

