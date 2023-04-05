/*
 * @lc app=leetcode id=119 lang=php
 *
 * [119] Pascal's Triangle II
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $output = [1];

        for ($i = 0; $i < $rowIndex; $i++) {
            $tmp = array_merge([0], $output, [0]);
            for ($j = 0; $j < count($tmp) - 1; $j++) {
                $output[$j] = $tmp[$j] + $tmp[$j+1];
            }
        }

        return $output;
    }
}
// @lc code=end

