/*
 * @lc app=leetcode id=171 lang=php
 *
 * [171] Excel Sheet Column Number
 */

// @lc code=start
class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $answer = 0;

        $loop = 0;
        for ($i = strlen($columnTitle)-1; $i >= 0; $i--) {
            $place = pow(26, $loop);
            $answer += (ord($columnTitle[$i]) - 64)  * $place;
            $loop++;
        }

        return $answer;
    }
}
// @lc code=end

