/*
 * @lc app=leetcode id=118 lang=php
 *
 * [118] Pascal's Triangle
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $output = [[1]];

        for ($i = 0; $i < $numRows-1; $i++) {
            $tmp = array_merge([0], $output[count($output)-1], [0]);
            $cur = [];
            for ($j = 0; $j < count($tmp)-1; $j++) {
                $cur[] = $tmp[$j] + $tmp[$j+1];
            }
            $output[] = $cur;
        }

        return $output;
    }
}
// @lc code=end

