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
        if ($rowIndex === 0) {
            return [1];
        }

        $cur = [1];
        $prev = $this->getRow($rowIndex-1);
        for ($i = 0; $i < $rowIndex-1; $i++) {
            $cur[] = $prev[$i] + $prev[$i+1];
        }
        $cur[] = 1;

        return $cur;
    }
}
// @lc code=end

<!-- https://leetcode.com/problems/pascals-triangle-ii/solutions/3309610/easy-recursive-approach-beats-100/ -->
