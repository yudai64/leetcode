/*
 * @lc app=leetcode id=121 lang=php
 *
 * [121] Best Time to Buy and Sell Stock
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $left = 0;
        $right = 1;

        while ($right < count($prices)) {
            $profit = $prices[$right] - $prices[$left];
            if ($prices[$right] > $prices[$left]) $maxProfit = max($maxProfit, $profit);
            else $left = $right;
            $right++;
        }

        return $maxProfit;
    }
}
// @lc code=end

