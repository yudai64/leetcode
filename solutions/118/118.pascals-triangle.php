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
        $output = [];
        $prev = [];

        $loop = 1;
        while ($loop <= $numRows) {
            $current = [];

            $current[] = 1;
            for ($i = 0; $i < count($prev) - 1; $i++) {
                $current[] = $prev[$i] + $prev[$i+1];
            }
            if ($loop !== 1) $current[] = 1;

            $prev = $current;
            $output[] = $current;
            $loop++;
        }

        return $output;
    }
}
// @lc code=end

