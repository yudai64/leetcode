/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = "";
        $index = 0;

        for ($i = 0; $i < strlen($strs[0]); $i++) {
            $expectChar = $strs[0][$i];
            for ($j = 1; $j < count($strs); $j++) {
                if (strlen($strs[$j]) <= $i || $strs[$j][$i] !== $expectChar) {
                    return $prefix;
                }
            }
            $prefix .= $expectChar;
        }

        return $prefix;
    }
}
// @lc code=end
